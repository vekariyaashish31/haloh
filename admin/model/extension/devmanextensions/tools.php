<?php 
class ModelExtensionDevmanextensionsTools extends Model {

    public function __construct($registry) {
        parent::__construct($registry);

        $loader = new Loader($registry);
        $loader->language('devmanextensions/tools');

        $loader->model('localisation/language');

        //Devman Extensons - info@devmanextensions.com - 2016-10-09 19:39:52 - Load languages
            $languages = $this->model_localisation_language->getLanguages();
            $this->langs = $this->formatLanguages($languages);
        //END

        $this->oc_2 = version_compare(VERSION, '2.0.0.0', '>=');

        $this->db_prefix = $this->db_prefix == '' ? DB_PREFIX : $this->db_prefix;
    }
    
    //Anothers functions
        public function getStores()
        {
            $this->load->model('setting/store');
            $stores = array();
            $stores[0] = array(
                'store_id' => '0',
                'name' => $this->config->get('config_name'),
                'url' => HTTP_CATALOG
            );

            $stores_temp = $this->model_setting_store->getStores();
            foreach ($stores_temp as $key => $value) {
                $stores[] = $value;
            }
            return $stores;
        }

        public function getTaxClassesSelect($empty = true)
        {
            $this->load->model('localisation/tax_class');
            $tax_classes = $this->model_localisation_tax_class->getTaxClasses();

            $tax_classes_select = array();

            if($empty)
                $tax_classes_select = array('' => $this->language->get('text_none_tax_class'));
            
            foreach ($tax_classes as $key => $tx) {
                $tax_classes_select[$tx['tax_class_id']] = $tx['title'];
            }
            return $tax_classes_select;
        }

        public function getLengthClassesSelect($empty = true)
        {
            $this->load->model('localisation/length_class');
            $length_classes = $this->model_localisation_length_class->getLengthClasses();

            $length_classes_select = array();

            if($empty)
                $length_classes_select = array('' => $this->language->get('text_none_length_class'));

            foreach ($length_classes as $key => $le) {
                $length_classes_select[$le['length_class_id']] = $le['title'].' ['.$le['unit'].']';
            }
            return $length_classes_select;
        }

        public function getWeightClassesSelect($empty = true)
        {
            $this->load->model('localisation/weight_class');
            $weight_classes = $this->model_localisation_weight_class->getWeightClasses();

            $weight_classes_select = array();

            if($empty)
                $weight_classes_select = array('' => $this->language->get('text_none_weight_class'));

            foreach ($weight_classes as $key => $we) {
                $weight_classes_select[$we['weight_class_id']] = $we['title'].' ['.$we['unit'].']';
            }
            return $weight_classes_select;
        }

        public function getCategoriesSelect($empty = true)
        {
            $this->load->model('catalog/category');

            $categories_select = array();

            if($empty)
                $categories_select = array('' => $this->language->get('text_none_category'));

            $categories = $this->model_catalog_category->getCategories(true);
            $categories = $this->aasort($categories, 'name');

            foreach ($categories as $key => $cat) {
                $categories_select[$cat['category_id']] = $cat['name'];
            }

            return $categories_select;
        }

        public function getManufacturersSelect($empty = true)
        {
            $this->load->model('catalog/manufacturer');

            $manufacturers_select = array();

            if($empty)
                $manufacturers_select = array('' => $this->language->get('text_none_manufacturer'));

            $manufacturers = $this->model_catalog_manufacturer->getManufacturers(true);
            $manufacturers = $this->aasort($manufacturers, 'name');

            foreach ($manufacturers as $key => $cat) {
                $manufacturers_select[$cat['manufacturer_id']] = $cat['name'];
            }

            return $manufacturers_select;
        }

        public function getUsersSelect($empty = true)
        {
            $this->load->model('user/user');
            $users_select = array();

            if($empty)
                $users_select = array('' => $this->language->get('text_none_user'));

            $users = $this->model_user_user->getUsers();
            $users = $this->aasort($users, 'username');
 
            foreach ($users as $key => $user) {
                $users_select[$user['user_id']] = $user['username'];
            }
            return $users_select;
        }

        public function getStoresSelect($empty = true)
        {
            $this->load->model('setting/store');
            $stores_select = array();

            if($empty)
                $stores_select = array('' => $this->language->get('text_none_store'));

            $stores_select[0] = $this->config->get('config_name');

            $stores_temp = $this->model_setting_store->getStores();

            foreach ($stores_temp as $key => $store) {
                 $stores_select[$store['store_id']] = $store['name'];
            }

            return $stores_select;
        }

        public function getStockStatusesSelect($empty = true)
        {
            $this->load->model('localisation/stock_status');
            $stock_statuses_select = array();

            if($empty)
                $stock_statuses_select = array('' => $this->language->get('text_none'));

            $stock_statuses = $this->model_localisation_stock_status->getStockStatuses();

            foreach ($stock_statuses as $key => $stock_status) {
                $stock_statuses_select[$stock_status['stock_status_id']] = $stock_status['name'];
            }

            return $stock_statuses_select;
        }

        public function getGroupAttributesSelect($empty = true)
        {
            $this->load->model('catalog/attribute_group');

            $attribute_group_select = array();

            if($empty)
                $attribute_group_select = array('' => $this->language->get('text_none_attribute_group'));

            $attribute_groups = $this->model_catalog_attribute_group->getAttributeGroups();
            $attribute_groups = $this->aasort($attribute_groups, 'name');

            foreach ($attribute_groups as $key => $atgr) {
                $attribute_group_select[$atgr['attribute_group_id']] = $atgr['name'];
            }

            return $attribute_group_select;
        }

        public function getAttributesSelect($empty = true)
        {
            $this->load->model('catalog/attribute');

            $attribute_select = array();

            if($empty)
                $attribute_select = array('' => $this->language->get('text_none_attribute'));

            $attributes = $this->model_catalog_attribute->getAttributes();
            $attributes = $this->aasort($attributes, 'name');

            foreach ($attributes as $key => $at) {
                $attribute_select[$at['attribute_id']] = $at['attribute_group'].' > '.$at['name'];
            }

            return $attribute_select;
        }

        public function getOptionsSelect($empty = true, $filters = array())
        {
            $this->load->model('catalog/option');

            $options_select = array();

            if($empty)
                $options_select = array('' => $this->language->get('text_none_option'));

            $options = $this->model_catalog_option->getOptions();
            
            if(!empty($filters))
            {
                foreach ($options as $key => $opt) {
                    foreach ($filters as $key_fil => $array_values) {
                        if(!empty($opt[$key_fil]) && !in_array($opt[$key_fil], $array_values))
                            unset($options[$key]);
                    }
                }
            }

            $options = $this->aasort($options, 'name');

            foreach ($options as $key => $atgr) {
                $options_select[$atgr['option_id']] = $atgr['name'];
            }

            return $options_select;
        }

        public function getOptionValuesSelect($empty = true, $option_id = '')
        {
            $this->load->model('catalog/option');

            $options_select = array();

            if($empty)
                $options_select = array('' => $this->language->get('text_none_option_value'));

            $option_values = $this->model_catalog_option->getOptionValues($option_id);

            //Get option
            if(!empty($option_values))
            {
               $option = $this->model_catalog_option->getOption($option_id);

               foreach ($option_values as $key => $optval) {
                   $option_values[$key]['name'] = $option['name'].' > '.$optval['name'];
               }
            }

            $option_values = $this->aasort($option_values, 'name');

            foreach ($option_values as $key => $atgr) {
                $options_select[$atgr['option_value_id']] = $atgr['name'];
            }

            return $options_select;
        }

        public function getGroupFiltersSelect($empty = true)
        {
            $this->load->model('catalog/filter');

            $filter_groups_select = array();

            if($empty)
                $filter_groups_select = array('' => $this->language->get('text_none_filter_group'));

            $filter_groups = $this->model_catalog_filter->getFilterGroups();
            $filter_groups = $this->aasort($filter_groups, 'name');

            foreach ($filter_groups as $key => $figr) {
                $filter_groups_select[$figr['filter_group_id']] = $figr['name'];
            }

            return $filter_groups_select;
        }

        public function getFiltersSelect($empty = true)
        {
            $this->load->model('catalog/filter');

            $filters_select = array();

            if($empty)
                $filters_select = array('' => $this->language->get('text_none_filter'));

            $filters = $this->model_catalog_filter->getFilters(true);

            $filters = $this->aasort($filters, 'name');

            foreach ($filters as $key => $filter) {
                $filters_select[$filter['filter_id']] = $filter['group'].' > '.$filter['name'];
            }

            return $filters_select;
        }

        public function getDownloadsSelect($empty = true)
        {
            $this->load->model('catalog/download');

            $downloads_select = array();

            if($empty)
                $downloads_select = array('' => $this->language->get('text_none_download'));

            $downloads = $this->model_catalog_download->getDownloads(true);

            $downloads = $this->aasort($downloads, 'name');

            foreach ($downloads as $key => $download) {
                $downloads_select[$download['download_id']] = $download['name'];
            }

            return $downloads_select;
        }

        public function getCountriesSelect($empty = true)
        {
            $this->load->model('localisation/country');

            $countries_select = array();

            if($empty)
                $countries_select = array('' => $this->language->get('text_none_country'));

            $countries = $this->model_localisation_country->getCountries();
            $countries = $this->aasort($countries, 'name');

            foreach ($countries as $key => $atgr) {
                $countries_select[$atgr['country_id']] = $atgr['name'];
            }

            return $countries_select;
        }

        public function getCustomerGroups()
        {
            if(version_compare(VERSION, '2.0.3.1', '<='))
            {
                $model_path = 'sale/customer_group';
                $model_loaded = 'model_sale_customer_group';
            }else
            {
                $model_path = 'customer/customer_group';
                $model_loaded = 'model_customer_customer_group';
            }

            $this->load->model($model_path);
            $customer_groups = $this->{$model_loaded}->getCustomerGroups();

            return $customer_groups;
        }

        public function unsetArrayByValue($temp, $index, $to_delete, $unset = true)
        {
            foreach ($to_delete as $key => $val_to_delete) {
                foreach ($temp as $key2 => &$element) {                    
                    if (is_array($element) && count($element) == count($element, COUNT_RECURSIVE) || !empty($element['type']))
                    {
                        if(!empty($element[$index]) && $element[$index] == $val_to_delete)
                        {
                            if($unset)
                                unset($temp[$key2]);
                            else
                                $temp[$key2] = '';
                        }
                    }
                    else if(is_array($element))
                    {
                        foreach ($element as $key3 => &$sub_el) {
                            if(!empty($sub_el[$index]) && $sub_el[$index] == $val_to_delete)
                            {
                                if($unset)
                                    unset($temp[$key2][$key3]);
                                else
                                    $temp[$key2][$key3] = '';

                                $all_empties = true;

                                foreach ($temp[$key2] as $val) {
                                    if(!empty($val))
                                        $all_empties = false;
                                }

                                if($all_empties)
                                {
                                    if($unset)
                                        unset($temp[$key2]);
                                    else
                                        $temp[$key2] = '';

                                    break;
                                }
                            }
                        }
                    }
                }
            }

            return $temp;
        }

        public function formatName($name)
        {
            $unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
            return strtr( $name, $unwanted_array );
        }

        public function formatLanguages($languages)
        {
            $final_languages = array();

            foreach ($languages as $key => $lang) {
                $final_languages[$lang['language_id']] = $lang;
            }

            return $final_languages;
        }

        public function get_languages_select_format() {
            $languages_select = array();
            foreach ($this->langs as $key => $lang) {
                $languages_select[$lang['language_id']] = $lang['name'].' ('.$lang['code'].')';
            }
            return $languages_select;
        }

        public function get_currencies_select_format() {
            $this->load->model('localisation/currency');
            $currencies = $this->model_localisation_currency->getCurrencies();

            $currencies_select = array();
            foreach ($currencies as $key => $cu) {
                $currencies_select[$key] = $cu['title'].' ('.$cu['code'].')';
            }

            return $currencies_select;
        }

        public function get_stores_select_format() {
            return $this->getStoresSelect(false);
        }

        public function get_customer_group_select_format() {
            $customer_groups = $this->getCustomerGroups();
            $customer_groups_formatted = array();
            foreach ($customer_groups as $key => $cgroup) {
                $customer_groups_formatted[$cgroup['customer_group_id']] = $cgroup['name'];
            }
            return $customer_groups_formatted;
        }

        public function get_attributes_select_format() {
            $attributes_to_select = array('' => '');
            $this->load->model('catalog/attribute');
            $attributes = $this->model_catalog_attribute->getAttributes();

            if(!empty($attributes))
            {
                foreach ($attributes as $key => $attr) {
                    $attributes_to_select[$attr['attribute_id']] = $attr['attribute_group'].' > '.$attr['name'];
                }
            }
            return $attributes_to_select;
        }

        public function get_filters_select_format() {
            $filters_to_select = array('' => '');
            if(version_compare(VERSION, '1.5.4.1', '>'))
            {
                $this->load->model('catalog/filter');
                $filters = $this->model_catalog_filter->getFilters(true);
                if(!empty($filters))
                {
                    foreach ($filters as $key => $filt) {
                        $filters_to_select[$filt['filter_group_id']] = $filt['group'];
                    }
                }
            }
            return $filters_to_select;
        }

        public function get_options_select_format() {
            $options_to_select = array('' => '');
            $this->load->model('catalog/option');
            $options = $this->model_catalog_option->getOptions();
            if(!empty($options))
            {
                foreach ($options as $key => $opt) {
                    $options_to_select[$opt['option_id']] = $opt['name'];
                }
            }
            return $options_to_select;
        }

        public function aasort ($array, $key) {
            $sorter=array();
            $ret=array();
            reset($array);
            foreach ($array as $ii => $va) {
                $sorter[$ii]=$va[$key];
            }
            asort($sorter);
            foreach ($sorter as $ii => $va) {
                $ret[$ii]=$array[$ii];
            }
            return $ret;
        }
    //END Anothers functions

    //Devman Extensions - info@devmanextensions.com - 2017-10-07 09:53:22 - Functions related with get form and values
         public function ajax_get_form($license_id = '', $return_only_form = false)
        {
            if($this->request->server['REQUEST_METHOD'] == 'GET' && empty($license_id)) return true;
            $force_license = !empty($license_id);
            $license_id = !empty($this->request->post['license_id']) ? $this->request->post['license_id'] : $license_id;
            $data = array(
                'license_id' => $license_id,
                'domain' => HTTP_CATALOG,
                'form' => json_encode($this->form_array),
                'form_basic_datas' => json_encode($this->form_basic_datas),
            );

            $result = $this->curl_call($data, $this->api_url.'opencart/ajax_get_form');

            //Devman Extensions - info@devmanextensions.com - 2017-08-30 19:09:16 - If isset form save it in session
                $copy_result = $result;
                $copy_result = json_decode($result, true);

                if($return_only_form && !empty($copy_result['error'])) {
                    $this->session->data['error'] = $copy_result['message'];
                    return '';
                }

                if(is_array($copy_result) && array_key_exists('form', $copy_result) && !empty($copy_result['form']))
                {
                    //Devman Extensions - info@devmanextensions.com - 2017-08-30 20:00:27 - Save license in database
                        $exist_license = $this->db->query("SELECT * FROM `" . $this->db_prefix . "setting` WHERE ".$this->setting_group_code." = '" . $this->db->escape($this->extension_group_config) . "' AND `key` = '" . $this->db->escape($this->extension_group_config.'_license_id') . "' AND store_id = '" . (int)$this->config->get('store_id') . "'");

                        if($exist_license->num_rows == 0)
                            $this->db->query("INSERT INTO `" . $this->db_prefix . "setting` SET `value` = '" . $this->db->escape($license_id) . "', serialized = '0', ".$this->setting_group_code." = '" . $this->db->escape($this->extension_group_config) . "', `key` = '" . $this->db->escape($this->extension_group_config.'_license_id') . "', store_id = '" . (int)$this->config->get('store_id') . "'");
                        else
                            $this->db->query("UPDATE `" . $this->db_prefix . "setting` SET `value` = '" . $this->db->escape($license_id) . "', serialized = '0'  WHERE ".$this->setting_group_code." = '" . $this->db->escape($this->extension_group_config) . "' AND `key` = '" . $this->db->escape($this->extension_group_config.'_license_id') . "' AND store_id = '" . (int)$this->config->get('store_id') . "'");
                    //END

                    //Devman Extensions - info@devmanextensions.com - 2017-08-30 20:23:41 - Check license expired
                        if(array_key_exists('expired', $copy_result) && !empty($copy_result))
                            $this->session->data['error_expired'] = $copy_result['message'];
                    //END

                    if(array_key_exists('new_version', $copy_result) && !empty($copy_result))
                            $this->session->data['new_version'] = $copy_result['message_new_version'];

                    $result = array('error' => false);
                    if($force_license) {
                        if(!$return_only_form)
                            return true;
                        else {
                            return $copy_result['form'];
                        }
                    }
                    else
                    {
                        echo json_encode($result); die;
                    }
                }
            //END

            //from API are in json_encode
            if($force_license)
                return true;
            else
                echo $result; die;
        }
        public function _get_form_values($form_array)
        {
            $is_multistore_master = array_key_exists('multi_store', $form_array) && !empty($form_array['multi_store']);

            foreach ($form_array['tabs'] as $key_tab => $tab) {
                $tab_has_fields = array_key_exists('fields', $tab) && !empty($tab['fields']);
                $is_multistore = array_key_exists('no_multistore', $tab) && $tab['no_multistore'] ? false : $is_multistore_master;
                if($tab_has_fields)
                {
                    foreach ($tab['fields'] as $key_field => $field) {
                        $field_name = array_key_exists('name', $field) ? $field['name'] : '';

                        $is_field_with_value = !empty($field_name);

                        if($is_field_with_value && $field['type'] == 'products_autocomplete')
                        {
                            if($is_multistore)
                            {
                                $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = array();
                                foreach ($this->stores as $store_key => $store) {
                                    $temp_name = $field_name.'_'.$store['store_id'];
                                    $products = $this->_config_get($temp_name);
                                    $final_products = !empty($products) ? $this->_format_products($products) : array();
                                    $form_array['tabs'][$key_tab]['fields'][$key_field]['value'][$store['store_id']] = $final_products;
                                }
                            }
                            else
                            {
                                $products = $this->_config_get($field_name);
                                $final_products = !empty($products) ? $this->_format_products($products) : array();
                                $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = $final_products;
                            }
                        }
                        elseif($field['type'] == 'table_inputs')
                        {
                            $config_name = $field['name'];

                            //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:23:33 - Search image fields inside table inputs
                                $names_input_image = array();
                                foreach ($form_array['tabs'][$key_tab]['fields'] as $key_field_table => $fi) {
                                    if(array_key_exists('type', $fi) && $fi['type'] == 'image')
                                        $names_input_image[] = $config_name.'_'.$fi['name'];
                                }
                            //END

                            if($is_multistore)
                            {
                                $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = array();



                                foreach ($this->stores as $store_key => $store) {
                                    $temp_name = $field_name.'_'.$store['store_id'];
                                    $table_configuration = $this->_config_get($temp_name);

                                    $table_configuration = !empty($table_configuration) && !is_array($table_configuration) ? unserialize(base64_decode($table_configuration)) : $table_configuration;
                                    if(!empty($table_configuration))
                                    {
                                        foreach ($table_configuration as $key => $configurations) {
                                            foreach ($configurations as $config_name => $products) {
                                                if (strpos($config_name, 'products') !== false && !empty($products))
                                                {
                                                    $final_products = $this->_format_products($products);
                                                    $table_configuration[$key][$config_name] = $final_products;
                                                }
                                            }
                                        }
                                    }

                                    //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:25:12 - If table input has come image field, generate thumbs
                                        if(!empty($names_input_image) && !empty($table_configuration))
                                        {
                                            foreach ($table_configuration as $key_row => $row_inputs) {
                                                foreach ($row_inputs as $input_name => $value) {
                                                    if(in_array($input_name, $names_input_image))
                                                    {
                                                        $thumb = !empty($value) ? $this->model_tool_image->resize($value, 100, 100) : $this->no_image_thumb;
                                                        $table_configuration[$key_row][$input_name] = array(
                                                            'value' => $value,
                                                            'thumb' => $thumb
                                                        );
                                                    }
                                                }
                                            }
                                        }
                                    //END
                                    $form_array['tabs'][$key_tab]['fields'][$key_field]['value'][$store['store_id']] = $table_configuration;
                                }
                            }
                            else
                            {
                                $table_configuration = $this->_config_get($field_name);

                                $table_configuration = !empty($table_configuration) && !is_array($table_configuration) ? unserialize(base64_decode($table_configuration)) : $table_configuration;
                                if(!empty($table_configuration))
                                {
                                    foreach ($table_configuration as $key => $configurations) {
                                        foreach ($configurations as $config_name => $products) {
                                            if (strpos($config_name, 'products') !== false && !empty($products))
                                            {
                                                $final_products = $this->_format_products($products);
                                                $table_configuration[$key][$config_name] = $final_products;
                                            }
                                        }
                                    }
                                }

                                //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:25:12 - If table input has come image field, generate thumbs
                                        if(!empty($names_input_image) && !empty($table_configuration))
                                        {
                                            foreach ($table_configuration as $key_row => $row_inputs) {
                                                foreach ($row_inputs as $input_name => $value) {
                                                    if(in_array($input_name, $names_input_image))
                                                    {
                                                        $thumb = !empty($value) ? $this->model_tool_image->resize($value, 100, 100) : $this->no_image_thumb;
                                                        $table_configuration[$key_row][$input_name] = array(
                                                            'value' => $value,
                                                            'thumb' => $thumb
                                                        );
                                                    }
                                                }
                                            }
                                        }
                                    //END

                                $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = $table_configuration;
                            }
                        }
                        elseif($field['type'] == 'table' && array_key_exists('data', $field))
                        {
                            $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = array();
                            $config_data = $this->config->get($this->extension_group_config.(!empty($field['preffix_config']) ? '_'.$field['preffix_config']: ''));
                            $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = $config_data;
                        }
                        else
                        {
                            if($is_field_with_value)
                            {
                                $is_multilanguage = array_key_exists('multilanguage', $field) && !empty($field['multilanguage']);

                                if($is_multilanguage)
                                {
                                    if($is_multistore)
                                    {
                                        $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = array();

                                        foreach ($this->stores as $store_key => $store) {
                                            $form_array['tabs'][$key_tab]['fields'][$key_field]['value'][$store['store_id']] = array();

                                            foreach ($this->langs as $key => $lang) {
                                                $language_id = $lang['language_id'];
                                                $temp_name = $field_name.'_'.$store['store_id'].'_'.$language_id;

                                                $value = $this->_config_get($temp_name);

                                                if(empty($value))
                                                    $value = $this->_get_config_value_from_array_or_module($temp_name);

                                                $form_array['tabs'][$key_tab]['fields'][$key_field]['value'][$store['store_id']][$language_id] = $value;

                                                //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:00:08 - Add thumb if is a image field
                                                if($field['type'] == 'image')
                                                {
                                                    $thumb = !empty($value) ? $this->model_tool_image->resize($value, 100, 100) : $this->no_image_thumb;
                                                    $form_array['tabs'][$key_tab]['fields'][$key_field]['thumb'][$store['store_id']][$language_id] = $thumb;
                                                }
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = array();

                                        foreach ($this->langs as $key => $lang) {
                                            $language_id = $lang['language_id'];
                                            $temp_name = $field_name.'_'.$language_id;
                                            $value = $this->_config_get($field_name.'_'.$language_id);

                                            if(empty($value))
                                            {
                                                $value = $this->_get_config_value_from_array_or_module($field_name);

                                                if(!empty($value) && array_key_exists($language_id, $value))
                                                    $value = $value[$language_id];
                                                else
                                                    $value = '';
                                            }

                                            $form_array['tabs'][$key_tab]['fields'][$key_field]['value'][$language_id] = $value;

                                            //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:00:08 - Add thumb if is a image field
                                            if($field['type'] == 'image')
                                            {
                                                $thumb = !empty($value) ? $this->model_tool_image->resize($value, 100, 100) : $this->no_image_thumb;
                                                $form_array['tabs'][$key_tab]['fields'][$key_field]['thumb'][$language_id] = $thumb;
                                            }

                                        }
                                    }
                                }
                                else
                                {
                                    if($is_multistore)
                                    {
                                        $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = array();
                                        foreach ($this->stores as $store_key => $store) {
                                            $temp_name = $field_name.'_'.$store['store_id'];
                                            $value = $this->_config_get($temp_name);

                                            if(empty($value))
                                                $value = $this->_get_config_value_from_array_or_module($temp_name);

                                            $form_array['tabs'][$key_tab]['fields'][$key_field]['value'][$store['store_id']] = $value;

                                            //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:00:08 - Add thumb if is a image field
                                            if($field['type'] == 'image')
                                            {
                                                $thumb = !empty($value) ? $this->model_tool_image->resize($value, 100, 100) : $this->no_image_thumb;
                                                $form_array['tabs'][$key_tab]['fields'][$key_field]['thumb'][$store['store_id']] = $thumb;
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $value = !array_key_exists('force_value', $field) ? $this->_config_get($field_name) : $field['force_value'];

                                        if(empty($value) && !array_key_exists('force_value', $field))
                                            $value = $this->_get_config_value_from_array_or_module($field_name);

                                        $form_array['tabs'][$key_tab]['fields'][$key_field]['value'] = $value;

                                        //Devman Extensions - info@devmanextensions.com - 2017-09-04 20:00:08 - Add thumb if is a image field
                                        if($field['type'] == 'image')
                                        {
                                            $thumb = !empty($value) ? $this->model_tool_image->resize($value, 100, 100) : $this->no_image_thumb;
                                            $form_array['tabs'][$key_tab]['fields'][$key_field]['thumb'] = $thumb;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return $form_array;
        }

        public function _get_config_value_from_array_or_module($field_name = '')
        {
            $value = '';
            if (strpos($field_name, '[') !== false) {

                $field_explode = explode('[', $field_name);
                $value_temp = $this->_config_get($field_explode[0]);

                if(!empty($value_temp) && array_key_exists($field_explode[0], $value_temp) && !empty($value_temp[$field_explode[0]]) && count($value_temp) == 1)
                    $value_temp = $value_temp[$field_explode[0]];

                if(!empty($value_temp))
                {
                    $count = count($field_explode);

                    $final_value = $value_temp;

                    for ($i=1; $i < $count ; $i++) {
                        $clean_name = str_replace(']', '', $field_explode[$i]);

                        if(isset($final_value[$clean_name]))
                            $final_value = $final_value[$clean_name];
                    }

                    if(!empty($final_value))
                        $value = $final_value;
                }
            }

            if(empty($value))
            {
                if(empty($field['from_module']))
                    $value = $this->_config_get($field_name);
                else
                    $value = !empty($field['from_module'][$field_name]) ? $field['from_module'][$field_name] : '';
            }

            return $value;
        }

        public function _format_products($products)
        {
            $this->load->model('catalog/product');
            $final_products = array();

            if(!empty($products) && is_array($products))
            {
                foreach ($products as $product_id) {
                    $product_info = $this->model_catalog_product->getProduct($product_id);
                    if(!empty($product_info))
                        $final_products[$product_id] = $product_info['name'];
                }
            }

            return $final_products;
        }

        public function _config_get($key)
        {
            $final_key = $key;

            if (strpos($final_key, $this->extension_group_config) === false)
                $final_key = $this->extension_group_config.'_'.$key;

            return $this->config->get($final_key);
        }

        public function _get_form_in_settings()
        {
            $form_html = '';

            if($this->license_id != '') {
                $form_html = $this->ajax_get_form($this->license_id, true);
            }

            return $form_html;
        }

        public function curl_call($data, $url)
        {
            if (!function_exists('curl_init')){
                $result = json_encode(array(
                    'error' => true,
                    'message' => '<b>cURL PHP library</b> is not installed in your server!'
                ));
            }
            else
            {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_TIMEOUT, 300);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

                $result = curl_exec($ch);
                if (curl_errno($ch)) {
                   $result = json_encode(array(
                        'error' => true,
                        'message' => sprintf($this->language->get('curl_error'), curl_errno($ch))
                    ));
                }
                curl_close($ch);
            }
            return $result;
        }
    //END

    public function get_remodal($modal_id, $title, $description, $options = array()) {
        $open_on_ready = array_key_exists('open_on_ready', $options) && $options['open_on_ready'];
        $button_close = !array_key_exists('button_close', $options) || (array_key_exists('button_close', $options) && $options['button_close']);
        $button_confirm_text = array_key_exists('button_confirm_text', $options) && !empty($options['button_confirm_text']) ? $options['button_confirm_text'] : $this->language->get('remodal_button_confirm_text');
        $button_cancel_text = array_key_exists('button_cancel_text', $options) && !empty($options['button_cancel_text']) ? $options['button_cancel_text'] : $this->language->get('remodal_button_cancel_text');
        $open_on_ready = array_key_exists('open_on_ready', $options) && $options['open_on_ready'];
        $button_confirm = !array_key_exists('button_confirm', $options) || (array_key_exists('button_confirm', $options) && $options['button_confirm']);
        $button_cancel = !array_key_exists('button_cancel', $options) || (array_key_exists('button_cancel', $options) && $options['button_cancel']);
        $remodal_options = array_key_exists('remodal_options', $options) && !empty($options['remodal_options']) ? $options['remodal_options'] : '';
        $subtitle = array_key_exists('subtitle', $options) && !empty($options['subtitle']) ? $options['subtitle'] : '';
        $link = array_key_exists('link', $options) && !empty($options['link']) ? $this->language->get($options['link']) : '';

        $remodal_html = '';
        if($link) {
            $remodal_html .= '<a href="javascript:{}" data-remodal-target="'.$modal_id.'">'.$link.'</a>';
        }
        $remodal_html .= '
            <div class="remodal '.$modal_id.'" data-remodal-id="'.$modal_id.'"'.($remodal_options ? ' data-remodal-options="'.$remodal_options.'"' : '').'>
                '.($button_close ? '<button data-remodal-action="close" class="remodal-close"></button>' : '').'
                <h1>'.$title.'</h1>
                '.(!empty($subtitle) ? '<h2>'.$subtitle.'</h2>' : '').'
                <div class="remodal_content">'.$description.'</div>
                <br>
                '.($button_cancel ? '<button data-remodal-action="cancel" class="remodal-cancel">'.$button_cancel_text.'</button>' : '').'
                '.($button_confirm ? '<button data-remodal-action="confirm" class="remodal-confirm">'.$button_confirm_text.'</button>' : '').'
            </div>
        ';

        if($open_on_ready) {
            $remodal_options = !empty($remodal_options) ? '{'.$remodal_options.'}' : '';
            $remodal_html .= '<script type="text/javascript">var inst = $(\'[data-remodal-id='.$modal_id.']\').remodal('.$remodal_options.');inst.open();</script>';
        }

        return $remodal_html;
    }

	public function getPaymentMethods()
    {
        $codes = array();
        $names = array();

        $this->load->model('setting/extension');
        $extensions = $this->model_setting_extension->getInstalled('payment');
        foreach ($extensions as $ext) {
            array_push($codes,$ext);
        }
        $files = glob(DIR_APPLICATION . 'controller/extension/payment/*.php');
        if ($files) {
            foreach ($files as $file) {
                $extension = basename($file, '.php');
                if (in_array($extension, $extensions)) {
                    $this->load->language('extension/payment/' . $extension, 'extension');
                    array_push($names,  $this->language->get('extension')->get('heading_title'));
                }
            }
        }
        for($i=0;$i<count($codes);$i++) {
            $data[$codes[$i]] = $names[$i];
        }
        return !empty($extensions) ? $data : array();

    }
}
?>