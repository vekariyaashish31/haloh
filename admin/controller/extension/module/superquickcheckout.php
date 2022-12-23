<?php

class ControllerExtensionModuleSuperquickcheckout extends Controller {
    private $version = '3.0.4';
    private $mid = 'UDY2R4EQ36';
    private $iid = '100';
    private $error;

    public function index() {
        $this->update();

        $this->load->language('extension/module/superquickcheckout');

        $this->load->model('setting/setting');
        $this->load->model('extension/module/superquickcheckout');

        $stores = $this->model_extension_module_superquickcheckout->getStores();

        $store_id = isset($this->request->get['store_id']) ? $this->request->get['store_id'] : '0';

        $store = $stores[$store_id]['name'];

        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
            $this->model_extension_module_superquickcheckout->editSetting($this->request->post, $store_id);

            $success = $this->language->get('success_edit');
        } else if (isset($this->session->data['success'])) {
            $success = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $success = '';
        }

        // Needed only to check the license status. The actual settings should be retrieved via ModelExtensionModuleSuperquickcheckout::getSetting($store_id)
        $setting = $this->model_setting_setting->getSetting('module_superquickcheckout');

        $help = $this->url->link('extension/module/superquickcheckout/help', 'user_token=' . $this->session->data['user_token'], true);

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addStyle('view/stylesheet/vendor/isenselabs/superquickcheckout/stylesheet.css');

        $this->document->addScript('view/javascript/vendor/isenselabs/superquickcheckout/dimension-container.js');
        $this->document->addScript('view/javascript/vendor/isenselabs/superquickcheckout/timepicker.js');
        $this->document->addScript('view/javascript/vendor/isenselabs/superquickcheckout/persist-tabs.js');
        $this->document->addScript('view/javascript/vendor/isenselabs/superquickcheckout/delete-button.js');
        $this->document->addScript('view/javascript/summernote/summernote.js');
        $this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
        $this->document->addScript('view/javascript/summernote/opencart.js');
        $this->document->addStyle('view/javascript/summernote/summernote.css');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['error'] = '';

        if (isset($this->session->data['error'])) {
            $data['error'] = $this->session->data['error'];
            unset($this->session->data['error']);
        } else if ($this->error) {
            $data['error'] = implode(' ', $this->error);
        } else if (empty($setting['module_superquickcheckout_licensed_on'])) {
            $data['error'] = sprintf($this->language->get('error_license_missing'), $help);
        }

        $data['success'] = $success;

        $data['heading_dashboard'] = $this->language->get('heading_title') . ' ' . $this->version;
        $data['text_server_time'] = sprintf($this->language->get('text_server_time'), date('H:i'));
        $data['help_admin_notification'] = sprintf($this->language->get('help_admin_notification'), $this->config->get('config_email'));

        $data['help'] = $help;
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
        $data['save'] = $this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true);
        $data['orders_new'] = html_entity_decode($this->url->link('extension/module/superquickcheckout/orders', 'user_token=' . $this->session->data['user_token'] . '&type=new&store_id=' . $store_id . '&page={page}', true));
        $data['orders_fulfilled'] = html_entity_decode($this->url->link('extension/module/superquickcheckout/orders', 'user_token=' . $this->session->data['user_token'] . '&type=fulfilled&store_id=' . $store_id, true));
        $data['stores'] = $stores;
        $data['store'] = $store;
        $data['user_token'] = $this->session->data['user_token'];

        $data['status'] = $this->getSettingValue('status');
        $data['widget'] = $this->getSettingValue('widget');
        $data['position'] = $this->getSettingValue('position');
        $data['action'] = $this->getSettingValue('action');
        $data['redirect'] = $this->getSettingValue('redirect', 'index.php?route=checkout/success');
        $data['hours_status'] = $this->getSettingValue('hours_status');
        $data['hours_from'] = $this->getSettingValue('hours_from', '09:00');
        $data['hours_to'] = $this->getSettingValue('hours_to', '17:00');
        $data['admin_notification'] = $this->getSettingValue('admin_notification');
        $data['customer_notification'] = $this->getSettingValue('customer_notification');
        $data['form_html'] = $this->getSettingValue('form_html', $this->model_extension_module_superquickcheckout->getMultilingualDefault($this->language->get('text_default_form_html')));
        $data['email_html'] = $this->getSettingValue('email_html', $this->model_extension_module_superquickcheckout->getMultilingualDefault($this->language->get('text_default_email_html')));
        $data['email_subject'] = $this->getSettingValue('email_subject', $this->model_extension_module_superquickcheckout->getMultilingualDefault(sprintf($this->language->get('text_default_email_subject'), strip_tags($store))));
        $data['widget_heading'] = $this->getSettingValue('widget_heading', $this->model_extension_module_superquickcheckout->getMultilingualDefault($this->language->get('text_default_widget_heading')));
        $data['privacy_policy'] = $this->getSettingValue('privacy_policy', 0);

        $this->load->model("localisation/language");
        $data['languages'] = $this->model_localisation_language->getLanguages();

        $tabs = array();
        $tabs['setting'] = 'fa fa-wrench';
        $tabs['localisation'] = 'fa fa-flag';
        $tabs['orders_new'] = 'fa fa-bell';
        $tabs['orders_complete'] = 'fa fa-check';

        $data['tabs'] = array();

        foreach ($tabs as $tab => $icon) {
            $data['tabs'][$tab] = array(
                'html' => $this->load->view('extension/module/superquickcheckout/index/' . $tab, $data),
                'title' => $this->language->get('tab_' . $tab),
                'icon' => $icon
            );
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/superquickcheckout/index', $data));
    }

    public function help() {
        $this->load->language('extension/module/superquickcheckout');

        $this->load->model('setting/setting');

        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
            $license_settings = array();

            if (!empty($this->request->post['OaXRyb1BhY2sgLSBDb21'])) {
                $license_settings['module_superquickcheckout_licensed_on'] = $this->request->post['OaXRyb1BhY2sgLSBDb21'];
            }

            if (!empty($this->request->post['cHRpbWl6YXRpb24ef4fe'])) {
                $license_settings['module_superquickcheckout_license'] = json_decode(base64_decode($this->request->post['cHRpbWl6YXRpb24ef4fe']), true);
            }

            $this->model_setting_setting->editSetting('module_superquickcheckout', array_merge($this->model_setting_setting->getSetting('module_superquickcheckout'), $license_settings));

            $this->session->data['success'] = $this->language->get('success_license');

            $this->response->redirect($this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('button_help'),
            'href' => $this->url->link('extension/module/superquickcheckout/help', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['error'] = '';

        if ($this->error) {
            $data['error'] = implode(' ', $this->error);
        }

        $data['cancel'] = $this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['license'] = $this->getSettingValue('license');

        $data['heading_help'] = sprintf($this->language->get('heading_help'), $this->language->get('heading_title') . ' ' . $this->version);

        $setting = $this->model_setting_setting->getSetting('module_superquickcheckout');

        $data['ticket_open'] = "http://isenselabs.com/tickets/open/" . base64_encode('Support Request') . '/' . base64_encode($this->iid) . '/' . base64_encode($this->request->server['SERVER_NAME']);

        if (!empty($setting['module_superquickcheckout_licensed_on']) && !empty($setting['module_superquickcheckout_license'])) {
            $data['licenced'] = true;
            $data['domains'] = $setting['module_superquickcheckout_license']['licenseDomainsUsed'];
            $data['customer'] = $setting['module_superquickcheckout_license']['customerName'];
            $data['license_encoded'] = base64_encode(json_encode($setting['module_superquickcheckout_license']));
            $data['license_expiry_date'] = date($this->language->get('date_format_short'), strtotime($setting['module_superquickcheckout_license']['licenseExpireDate']));
        } else {
            $data['licenced'] = false;
            $data['now'] = time();
            $data['mid'] = $this->mid;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/superquickcheckout/help', $data));
    }

    public function delete() {
        $this->load->language('extension/module/superquickcheckout');

        $this->load->model('extension/module/superquickcheckout');

        if ($this->validate()) {
            $this->model_extension_module_superquickcheckout->deleteOrder($this->request->get['superquickcheckout_order_id']);

            $this->session->data['success'] = $this->language->get('success_delete');
        } else {
            $this->session->data['error'] = $this->error['warning'];
        }

        $this->response->redirect($this->request->server['HTTP_REFERER']);
    }

    public function orders() {
        $this->load->language('extension/module/superquickcheckout');

        $this->load->model('extension/module/superquickcheckout');

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['type']) && in_array($this->request->get['type'], array('new', 'fulfilled'))) {
            $type = $this->request->get['type'];
        } else {
            $type = 'new';
        }

        $result = array(
            'orders' => array(),
            'pagination' => ''
        );

        $filter_data = array(
            'start' => ($page - 1) * (int)$this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin'),
            'type' => $type
        );

        $orders_total = $this->model_extension_module_superquickcheckout->getTotalOrders($filter_data);
        $orders = $this->model_extension_module_superquickcheckout->getOrders($filter_data);

        $this->load->model('sale/order');
        $this->load->model('catalog/product');

        foreach ($orders as $order) {
            $store_info  = $this->model_extension_module_superquickcheckout->getStore($order['store_id']);

            $products = array();
            if (!empty($order['products'])) {
                foreach ($order['products'] as $order_product) {
                    $options = array();
                    $product_data = json_decode($order_product['product_data'], true);

                    $quantity = 1;
                    if (!empty($product_data['quantity'])) {
                        $quantity = $product_data['quantity'];
                    }

                    if ($product_data && !empty($product_data['option'])) {
                        $product_data['option'] = array_filter($product_data['option']);
                        $product_options = $this->model_catalog_product->getProductOptions($order_product['product_id']);

                        foreach ($product_options as $product_option) {
                            if (array_key_exists($product_option['product_option_id'], $product_data['option'])) {
                                $value = $product_option['type'] == 'checkbox' ? $product_data['option'][$product_option['product_option_id']][0] : $product_data['option'][$product_option['product_option_id']];

                                if ($product_option['product_option_value']) {
                                    $option_value = $this->model_catalog_product->getProductOptionValue($order_product['product_id'], $value);
                                    if ($option_value) {
                                        $value = $option_value['name'];
                                    }
                                }

                                $options[] = array(
                                    'name'  => $product_option['name'],
                                    'type'  => $product_option['type'],
                                    'value' => $value,
                                    'product_option_id' => $product_option['product_option_id'],
                                );
                            }
                        }
                    }

                    $products[] = array(
                        'product_id' => $order_product['product_id'],
                        'name'       => $order_product['name'],
                        'quantity'   => $quantity,
                        'options'    => $options,
                        'url'        => $this->model_extension_module_superquickcheckout->productURL($order['store_id'], $order_product['product_id']),
                    );
                }
            }

            $result['orders'][] = array(
                'superquickcheckout_order_id' => $order['superquickcheckout_order_id'],
                'order_id' => $order['order_id'],
                'url_order' => html_entity_decode($this->url->link('sale/order/info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order['order_id'], true)),
                'url_delete' => html_entity_decode($this->url->link('extension/module/superquickcheckout/delete', 'user_token=' . $this->session->data['user_token'] . '&superquickcheckout_order_id=' . $order['superquickcheckout_order_id'] . '&store_id=' . $this->request->get['store_id'], true)),
                'url_create' => html_entity_decode($this->url->link('sale/order/add', 'user_token=' . $this->session->data['user_token'] . '&superquickcheckout_order_id=' . $order['superquickcheckout_order_id'], true)),
                'telephone' => !empty($order['customer_telephone']) ? $order['customer_telephone'] : $this->language->get('text_na'),
                'email' => !empty($order['customer_email']) ? $order['customer_email'] : $this->language->get('text_na'),
                'comment' => !empty($order['customer_comment']) ? htmlentities($order['customer_comment']) : $this->language->get('text_na'),
                'name' => !empty($order['customer_name']) ? $order['customer_name'] : $this->language->get('text_na'),
                'store' => $store_info['name'],
                'privacy_policy' => !empty($order['privacy_policy']) ? $this->language->get('text_agree') : $this->language->get('text_na'),
                'date_created' => date($this->language->get('datetime_format'), strtotime($order['date_added'])),
                'products' => $products,
            );
        }

        $pagination = new Pagination();
        $pagination->total = $orders_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = '{page}';

        $result['pagination'] = $pagination->render();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

    /**
     * Events trigger: admin/view/sale/order_form/before
     */
    public function addOrder(&$route, &$args, &$output) {
        $api_info = $this->model_user_api->getApi($this->config->get('config_api_id'));

        if (!empty($api_info) && $this->user->hasPermission('modify', 'sale/order') && $this->request->get['route'] == 'sale/order/add' && isset($this->request->get['superquickcheckout_order_id'])) {

            $this->load->model('extension/module/superquickcheckout');

            $data = $this->model_extension_module_superquickcheckout->getOrder($this->request->get['superquickcheckout_order_id']);

            $customer = '';
            $customer_id = '';
            $customer_group_id = $this->config->get('config_customer_group_id');
            $firstname = '';
            $lastname = '';
            $email = '';
            $telephone = '';
            $comment = '';
            $addresses = array();
            $store_id = $data['store_id'];

            $store_info = $this->model_extension_module_superquickcheckout->getStore($store_id);
            $store_url = $this->request->server['HTTPS'] ? $store_info['href_ssl'] : $store_info['href'];

            if (!empty($data['customer_email'])) {
                $email = $data['customer_email'];

                $this->load->model('customer/customer');

                $customer_info = $this->model_customer_customer->getCustomerByEmail($data['customer_email']);

                if (!empty($customer_info)) {
                    $customer = $customer_info['firstname'] . ' ' . $customer_info['lastname'];
                    $customer_id = $customer_info['customer_id'];
                    $customer_group_id = $customer_info['customer_group_id'];
                    $firstname = $customer_info['firstname'];
                    $lastname = $customer_info['lastname'];
                    $email = $customer_info['email'];
                    $telephone = $customer_info['telephone'];

                    $addresses = $this->model_customer_customer->getAddresses($customer_info['customer_id']);
                }
            }

            if (!empty($data['customer_name'])) {
                $names = array_values(array_filter(explode(' ', $data['customer_name'])));
                $customer = implode(' ', $names);

                if (!empty($names[0])) {
                    $firstname = array_shift($names);
                }

                if (!empty($names)) {
                    $lastname = implode(' ', $names);
                }
            }

            if (!empty($data['customer_telephone'])) {
                $telephone = $data['customer_telephone'];
            }

            if (!empty($data['customer_comment'])) {
                $comment = $data['customer_comment'];
            }

            $this->load->model('catalog/product');

            $order_products = array();
            if (!empty($data['products'])) {
                foreach ($data['products'] as $order_product) {
                    $product_info = $this->model_catalog_product->getProduct($order_product['product_id']);

                    if (!empty($order_product['product_data'])) {
                        $options = array();
                        $product_data = json_decode($order_product['product_data'], true);
                        $product_info['quantity'] = 1;

                        if ($product_data) {
                            $product_info['quantity'] = max($product_data['quantity'], 1);

                            if (!empty($product_data['option'])) {
                                $product_data['option'] = array_filter($product_data['option']);
                                $product_options = $this->model_catalog_product->getProductOptions($order_product['product_id']);

                                foreach ($product_options as $product_option) {
                                    if (array_key_exists($product_option['product_option_id'], $product_data['option'])) {
                                        $value = $product_option['type'] == 'checkbox' ? $product_data['option'][$product_option['product_option_id']][0] : $product_data['option'][$product_option['product_option_id']];
                                        $options[] = array(
                                            'name'  => $product_option['name'],
                                            'type'  => $product_option['type'],
                                            'value' => $value,
                                            'product_option_id' => $product_option['product_option_id'],
                                            'product_option_value_id' => $value
                                        );
                                    }
                                }
                            }
                        }
                    }

                    $order_products[] = array(
                        'product_id' => $product_info['product_id'],
                        'name'       => $product_info['name'],
                        'model'      => $product_info['model'],
                        'option'     => $options,
                        'quantity'   => $product_info['quantity'],
                        'price'      => $product_info['price'],
                        'total'      => (float)$product_info['price'] * (int)$product_info['quantity'],
                        'reward'     => 0
                    );
                }
            }

            $session = new Session($this->config->get('session_engine'), $this->registry);
            $session->start($args['api_token']);
            $session->data['api_id'] = $api_info['api_id'];
            $session->data['superquickcheckout_order_id'] = $data['superquickcheckout_order_id'];

            $args['api_token'] = $session->getId();
            $args['store_id'] = $store_id;
            $args['store_url'] = $store_url;
            $args['customer'] = $customer;
            $args['customer_id'] = $customer_id;
            $args['customer_group_id'] = $customer_group_id;
            $args['firstname'] = $firstname;
            $args['lastname'] = $lastname;
            $args['email'] = $email;
            $args['telephone'] = $telephone;
            $args['addresses'] = $addresses;
            $args['comment'] = $comment;
            $args['order_products'] = $order_products;
        }
    }

    /**
     * Events trigger: admin/view/common/column_left/before
     */
    public function adminMenuLink(&$route, &$args, &$output) {
        foreach ($args['menus'] as &$menu) {
            if ($menu['id'] == 'menu-sale') {
                array_splice($menu['children'], 1, 0, array(array(
                    'name' => 'SuperQuickCheckout',
                    'href' => $this->url->link('extension/module/superquickcheckout', 'tab=orders_new&user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                )));

                return;
            }
        }
    }

    public function install() {
        if ($this->user->hasPermission('modify', 'extension/extension/module')) {
            $this->load->model('extension/module/superquickcheckout');
            $this->load->model('setting/setting');

            $this->model_extension_module_superquickcheckout->updateProductLayout();
            $this->model_extension_module_superquickcheckout->addEvents();
            $this->model_extension_module_superquickcheckout->createTables();

            /* * *
             *
             * This is to ensure the correct name will be displayed in Design/Layouts > Product,
             * just in case someone does not save the extension settings immediately after installing the extension.
             *
             * * */

            $this->model_setting_setting->editSetting('module_superquickcheckout', array('module_superquickcheckout_status' => '0'));

            $this->model_setting_extension->install('dashboard', 'superquickcheckout');

            $this->load->model('user/user_group');

            $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/dashboard/superquickcheckout');
            $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/dashboard/superquickcheckout');

            $this->model_setting_setting->editSetting('dashboard_superquickcheckout', array(
                'dashboard_superquickcheckout_status' => '1',
                'dashboard_superquickcheckout_width' => '12',
                'dashboard_superquickcheckout_sort_order' => '10'
            ));
        }
    }

    protected function update() {
        // v3.0.1: add 'product_info' and 'privacy_policy' column if not exist
        $check_privacy_policy_column = $this->db->query("SHOW COLUMNS FROM `".DB_PREFIX."superquickcheckout_order` LIKE 'privacy_policy' ");
        if (!$check_privacy_policy_column->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "superquickcheckout_order` ADD `privacy_policy` INT(11) NULL DEFAULT '0' AFTER `customer_name`;");
        }

        // v3.0.4
        $table_sqc_products = $this->db->query("SELECT * FROM information_schema.TABLES WHERE TABLE_SCHEMA='" . $this->db->escape(DB_DATABASE) . "' AND TABLE_NAME='" . DB_PREFIX . "superquickcheckout_product'")->num_rows;
        if (!$table_sqc_products) {
            $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "superquickcheckout_product` (`order_product_id` INT NOT NULL AUTO_INCREMENT , `sqc_order_id` INT NULL , `product_id` INT NOT NULL , `product_data` TEXT NULL, PRIMARY KEY (`order_product_id`)) ENGINE = MyISAM DEFAULT CHARSET=utf8");

            $sqc_orders = $this->db->query("SELECT * FROM `" . DB_PREFIX . "superquickcheckout_order`")->rows;
            foreach ($sqc_orders as $order) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "superquickcheckout_product` SET sqc_order_id='" . (int)$order['superquickcheckout_order_id'] . "', product_id='" . (int)$order['product_id'] . "', product_data='" . $order['product_data'] . "'");
            }

            $this->db->query("ALTER TABLE `" . DB_PREFIX . "superquickcheckout_order` DROP COLUMN `product_id`, DROP COLUMN `product_data`");
        }
    }

    public function uninstall() {
        if ($this->user->hasPermission('modify', 'extension/extension/module')) {
            $this->load->model('extension/module/superquickcheckout');

            $this->model_extension_module_superquickcheckout->deleteEvents();
            $this->model_extension_module_superquickcheckout->dropTables();
        }
    }

    protected function validate() {
        $this->error = array();

        if (!$this->user->hasPermission('modify', 'extension/module/superquickcheckout')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function getSettingValue($key, $default = null) {
        if (isset($this->request->post['module_superquickcheckout_' . $key])) {
            return $this->request->post['module_superquickcheckout_' . $key];
        } else {
            $store_id = isset($this->request->get['store_id']) ? $this->request->get['store_id'] : '0';

            $this->load->model('extension/module/superquickcheckout');

            $settings = $this->model_extension_module_superquickcheckout->getSetting($store_id);

            if (isset($settings['module_superquickcheckout_' . $key])) {
                return $settings['module_superquickcheckout_' . $key];
            } else {
                return $default;
            }
        }
    }
}
