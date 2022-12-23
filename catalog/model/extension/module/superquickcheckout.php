<?php

class ModelExtensionModuleSuperquickcheckout extends Model {
    public function inOfficeHours() {
        if (!$this->config->get('module_superquickcheckout_hours_status')) {
            return true;
        }

        $time = time();
        $from = strtotime(date('Y-m-d ') . $this->config->get('module_superquickcheckout_hours_from') . ':00');
        $to = strtotime(date('Y-m-d ') . $this->config->get('module_superquickcheckout_hours_to') . ':00');

        return $time >= $from && $time <= $to;
    }

    public function getSetting($store_id) {
        $this->load->model('setting/setting');

        $result = $this->model_setting_setting->getSetting('module_superquickcheckout', $store_id);

        $own_settings = $this->db->query("SELECT * FROM `" . DB_PREFIX . "superquickcheckout_setting` WHERE store_id='" . (int)$store_id . "'")->rows;

        foreach ($own_settings as $own_setting) {
            if ((bool)$own_setting['is_serialized']) {
                $result[$own_setting['key']] = json_decode($own_setting['value'], true);
            } else {
                $result[$own_setting['key']] = $own_setting['value'];
            }
        }

        return $result;
    }

    public function getMultilingualValue($key) {
        $values = $this->getSetting($this->config->get('config_store_id'));

        if (is_array($values[$key]) && isset($values[$key][$this->config->get('config_language_id')])) {
            return $values[$key][$this->config->get('config_language_id')];
        }
    }

    public function renderCustomerMessage($superquickcheckout_order_id) {
        $html = html_entity_decode($this->getMultilingualValue('module_superquickcheckout_email_html'));

        $sqc_order = $this->getOrder($superquickcheckout_order_id);

        $products = '';
        foreach ($sqc_order['products'] as $product) {
            $productOption = '';
            $options = json_decode($product['product_data'], true);

            if (isset($options['option'])) {
                $productOptionName = array();

                foreach ($options['option'] as $product_option_id => $product_option_value_id) {
                    if (is_array($product_option_value_id)) {
                        foreach ($product_option_value_id as $key => $value) {
                            $select_option_value_id = $this->db->query("SELECT option_value_id from `" . DB_PREFIX . "product_option_value` where `product_option_value_id` = '" . $value . "'");
                            if ($select_option_value_id->num_rows) {
                                $select_option_name = $this->db->query("SELECT name from `" . DB_PREFIX . "option_value_description` where `option_value_id` = '" . $select_option_value_id->row['option_value_id'] . "'");
                                if ($select_option_name->num_rows) {
                                    $productOptionName[] = $select_option_name->row['name'];
                                }
                            } else {
                                $productOptionName[] = $product_option_value_id;
                            }
                        }
                    } else {
                        $select_option_value_id = $this->db->query("SELECT option_value_id from `" . DB_PREFIX . "product_option_value` where `product_option_value_id` = '" . $product_option_value_id . "'");
                        if ($select_option_value_id->num_rows) {
                            $select_option_name = $this->db->query("SELECT name from `" . DB_PREFIX . "option_value_description` where `option_value_id` = '" . $select_option_value_id->row['option_value_id'] . "'");
                            if ($select_option_name->num_rows) {
                                $productOptionName[] = $select_option_name->row['name'];
                            }
                        } else {
                            $productOptionName[] = $product_option_value_id;
                        }
                    }
                }

                $productOption = "<ul>";
                foreach ($productOptionName as $key => $name) {
                    $productOption .= "<li>". $name . "</li>";
                }
                $productOption .= "</ul>";
            }

            $products_temp = '<div style="margin-top:5px;">';
            $products_temp .= $product['name'];
            $products_temp .= $productOption;
            $products_temp .= '</div>';

            $products .= html_entity_decode($products_temp);
        }

        $search = array(
            '{phone}',
            '{email}',
            '{comment}',
            '{name}',
            '{product}',
            '{request_id}'
        );

        $replace = array(
            $sqc_order['customer_telephone'],
            $sqc_order['customer_email'],
            $sqc_order['customer_comment'],
            $sqc_order['customer_name'],
            $products,
            $superquickcheckout_order_id
        );

        return str_replace($search, $replace, $html);
    }

    public function renderForm() {
        $html = html_entity_decode($this->getMultilingualValue('module_superquickcheckout_form_html'));

        $search = array(
            '{tc_agreement}',
            '{phone_field}',
            '{email_field}',
            '{submit_button}',
            '{comment_field}',
            '{name_field}'
        );

        $replace = array(
            $this->renderTCField(),
            $this->renderTelephoneField(),
            $this->renderEmailField(),
            $this->renderSubmitButton(),
            $this->renderCommentField(),
            $this->renderNameField()
        );

        return str_replace($search, $replace, $html);
    }

    public function validatePost() {
        $this->load->language('extension/module/superquickcheckout');

        $html = html_entity_decode($this->getMultilingualValue('module_superquickcheckout_form_html'));

        $search = array(
            '{name_field}' => array($this, 'validateName'),
            '{phone_field}' => array($this, 'validateTelephone'),
            '{email_field}' => array($this, 'validateEmail'),
            '{tc_agreement}' => array($this, 'validateTC')
        );

        foreach ($search as $entity => $validator) {
            if ((false !== stripos($html, $entity)) && (false !== $error = $validator())) {
                return $error;
            }
        }

        return false;
    }

    public function submitOrder($data) {
        $customer_telephone = isset($data['telephone']) ? "'" . $this->db->escape($data['telephone']) . "'" : "NULL";
        $customer_email = isset($data['email']) ? "'" . $this->db->escape($data['email']) . "'" : "NULL";
        $customer_comment = isset($data['comment']) ? "'" . $this->db->escape($data['comment']) . "'" : "NULL";
        $customer_name = isset($data['name']) ? "'" . $this->db->escape($data['name']) . "'" : "NULL";
        $privacy_aggreement = isset($data['privacy_policy']) ? "'" . (int)$data['privacy_policy'] . "'" : "'0'";


        // $this->db->query("INSERT INTO `" . DB_PREFIX . "superquickcheckout_order` SET store_id='" . (int)$this->config->get('config_store_id') . "', product_id='" . (int)$data['product_id'] . "', product_data=" . $product_data . ", customer_telephone=" . $customer_telephone . ", customer_email=" . $customer_email . ", customer_comment=" . $customer_comment . ", customer_name=" . $customer_name . ", privacy_policy=" . $privacy_aggreement . ", date_added=NOW(), date_modified=NOW()");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "superquickcheckout_order` SET store_id='" . (int)$this->config->get('config_store_id') . "', customer_telephone=" . $customer_telephone . ", customer_email=" . $customer_email . ", customer_comment=" . $customer_comment . ", customer_name=" . $customer_name . ", privacy_policy=" . $privacy_aggreement . ", date_added=NOW(), date_modified=NOW()");
        $request_id = $this->db->getLastId();

        if (!empty($data['products'])) {
            foreach ($data['products'] as $product) {
                $product_data = isset($product['product_data']) ? "'" . $this->db->escape(json_encode($product['product_data'])) . "'" : "'[]'";
                $this->db->query("INSERT INTO `" . DB_PREFIX . "superquickcheckout_product` SET sqc_order_id='" . (int)$request_id . "', product_id='" . (int)$product['product_id'] . "', product_data=" . $product_data);
            }
        }

        // GDPR Compliance
        $settings = $this->getSetting($this->config->get('config_store_id'));
        if ($privacy_aggreement && is_file(DIR_SYSTEM . 'library' . DIRECTORY_SEPARATOR . 'gdpr.php') && !empty($settings['module_superquickcheckout_privacy_policy'])) {
            $this->load->library('gdpr');
            $customer_email = isset($data['email']) ? $data['email'] : 'Not Provided';
            $this->gdpr->newOptin($this->config->get('config_account_id'), $customer_email, 'SuperQuickCheckout');
        }

        return $request_id;
    }

    public function persistData($data) {
        if (isset($data['telephone'])) {
            $this->session->data['superquickcheckout']['telephone'] = $data['telephone'];
        }
        
        if (isset($data['email'])) {
            $this->session->data['superquickcheckout']['email'] = $data['email'];
        }
        
        if (isset($data['comment'])) {
            $this->session->data['superquickcheckout']['comment'] = $data['comment'];
        }
        
        if (isset($data['name'])) {
            $this->session->data['superquickcheckout']['name'] = $data['name'];
        }

        if (!empty($data['products'])) {
            foreach ($data['products'] as $product) {
                if (!in_array((int)$product['product_id'], $this->session->data['superquickcheckout']['ordered'])) {
                    $this->session->data['superquickcheckout']['ordered'][] = (int)$product['product_id'];
                }
            }
        }
    }

    public function getOrder($superquickcheckout_order_id) {
        $order = $this->db->query("SELECT * FROM `" . DB_PREFIX . "superquickcheckout_order` WHERE superquickcheckout_order_id='" . (int)$superquickcheckout_order_id . "'")->row;

        $order['products'] = array();
        if ($order) {
            $order['products'] = $this->db->query("SELECT sp.*, pd.name FROM `" . DB_PREFIX . "superquickcheckout_product` sp LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (sp.product_id = pd.product_id) WHERE sqc_order_id = '" . (int)$order['superquickcheckout_order_id'] . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'")->rows;
        }

        return $order;
    }

    public function fulfillOrder($superquickcheckout_order_id, $order_id) {
        $this->db->query("UPDATE `" . DB_PREFIX . "superquickcheckout_order` set order_id='" . (int)$order_id . "', date_modified=NOW() WHERE superquickcheckout_order_id='" . (int)$superquickcheckout_order_id . "'");
    }

    private function validateTC() {
        if (empty($this->request->post['superquickcheckout']['tc'])) {
            $this->load->model('catalog/information');

            $info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

            return sprintf($this->language->get('superquickcheckout_error_no_agree'), $info['title']);
        }

        $settings = $this->getSetting($this->config->get('config_store_id'));
        if (!empty($settings['module_superquickcheckout_privacy_policy']) && empty($this->request->post['superquickcheckout']['privacy_policy'])) {
            $this->load->model('catalog/information');
            $info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

            return sprintf($this->language->get('superquickcheckout_error_no_agree'), $info['title']);
        }

        return false;
    }

    private function validateName() {
        if (empty($this->request->post['superquickcheckout']['name'])) {
            return $this->language->get('superquickcheckout_error_no_name');
        }

        if ((utf8_strlen($this->request->post['superquickcheckout']['name']) < 1) || (utf8_strlen($this->request->post['superquickcheckout']['name']) > 65)) {
            return $this->language->get('superquickcheckout_error_name');
        }

        return false;
    }

    private function validateTelephone() {
        if (empty($this->request->post['superquickcheckout']['telephone'])) {
            return $this->language->get('superquickcheckout_error_no_telephone');
        }

        if ((utf8_strlen($this->request->post['superquickcheckout']['telephone']) < 3) || (utf8_strlen($this->request->post['superquickcheckout']['telephone']) > 32)) {
            return $this->language->get('superquickcheckout_error_telephone');
        }

        return false;
    }

    private function validateEmail() {
        if (empty($this->request->post['superquickcheckout']['email'])) {
            return $this->language->get('superquickcheckout_error_no_email');
        }

        if (false === filter_var($this->request->post['superquickcheckout']['email'], FILTER_VALIDATE_EMAIL)) {
            return $this->language->get('superquickcheckout_error_email');
        }

        if ((utf8_strlen($this->request->post['superquickcheckout']['email']) < 3) || (utf8_strlen($this->request->post['superquickcheckout']['email']) > 96)) {
            return $this->language->get('superquickcheckout_error_email_length');
        }

        return false;
    }

    private function renderTCField() {
        $this->load->language('extension/module/superquickcheckout');

        $this->load->model('catalog/information');

        // Term Condition
        $info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

        $tc_url = $this->url->link('information/information', 'information_id=' . $this->config->get('config_checkout_id'), true);
        $tc_title = $info['title'];
        $data['text_agree'] = sprintf($this->language->get('superquickcheckout_text_tc_agreement'), $tc_url, $tc_title);

        // Privacy Policy
        $settings = $this->getSetting($this->config->get('config_store_id'));

        $data['privacy_policy']['status'] = false;
        if (!empty($settings['module_superquickcheckout_privacy_policy'])) {
            $pp_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));
            $data['privacy_policy'] = array(
                'status' => true,
                'text'   => sprintf($this->language->get('text_privacy_agreement'), $this->url->link('information/information', 'information_id=' . $pp_info['information_id'], true), $pp_info['title'])
            );
        }

        return $this->load->view('extension/module/superquickcheckout/field/terms_conditions', $data);
    }

    private function renderTelephoneField() {
        if (isset($this->session->data['superquickcheckout']['telephone'])) {
            $data['value'] = $this->session->data['superquickcheckout']['telephone'];
        } else if ($this->customer->isLogged()) {
            $data['value'] = $this->customer->getTelephone();
        } else if (isset($this->session->data['guest']['telephone'])) {
            $data['value'] = $this->session->data['guest']['telephone'];
        } else {
            $data['value'] = '';
        }

        return $this->load->view('extension/module/superquickcheckout/field/telephone', $data);
    }

    private function renderEmailField() {
        if (isset($this->session->data['superquickcheckout']['email'])) {
            $data['value'] = $this->session->data['superquickcheckout']['email'];
        } else if ($this->customer->isLogged()) {
            $data['value'] = $this->customer->getEmail();
        } else if (isset($this->session->data['guest']['email'])) {
            $data['value'] = $this->session->data['guest']['email'];
        } else {
            $data['value'] = '';
        }

        return $this->load->view('extension/module/superquickcheckout/field/email', $data);
    }

    private function renderSubmitButton() {
        $data['value'] = $this->language->get('button_checkout');

        return $this->load->view('extension/module/superquickcheckout/field/submit', $data);
    }

    private function renderCommentField() {
        if (isset($this->session->data['superquickcheckout']['comment'])) {
            $data['value'] = $this->session->data['superquickcheckout']['comment'];
        } else {
            $data['value'] = '';
        }

        return $this->load->view('extension/module/superquickcheckout/field/comment', $data);
    }

    private function renderNameField() {
        if (isset($this->session->data['superquickcheckout']['name'])) {
            $data['value'] = $this->session->data['superquickcheckout']['name'];
        } else if ($this->customer->isLogged()) {
            $data['value'] = trim(trim($this->customer->getFirstName()) . ' ' . trim($this->customer->getLastName()));
        } else if (isset($this->session->data['guest']['firstname']) && isset($this->session->data['guest']['lastname'])) {
            $data['value'] = trim(trim($this->session->data['guest']['firstname']) . ' ' . trim($this->session->data['guest']['lastname']));
        } else {
            $data['value'] = '';
        }

        return $this->load->view('extension/module/superquickcheckout/field/name', $data);
    }
}
