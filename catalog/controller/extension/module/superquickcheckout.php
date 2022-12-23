<?php

class ControllerExtensionModuleSuperquickcheckout extends Controller {
    private $error = '';

    public function index() {
        // Disable on product page if module setting "Position in the product page" is not default
        if (!empty($this->request->get['product_id']) && $this->config->get('module_superquickcheckout_position') != 'default') {
            return;
        }
        // Show module if Cart have products
        if (empty($this->request->get['product_id']) && !$this->cart->hasProducts()) {
            return;
        }

        $this->load->model('extension/module/superquickcheckout');

        if (!$this->model_extension_module_superquickcheckout->inOfficeHours()) {
            return;
        }

        return $this->getForm();
    }

    public function submit() {
        $json = array();

        if ($this->config->get('module_superquickcheckout_status') && !empty($this->request->post['superquickcheckout'])) {
            $this->load->language('extension/module/superquickcheckout');
            $this->load->model('extension/module/superquickcheckout');
        
            if ($this->validate()) {
                $data = $this->request->post['superquickcheckout'];
                $data['products'] = array();

                $postProductData = $this->request->post;
                unset($postProductData['superquickcheckout']);

                if (!empty($this->request->get['product_id'])) {
                    $data['products'][] = array(
                        'product_id'   => $this->request->get['product_id'],
                        'product_data' => $postProductData
                    );
                } else {
                    $products = $this->cart->getProducts();
                    $count = count($products);
                    $data['products'] = array();

                    for ($i=0; $i < $count; $i++) {
                        $product_temp = array(
                            'product_id'   => (int)$products[$i]['product_id'],
                            'product_data' => array(
                                'product_id' => (int)$products[$i]['product_id'],
                                'quantity'   => (int)$products[$i]['quantity'],
                                'option'     => array(),
                            )
                        );

                        $option_temp = array();
                        foreach ($products[$i]['option'] as $option) {
                            if ($option['type'] == 'checkbox') {
                                $option_temp[$option['product_option_id']][] = $option['product_option_value_id'];
                            } else {
                                $option_temp[$option['product_option_id']] = $option['product_option_value_id'];
                            }
                        }

                        $product_temp['product_data']['option'] = $option_temp;
                        $data['products'][$i] = $product_temp;
                    }
                }

                $request_id = $this->model_extension_module_superquickcheckout->submitOrder($data);
                $this->model_extension_module_superquickcheckout->persistData($data);

                if ($this->config->get('module_superquickcheckout_action') == 'message') {
                    $json['success'] = sprintf($this->language->get('superquickcheckout_success_submit'), $request_id);
                } else {
                    $json['redirect'] = $this->config->get('module_superquickcheckout_redirect');
                }
            } else {
                $json['error'] = $this->error;
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Event trigger catalog/view/product/product/before
     */
    public function loader(&$route, &$product_data, &$output) {
        if (!$this->config->get('module_superquickcheckout_status')) {
            return;
        }

        // Disable if module setting "Position in the product page" set to default
        if ($this->config->get('module_superquickcheckout_position') == 'default') {
            return;
        }

        // Recheck product page
        if (empty($this->request->get['product_id'])) {
            return;
        }

        $this->load->model('extension/module/superquickcheckout');

        if (!$this->model_extension_module_superquickcheckout->inOfficeHours()) {
            return;
        }

        $data = array();
        $data['position'] = $this->config->get('module_superquickcheckout_position');
        $data['form'] = $this->getForm();

        $product_data['footer'] = $this->load->view('extension/module/superquickcheckout/loader', $data) . $product_data['footer'];
    }

    /**
     * Event trigger: catalog/model/extension/module/superquickcheckout/submitOrder/after
     */
    public function notifyAdmin(&$route, &$args, &$output) {
        if (!$this->config->get('module_superquickcheckout_status')) {
            return;
        }

        if (!$this->config->get('module_superquickcheckout_admin_notification')) {
            return;
        }

        $this->load->model('extension/module/superquickcheckout');

        $this->load->language('extension/module/superquickcheckout');

        $superquickcheckout_order = $this->model_extension_module_superquickcheckout->getOrder($output);

        if (empty($superquickcheckout_order)) {
            return;
        }

        $subject = sprintf($this->language->get('superquickcheckout_admin_subject'), $superquickcheckout_order['superquickcheckout_order_id']);

        $data = array();
        $data['request_id'] = $superquickcheckout_order['superquickcheckout_order_id'];
        $data['name'] = $superquickcheckout_order['customer_name'];
        $data['email'] = $superquickcheckout_order['customer_email'];
        $data['telephone'] = $superquickcheckout_order['customer_telephone'];
        $data['comment'] = $superquickcheckout_order['customer_comment'];

        $message = $this->load->view('extension/module/superquickcheckout/mail_admin', $data);

        $mail = new Mail($this->config->get('config_mail_engine'));
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
        $mail->smtp_username = $this->config->get('config_mail_smtp_username');
        $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
        $mail->smtp_port = $this->config->get('config_mail_smtp_port');
        $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

        $mail->setTo($this->config->get('config_email'));
        $mail->setFrom($this->config->get('config_email'));
        $mail->setSender($this->config->get('config_name'));
        $mail->setSubject($subject);
        $mail->setText(nl2br(strip_tags($message)));
        $mail->setHtml($message);
        $mail->send();

        // Send to additional alert emails
        $emails = explode(',', $this->config->get('config_mail_alert_email'));

        foreach ($emails as $email) {
            if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mail->setTo($email);
                $mail->send();
            }
        }
    }

    /**
     * Event trigger: catalog/model/extension/module/superquickcheckout/submitOrder/after
     */
    public function notifyCustomer(&$route, &$args, &$output) {
        if (!$this->config->get('module_superquickcheckout_status')) {
            return;
        }

        if (!$this->config->get('module_superquickcheckout_customer_notification')) {
            return;
        }

        $this->load->model('extension/module/superquickcheckout');

        $this->load->language('extension/module/superquickcheckout');

        $superquickcheckout_order = $this->model_extension_module_superquickcheckout->getOrder($output);

        if (empty($superquickcheckout_order['customer_email'])) {
            return;
        }

        $subject = $this->model_extension_module_superquickcheckout->getMultilingualValue('module_superquickcheckout_email_subject');
        $message = $this->model_extension_module_superquickcheckout->renderCustomerMessage($superquickcheckout_order['superquickcheckout_order_id']);

        $mail = new Mail($this->config->get('config_mail_engine'));
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
        $mail->smtp_username = $this->config->get('config_mail_smtp_username');
        $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
        $mail->smtp_port = $this->config->get('config_mail_smtp_port');
        $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

        $mail->setTo($superquickcheckout_order['customer_email']);
        $mail->setFrom($this->config->get('config_email'));
        $mail->setSender($this->config->get('config_name'));
        $mail->setSubject($subject);
        $mail->setText(nl2br(strip_tags($message)));
        $mail->setHtml($message);
        $mail->send();
    }

    /**
     * Event trigger: catalog/model/checkout/order/addOrder/after
     */
    public function addOrder(&$route, &$args, &$output) {
        if (!empty($output) && isset($this->session->data['superquickcheckout_order_id'])) {
            $this->load->model('extension/module/superquickcheckout');

            $this->model_extension_module_superquickcheckout->fulfillOrder($this->session->data['superquickcheckout_order_id'], $output);
        }
    }

    protected function getForm() {
        $this->load->model('extension/module/superquickcheckout');

        $this->load->language('extension/module/superquickcheckout');

        $product_id = 0;
        if (!empty($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];
            $product_ids = array($product_id);
        } else {
            $product_ids = array();
            foreach ($this->cart->getProducts() as $product) {
                $product_ids[] = $product['product_id'];
            }
        }

        $data['action'] = preg_replace('~https?:~i', '', html_entity_decode($this->url->link('extension/module/superquickcheckout/submit', 'product_id=' . $product_id, true)));
        $data['form_html'] = $this->model_extension_module_superquickcheckout->renderForm();

        if (!isset($this->session->data['superquickcheckout']['ordered'])) {
            $this->session->data['superquickcheckout']['ordered'] = array();
        }
        $data['ordered'] = array_intersect($this->session->data['superquickcheckout']['ordered'], $product_ids);

        if ((bool)$this->config->get('module_superquickcheckout_widget')) {
            $rendered_html = $this->load->view('extension/module/superquickcheckout/form', $data);
            $widget_data['html'] = $rendered_html;
            $widget_data['title'] = $this->model_extension_module_superquickcheckout->getMultilingualValue('module_superquickcheckout_widget_heading');

            return $this->load->view('extension/module/superquickcheckout/widget', $widget_data);
        } else {
            $data['title'] = $this->model_extension_module_superquickcheckout->getMultilingualValue('module_superquickcheckout_widget_heading');
            $rendered_html = $this->load->view('extension/module/superquickcheckout/form', $data);
            return $rendered_html;
        }
    }

    protected function validate($product_id = 0) {
        // Specific product requirement
        if ($product_id) {
            $this->load->model('catalog/product');
            $product_info = $this->model_catalog_product->getProduct($product_id);

            if ($product_info) {
                $option = array();
                if (isset($this->request->post['option'])) {
                    $option = array_filter($this->request->post['option']);
                }

                $product_options = $this->model_catalog_product->getProductOptions($product_id);
                foreach ($product_options as $product_option) {
                    if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
                        $this->error = $this->language->get('text_product_error');
                        break;
                    }
                }
            }
        }

        // SQC form
        if (!$this->error) {
            $this->load->model('extension/module/superquickcheckout');
            $this->error = $this->model_extension_module_superquickcheckout->validatePost();
        }

        return !$this->error;
    }
}
