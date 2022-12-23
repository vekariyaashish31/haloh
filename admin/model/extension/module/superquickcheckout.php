<?php

class ModelExtensionModuleSuperquickcheckout extends Model {
    private $events = array(
        array(
            'trigger' => 'catalog/view/product/product/before',
            'action' => 'extension/module/superquickcheckout/loader'
        ),
        array(
            'trigger' => 'catalog/model/extension/module/superquickcheckout/submitOrder/after',
            'action' => 'extension/module/superquickcheckout/notifyAdmin'
        ),
        array(
            'trigger' => 'catalog/model/extension/module/superquickcheckout/submitOrder/after',
            'action' => 'extension/module/superquickcheckout/notifyCustomer'
        ),
        array(
            'trigger' => 'catalog/model/checkout/order/addOrder/after',
            'action' => 'extension/module/superquickcheckout/addOrder'
        ),
        array(
            'trigger' => 'admin/view/sale/order_form/before',
            'action' => 'extension/module/superquickcheckout/addOrder'
        ),
        array(
            'trigger' => 'admin/view/common/column_left/before',
            'action' => 'extension/module/superquickcheckout/adminMenuLink'
        )
    );

    public function isInstalled() {
        return $this->db->query("SELECT * FROM information_schema.TABLES WHERE TABLE_SCHEMA='" . $this->db->escape(DB_DATABASE) . "' AND TABLE_NAME='" . DB_PREFIX . "superquickcheckout_order'")->num_rows > 0;
    }

    public function productURL($store_id, $product_id) {
        $store_info = $this->getStore($store_id);

        return preg_replace('~^https?:~i', '', $store_info['href']) . 'index.php?route=product/product&product_id=' . $product_id;
    }

    public function getOrder($superquickcheckout_order_id) {
        $order = $this->db->query("SELECT * FROM `" . DB_PREFIX . "superquickcheckout_order` WHERE superquickcheckout_order_id='" . (int)$superquickcheckout_order_id . "'")->row;

        $order['products'] = array();
        if ($order) {
            $order['products'] = $this->db->query("SELECT sp.*, pd.name FROM `" . DB_PREFIX . "superquickcheckout_product` sp LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (sp.product_id = pd.product_id) WHERE sqc_order_id = '" . (int)$order['superquickcheckout_order_id'] . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'")->rows;
        }

        return $order;
    }

    public function getOrders($filter_data) {
        $sql = "SELECT * FROM `" . DB_PREFIX . "superquickcheckout_order` WHERE";

        if ($filter_data['type'] == 'new') {
            $sql .= " order_id IS NULL";
        } else {
            $sql .= " order_id IS NOT NULL";
        }

        $sql .= " ORDER BY date_added DESC";

        if (isset($filter_data['start']) && isset($filter_data['limit'])) {
            $sql .= " LIMIT " . (int)$filter_data['start'] . ', ' . $filter_data['limit'];
        }

        $data = array();
        $results = $this->db->query($sql)->rows;

        foreach ($results as $order) {
            $order['products'] = $this->db->query("SELECT sp.*, pd.name FROM `" . DB_PREFIX . "superquickcheckout_product` sp LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (sp.product_id = pd.product_id) WHERE sqc_order_id = '" . (int)$order['superquickcheckout_order_id'] . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'")->rows;
            $data[] = $order;
        }

        return $data;
    }

    public function getTotalOrders($filter_data) {
        $sql = "SELECT COUNT(*) as total FROM `" . DB_PREFIX . "superquickcheckout_order` WHERE";

        if ($filter_data['type'] == 'new') {
            $sql .= " order_id IS NULL";
        } else {
            $sql .= " order_id IS NOT NULL";
        }

        return (int)$this->db->query($sql)->row['total'];
    }

    public function getStore($store_id) {
        $stores = $this->getStores(false);

        return $stores[$store_id];
    }

    public function getStores($default = true) {
        $result = array();

        $result['0'] = array(
            'name' => $this->config->get('config_name') . ' ' . ($default ? $this->language->get('text_default') : ''),
            'href' => HTTP_CATALOG,
            'href_ssl' => HTTPS_CATALOG,
            'url' => $this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'], true)
        );

        $this->load->model('setting/store');

        foreach ($this->model_setting_store->getStores() as $store) {
            $result[$store['store_id']] = array(
                'name' => $store['name'],
                'href' => $store['url'],
                'href_ssl' => $store['ssl'],
                'url' => $this->url->link('extension/module/superquickcheckout', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id'], true)
            );
        }

        return $result;
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

    public function editSetting($post, $store_id) {
        $this->load->model('setting/setting');

        $setting_table = $post;
        $own_table = array();

        $own_table_keys = array(
            'module_superquickcheckout_form_html',
            'module_superquickcheckout_email_html'
        );

        foreach ($setting_table as $key => $val) {
            if (in_array($key, $own_table_keys)) {
                $own_table[$key] = $val;
                unset($setting_table[$key]);
            }
        }

        // Preserve license, if exists
        if ($store_id == 0) {
            $licensed_on = $this->model_setting_setting->getSettingValue('module_superquickcheckout_licensed_on');
            $license = @json_decode($this->model_setting_setting->getSettingValue('module_superquickcheckout_license'), true);

            if (!empty($licensed_on) && !empty($license)) {
                $setting_table['module_superquickcheckout_licensed_on'] = $licensed_on;
                $setting_table['module_superquickcheckout_license'] = $license;
            }
        }

        $this->model_setting_setting->editSetting('module_superquickcheckout', $setting_table, $store_id);

        foreach ($own_table as $key => $value) {
            $is_serialized = is_array($value);

            if ($is_serialized) {
                $value = json_encode($value);
            }

            $this->db->query("REPLACE INTO `" . DB_PREFIX . "superquickcheckout_setting` SET `store_id`='" . (int)$store_id . "', `key`='" . $this->db->escape($key) . "', `value`='" . $this->db->escape($value) . "', `is_serialized`='" . (int)$is_serialized . "'");
        }
    }

    public function addEvents() {
        $this->load->model('setting/event');

        foreach ($this->events as $event) {
            $this->model_setting_event->addEvent('superquickcheckout', $event['trigger'], $event['action']);
        }
    }

    public function deleteEvents() {
        $this->load->model('setting/event');
        
        $this->model_setting_event->deleteEventByCode('superquickcheckout');
    }

    public function createTables() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "superquickcheckout_setting` (`superquickcheckout_setting_id` int(11) NOT NULL AUTO_INCREMENT, `store_id` int(11) NOT NULL, `key` varchar(255) NOT NULL, `value` mediumtext NOT NULL, PRIMARY KEY (`superquickcheckout_setting_id`), `is_serialized` tinyint(1) NOT NULL, UNIQUE KEY `store_id_key` (`store_id`,`key`) USING BTREE) ENGINE=MyISAM DEFAULT CHARSET=utf8");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "superquickcheckout_order` ( `superquickcheckout_order_id` INT NOT NULL AUTO_INCREMENT , `store_id` INT NOT NULL , `order_id` INT NULL , `product_id` INT NOT NULL , `product_data` TEXT NULL, `customer_telephone` VARCHAR(32) NULL , `customer_email` VARCHAR(96) NULL , `customer_comment` TEXT NULL , `customer_name` VARCHAR(65) NULL, `privacy_policy` INT(11) NULL DEFAULT '0', `date_added` DATETIME NOT NULL, `date_modified` DATETIME NOT NULL, PRIMARY KEY (`superquickcheckout_order_id`)) ENGINE = MyISAM DEFAULT CHARSET=utf8");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "superquickcheckout_product` (`order_product_id` INT NOT NULL AUTO_INCREMENT , `sqc_order_id` INT NULL , `product_id` INT NOT NULL , `product_data` TEXT NULL, PRIMARY KEY (`order_product_id`)) ENGINE = MyISAM DEFAULT CHARSET=utf8");
    }

    public function dropTables() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "superquickcheckout_setting`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "superquickcheckout_order`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "superquickcheckout_product`");
    }

    public function getMultilingualDefault($value) {
        $this->load->model("localisation/language");

        $result = array();

        foreach ($this->model_localisation_language->getLanguages() as $language) {
            $result[$language['language_id']] = $value;
        }

        return $result;
    }

    public function updateProductLayout() {
        $this->load->model('design/layout');

        $layouts = $this->model_design_layout->getLayouts();

        foreach ($layouts as $layout) {
            $routes = $this->model_design_layout->getLayoutRoutes($layout['layout_id']);

            foreach ($routes as $route) {
                if ($route['route'] == 'product/product') {
                    $this->updateLayout($layout['layout_id']);
                }
            }
        }
    }

    public function deleteOrder($superquickcheckout_order_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "superquickcheckout_order` WHERE superquickcheckout_order_id='" . (int)$superquickcheckout_order_id . "'");
        $this->db->query("DELETE FROM `" . DB_PREFIX . "superquickcheckout_product` WHERE sqc_order_id='" . (int)$superquickcheckout_order_id . "'");
    }

    private function updateLayout($layout_id) {
        $this->load->model('design/layout');

        $modules = $this->model_design_layout->getLayoutModules($layout_id);
        $found = false;

        foreach ($modules as $module) {
            if (stripos($module['code'], 'superquickcheckout') === 0) {
                $found = true;
                break;
            }
        }

        if (!$found) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "layout_module SET layout_id = '" . (int)$layout_id . "', code = 'superquickcheckout', position = 'column_right', sort_order = '0'");
        }
    }
}
