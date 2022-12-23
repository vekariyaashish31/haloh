<?php
class ControllerExtensionModuleOptionsCombinations extends Controller
{
    private $error = array();

    private $data_to_view = array();

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->_get_module_data();
        $this->_get_form_basic_data();

        if ($this->request->get['route'] == $this->real_extension_type.'/'.$this->extension_name)
            $this->form_array = $this->_construct_view_form();

        $this->load->model('setting/setting');
        $this->load->model('catalog/option');
    }

    public function index(){

        $this->apply_migrations();

        $this->_check_ajax_function();
        $this->document->setTitle($this->language->get('heading_title_2'));
        $this->_get_breadcrumbs();
        $this->_check_post_data();

        //Fix bullets multiple
        $bullets_settings = $this->config->get('config_opt_comb_bullet_option');
        if(!empty($bullets_settings) && is_numeric($bullets_settings)) {
            $this->load->model('setting/setting');
            $this->model_setting_setting->editSettingValue($this->extension_group_config, 'config_opt_comb_bullet_option', json_encode(array($bullets_settings)));
        }

        //Send token to view
        $this->data_to_view['token'] = $this->session->data[$this->token_name];
        $this->data_to_view['action'] = $this->url->link($this->real_extension_type.'/'.$this->extension_name, $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL');
        $this->data_to_view['cancel'] = $this->url->link(version_compare(VERSION, '2.0.0.0', '>=') ? $this->extension_url_cancel_oc_2x : $this->extension_url_cancel_oc_15x, $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL');

        $this->_load_basic_languages();
        $form = $this->model_extension_devmanextensions_tools->_get_form_in_settings();

        if($this->profiles_select && count($this->profiles_select) == 1 && !empty($form))
            $this->session->data['info'] = sprintf($this->language->get('profile_start_to_work'), '<a href="javascript:{}" onclick="$(\'a.tab_profiles\').click()">' , '</a>');

        $this->_check_errors_to_send();
        $this->data_to_view['form'] =  !empty($form) ? $form : '';

        if(empty($this->data_to_view['form'])) {
            $this->data_to_view['button_apply_allowed'] = false;
            $this->data_to_view['button_save_allowed'] = false;
            $this->data_to_view['text_license_info'] = $this->language->get('text_license_info');
        }

        $this->_send_custom_variables_to_view();

        if(version_compare(VERSION, '2.0.0.0', '>='))
        {
            $data = $this->data_to_view;
            $data['header'] = $this->load->controller('common/header');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['footer'] = $this->load->controller('common/footer');

            $this->response->setOutput($this->load->view($this->real_extension_type.'/'.$this->extension_view, $data));
        }
        else
        {
            $document_scripts = $this->document->getScripts();
            $scripts = array();
            foreach ($document_scripts as $key => $script)
                $scripts[] = $script;
            $this->data_to_view['scripts'] = $scripts;

            $document_styles = $this->document->getStyles();
            $styles = array();
            foreach ($document_styles as $key => $style)
                $styles[] = $style;
            $this->data_to_view['styles'] = $styles;

            $this->data = $this->data_to_view;
            $this->template = $this->real_extension_type.'/'.$this->extension_view;

            $this->response->setOutput($this->render());
        }
    }

    public function option_script(){
        $this->load->language('product/product');
        $this->load->language('extension/module/options_combinations');

        $data = [];

        if (version_compare(VERSION, '3', '<')) {
            $data['text_points'] = $this->language->get('text_points');
            $data['text_reward'] = $this->language->get('text_reward');
            $data['text_reward_points'] = $this->language->get('text_reward_points');
            $data['text_discount'] = $this->language->get('text_discount');
        }

        $view = 'extension/module/options_combinations/options_combinations_script';
        $extension = version_compare(VERSION, '3', '>=') ? 'twig' : 'tpl';

        $this->response->addHeader('Content-Type: text/javascript');

        // avoid cache
        $this->response->addHeader('Cache-Control: no-cache, no-store, must-revalidate');
        $this->response->addHeader('Pragma: no-cache');
        $this->response->addHeader('Expires: 0');

        if (version_compare(VERSION, '2.3', '<')) {
            $view = 'default/template/' . $view . '.tpl';
        }

        $this->response->setOutput( $this->load->view( $view, $data));
    }

    function _get_module_data() {
        $this->is_mijoshop = class_exists('MijoShop');

        if($this->is_mijoshop) {
            $app = JFactory::getApplication();
            $prefix = $app->get('dbprefix');
            $this->db_prefix = $prefix . 'mijoshop_';
        }
        else
            $this->db_prefix = DB_PREFIX;

        $this->extension_type = 'module';
        $this->real_extension_type = (version_compare(VERSION, '2.3', '>=') ? 'extension/':'').$this->extension_type;

        $this->extension_url_cancel_oc_15x = 'common/home';
        $this->extension_url_cancel_oc_2x = 'common/dashboard';

        $this->extension_name = 'options_combinations';
        $this->extension_group_config = 'config_opt_comb';
        $this->extension_id = '5b0e85b6-c9b0-4f0c-a0ce-0905d93d802a';

        $this->oc_version = version_compare(VERSION, '3.0.0.0', '>=') ? 3 : (version_compare(VERSION, '2.0.0.0', '>=') ? 2 : 1);
        $this->is_oc_3x = $this->oc_version >= 3;
        $this->is_ocstore = is_dir(DIR_APPLICATION . 'controller/octeam_tools');

        $this->data_to_view = array(
            'button_apply_allowed' => true,
            'button_save_allowed' => false,
            'extension_name' => $this->extension_name,
            'license_id' => $this->config->get($this->extension_group_config.'_license_id') ? $this->config->get($this->extension_group_config.'_license_id') : '',
            'oc_version' => $this->oc_version
        );

        $this->license_id = $this->config->get($this->extension_group_config.'_license_id') ? $this->config->get($this->extension_group_config.'_license_id') : '';
        $this->form_file_path = str_replace('system/', '', DIR_SYSTEM).$this->extension_name.'_form.txt';
        $this->form_file_url = HTTP_CATALOG.$this->extension_name.'_form.txt';

        $this->token_name = version_compare(VERSION, '3.0.0.0', '<') ? 'token' : 'user_token';

        $this->token = $this->session->data[$this->token_name];
        $this->extension_view = version_compare(VERSION, '3.0.0.0', '<') ? $this->extension_name.'.tpl' : $this->extension_name;

        $this->load->language($this->real_extension_type.'/'.$this->extension_name);
        $this->load->language($this->real_extension_type.'/'.$this->extension_name.'_general_texts');

        $this->load->model('extension/devmanextensions/tools');
        $this->load->model('extension/module/'.$this->extension_name);
        $this->load->model('extension/module/'.$this->extension_name.'_tab_general');
        $this->main_model = 'model_extension_module_'.$this->extension_name;
        $this->load->language($this->real_extension_type.'/'.$this->extension_name.'_tab_general');

        $this->api_url = defined('DEVMAN_SERVER_TEST') ? DEVMAN_SERVER_TEST : 'https://devmanextensions.com/';
        $this->isdemo =  strpos($_SERVER['HTTP_HOST'], 'devmanextensions.com') !== false;
        $this->hasFilters = version_compare(VERSION, '1.5.4', '>');
        $this->hasCustomerDescriptions = version_compare(VERSION, '1.5.2.1', '>');
        $this->table_seo = $this->is_oc_3x ? 'seo_url' : 'url_alias';
        $this->image_path = version_compare(VERSION, '2', '<') ? 'data/' : 'catalog/';
    }

    function _get_form_basic_data() {
        $this->use_session_form = !$this->is_oc_3x;
        $this->form_token_name = 'devmanextensions_form_token_'.$this->extension_group_config;
        $this->form_session_name = 'devmanextensions_form_'.$this->extension_group_config;

        //Is the first time that configure extension?
        $this->setting_group_code = version_compare(VERSION, '2.0.1.0', '>=') ? 'code' : '`group`';
        $results = $this->db->query('SELECT setting_id FROM `'. $this->db_prefix . 'setting` WHERE '.$this->setting_group_code.' = "'.$this->db->escape($this->extension_group_config).'" AND `key` NOT LIKE "%license_id%" LIMIT 1');
        $this->first_configuration = empty($results->row['setting_id']);
        //END

        $this->load->model('extension/devmanextensions/tools');

        //Devman Extensons - info@devmanextensions.com - 2016-10-09 19:39:52 - Load languages
        $this->load->model('localisation/language');
        $languages = $this->model_localisation_language->getLanguages();
        $this->langs = $this->model_extension_devmanextensions_tools->formatLanguages($languages);
        //END

        //Devman Extensions - info@devmanextensions.com - 2017-08-29 19:25:03 - Get customer groups
        $customer_groups = $this->model_extension_devmanextensions_tools->getCustomerGroups();
        $this->cg = $customer_groups;
        //END

        $this->oc_2 = version_compare(VERSION, '2.0.0.0', '>=');
        $this->oc_3 = version_compare(VERSION, '3.0.0.0', '>=');

        $form_basic_datas = array(
            'is_ocstore' => $this->is_ocstore,
            'tab_changelog' => true,
            'tab_help' => true,
            'tab_faq' => true,
            'extension_id' => $this->extension_id,
            'first_configuration' => $this->first_configuration,
            'positions' => $this->positions,
            'statuses' => $this->statuses,
            'stores' => $this->stores,
            'layouts' => $this->layouts,
            'languages' => $this->langs,
            'oc_version' => $this->oc_version,
            'oc_2' => $this->oc_2,
            'oc_3' => $this->oc_3,
            'customer_groups' => $this->cg,
            'version' => VERSION,
            'extension_version' => $this->language->get('extension_version'),
            'token' => $this->token,
            'extension_group_config' => $this->extension_group_config,
            'no_image_thumb' => $this->no_image_thumb,
            'lang' => array(
                'choose_store' => $this->language->get('choose_store'),
                'text_browse' => $this->language->get('text_browse'),
                'text_clear' => $this->language->get('text_clear'),
                'text_sort_order' => $this->language->get('text_sort_order'),
                'text_clone_row' => $this->language->get('text_clone_row'),
                'text_remove' => $this->language->get('text_remove'),
                'text_add_module' => $this->language->get('text_add_module'),
                'tab_help' => $this->language->get('tab_help'),
                'tab_changelog' => $this->language->get('tab_changelog'),
                'tab_faq' => $this->language->get('tab_faq'),
            ),
        );

        $this->form_basic_datas = $form_basic_datas;
    }

    public function _check_post_data() {
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->{$this->main_model}->validate_permiss()) {
            $no_exit = !empty($this->request->post['no_exit']) ? 1 : 0;
            $this->session->data['error'] = '';

            //Devman Extensions - info@devmanextensions.com - 2016-10-21 18:57:30 - Custom functions
            if(
                !empty($this->request->post['force_function']) || !empty($this->request->get['force_function'])
                ||
                !empty($this->request->post[$this->extension_group_config.'_force_function']) || !empty($this->request->get[$this->extension_group_config.'force_function'])
            )
            {
                if(!empty($this->request->post['force_function']) || !empty($this->request->get['force_function']))
                    $index = 'force_function';
                else
                    $index = $this->extension_group_config.'_force_function';

                $post_get = !empty($this->request->post[$index]) ? 'post' : 'get';
                $this->{$this->request->{$post_get}[$index]}();
            }
            //END

            unset($this->request->post['no_exit']);

            //Devman Extensions - info@devmanextensions.com - 2017-09-28 09:04:51 - Remove google merchant center fields will be saved into json file
            foreach ($this->request->post as $field_name => $value) {
                if (strpos($field_name, 'google_base_pro_merchantcenter_') !== false || strpos($field_name, 'google_business_base_pro_') !== false || strpos($field_name, 'google_facebook_base_pro') !== false || strpos($field_name, 'google_criteo_base_pro_') !== false || strpos($field_name, 'google_twenga_base_pro_') !== false || strpos($field_name, 'google_reviews_base_pro_') !== false)
                    unset($this->request->post[$field_name]);
            }
            //END

            //Serialize multiples field from table inputs
            foreach ($this->request->post as $input_name => $data_post) {
                if(is_array($data_post) && isset($data_post['replace_by_number']))
                {
                    unset($data_post['replace_by_number']);

                    if(empty($data_post))
                        $this->request->post[$input_name] = '';
                    else
                        $this->request->post[$input_name] = base64_encode(serialize(array_values($data_post)));
                }
            }
            //END Serialize multiples field from table inputs

            $error = $this->_test_before_save();

            if(!$error)
            {
                $this->load->model('setting/setting');
                $this->model_setting_setting->editSetting($this->extension_group_config, $this->request->post);

                // checking if the options to group combinations changed, if they changed then it's necessary to rebuild
                // the combination_as_product_index
                if (
                    isset($this->request->post['config_opt_comb_combinations_as_products']) &&
                    $this->options_to_group_changed()
                ){
                    $options_to_group_combinations_new = [];
                    if (isset($this->request->post['config_opt_comb_options_to_group_combinations']) &&
                        is_array($this->request->post['config_opt_comb_options_to_group_combinations']))
                        $options_to_group_combinations_new = $this->request->post['config_opt_comb_options_to_group_combinations'];

                    $this->config->set('config_opt_comb_options_to_group_combinations', $options_to_group_combinations_new);
                    $this->load->model('extension/module/options_combinations');
                    $this->model_extension_module_options_combinations->rebuild_combination_as_product_index();
                }

                if(!empty($no_exit))
                {
                    $array_return = array(
                        'error' => false,
                        'message' => $this->language->get('text_success')
                    );
                    echo json_encode($array_return); die;
                }
                else
                    $this->session->data['success'] = $this->language->get('text_success');

                $after_save_temp = version_compare(VERSION, '2.0.0.0', '>=') ? $this->extension_url_after_save_oc_20x : $this->extension_url_after_save_oc_15x;
                $after_save_temp = version_compare(VERSION, '2.3.0.0', '>=') ? $this->extension_url_after_save_oc_23x : $after_save_temp;

                if(version_compare(VERSION, '2.0.0.0', '>='))
                    $this->response->redirect($this->url->link($after_save_temp, $this->token_name.'=' . $this->token, 'SSL'));
                else
                    $this->redirect($after_save_temp, $this->token_name.'=' . $this->token, 'SSL');
            }
            else
            {
                if(!empty($no_exit))
                {
                    $array_return = array(
                        'error' => true,
                        'message' => $error
                    );
                    echo json_encode($array_return); die;
                }
                else
                    $this->session->data['error'] = $error;

                if(version_compare(VERSION, '2.0.0.0', '>='))
                    $this->response->redirect($this->url->link($this->extension_url_after_save_error, $this->token_name.'=' . $this->token, 'SSL'));
                else
                    $this->redirect($this->extension_url_after_save_error, $this->token_name.'=' . $this->token, 'SSL');
            }
        }
    }

    private function options_to_group_changed(){
        $options_to_group_combinations_old = [];
        if (is_array($this->config->get('config_opt_comb_options_to_group_combinations')))
            $options_to_group_combinations_old = $this->config->get('config_opt_comb_options_to_group_combinations');

        $options_to_group_combinations_new = [];
        if (isset($this->request->post['config_opt_comb_options_to_group_combinations']) &&
            is_array($this->request->post['config_opt_comb_options_to_group_combinations']))
            $options_to_group_combinations_new = $this->request->post['config_opt_comb_options_to_group_combinations'];

        if (count($options_to_group_combinations_new) == count($options_to_group_combinations_old)){
            $hash_map = [];
            foreach ($options_to_group_combinations_old as $option_id){
                if (!isset($hash_map[$option_id]))
                    $hash_map[$option_id] = 0;
                $hash_map[$option_id]++;
            }
            foreach ($options_to_group_combinations_new as $option_id){
                if (!isset($hash_map[$option_id])){
                    return true;
                }
                elseif ($hash_map[$option_id] == 0){
                    return true;
                }
                else
                    $hash_map[$option_id]--;
            }
        }
        else
            return true;

        return false;
    }

    public function _check_ajax_function() {
        if(
            !empty($this->request->post['ajax_function']) || !empty($this->request->get['ajax_function'])
            ||
            !empty($this->request->post[$this->extension_group_config.'_ajax_function']) || !empty($this->request->get[$this->extension_group_config.'ajax_function'])
        )
        {
            if(!empty($this->request->post['ajax_function']) || !empty($this->request->get['ajax_function']))
                $index = 'ajax_function';
            else
                $index = $this->extension_group_config.'_force_function';

            $post_get = !empty($this->request->post[$index]) ? 'post' : 'get';
            $function_name = $this->request->{$post_get}[$index];

            if($function_name == 'xxxxx') {

            }

            //$this->model_extension_module_ie_pro_tab_profiles->_check_ajax_function($function_name);

            $this->{$function_name}();
        }
    }

    public function _get_breadcrumbs() {
        $this->data_to_view['breadcrumbs'] = array();
        $this->data_to_view['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home', $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL'),
            'separator' => false
        );

        $this->data_to_view['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title_2'),
            'href'      => $this->url->link($this->real_extension_type.'/'.$this->extension_name, $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL'),
            'separator' => ' :: '
        );
    }

    public function _add_css_js_to_document() {
        //Add scripts and css
        if(version_compare(VERSION, '2.0.0.0', '<'))
        {
            $this->document->addScript($this->api_url.'/opencart_admin/common/js/jquery-2.1.1.min.js?'.date('Ymdhis'));
            $this->document->addScript($this->api_url.'/opencart_admin/common/js/bootstrap.min.js?'.date('Ymdhis'));
            $this->document->addStyle($this->api_url.'/opencart_admin/common/css/bootstrap.min.css?'.date('Ymdhis'));

            $this->document->addScript($this->api_url.'/opencart_admin/common/js/datetimepicker/moment.js?'.date('Ymdhis'));
            $this->document->addScript($this->api_url.'/opencart_admin/common/js/datetimepicker/bootstrap-datetimepicker.min.js?'.date('Ymdhis'));
            $this->document->addStyle($this->api_url.'/opencart_admin/common/css/bootstrap-datetimepicker.min.css?'.date('Ymdhis'));
        }

        $this->document->addStyle($this->api_url.'/opencart_admin/common/css/colpick.css?'.date('Ymdhis'));
        $this->document->addStyle($this->api_url.'/opencart_admin/common/css/bootstrap-select.min.css?'.date('Ymdhis'));
        $this->document->addScript($this->api_url.'/opencart_admin/common/js/colpick.js?'.date('Ymdhis'));
        $this->document->addScript($this->api_url.'/opencart_admin/common/js/bootstrap-select.min.js?'.date('Ymdhis'));
        $this->document->addScript($this->api_url.'/opencart_admin/common/js/tools.js?'.date('Ymdhis'));
        $this->document->addStyle($this->api_url.'/opencart_admin/common/css/license_form.css?'.date('Ymdhis'));

        $this->document->addStyle($this->api_url.'/opencart_admin/common/js/remodal/remodal.css?'.date('Ymdhis'));
        $this->document->addStyle($this->api_url.'/opencart_admin/common/js/remodal/remodal-default-theme.css?'.date('Ymdhis'));
        $this->document->addStyle($this->api_url.'/opencart_admin/common/js/remodal/remodal-default-theme-override.css?'.date('Ymdhis'));
        $this->document->addScript($this->api_url.'/opencart_admin/common/js/remodal/remodal.min.js?'.date('Ymdhis'));
        $this->document->addScript($this->api_url.'/opencart_admin/common/js/remodal/remodal-improve.js?'.date('Ymdhis'));

        if(version_compare(VERSION, '2.0.0.0', '>='))
        {
            $this->document->addScript($this->api_url.'/opencart_admin/common/js/oc2x.js?'.date('Ymdhis'));
            $this->document->addStyle($this->api_url.'/opencart_admin/common/css/oc2x.css?'.date('Ymdhis'));
        }
        else
        {
            $this->document->addScript($this->api_url.'/opencart_admin/common/js/oc2x.js?'.date('Ymdhis'));
            $this->document->addStyle($this->api_url.'/opencart_admin/common/css/oc2x.css?'.date('Ymdhis'));
            $this->document->addStyle($this->api_url.'/opencart_admin/common/css/oc15x.css?'.date('Ymdhis'));
            $this->document->addScript('view/javascript/ckeditor/ckeditor.js?'.date('Ymdhis'));
            $this->document->addStyle('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?'.date('Ymdhis'));
        }
        //END Add scripts and css
    }

    public function _check_errors_to_send() {
        if(version_compare(VERSION, '3.0.0.0', '>='))
        {
            if(!empty($this->session->data['error']))
            {
                $this->data_to_view['error_warning_2'] = $this->session->data['error'];
                unset($this->session->data['error']);
            }

            if(array_key_exists('new_version', $this->session->data) && !empty($this->session->data['new_version']))
            {
                $this->data_to_view['new_version'] = $this->session->data['new_version'];
                unset($this->session->data['new_version']);
            }

            if(!empty($this->session->data['error_expired']))
            {
                $this->data_to_view['error_warning_expired'] = $this->session->data['error_expired'];
                unset($this->session->data['error_expired']);
            }

            if(!empty($this->session->data['success']))
            {
                $this->data_to_view['success_message'] = $this->session->data['success'];
                unset($this->session->data['success']);
            }

            if(!empty($this->session->data['info']))
            {
                $this->data_to_view['info_message'] = $this->session->data['info'];
                unset($this->session->data['info']);
            }
        }
    }

    public function _load_basic_languages() {
        $lang_array = array(
            'heading_title_2',
            'button_save',
            'button_cancel',
            'apply_changes',
            'text_image_manager',
            'text_browse',
            'text_clear',
            'image_upload_description',
            'text_validate_license',
            'text_license_id',
            'text_send',
        );

        foreach ($lang_array as $key => $value) {
            $this->data_to_view[$value] = $this->language->get($value);
        }

        $this->data_to_view['heading_title'] = $this->language->get('heading_title');
    }

    public  function _redirect($url) {
        if(version_compare(VERSION, '2.0.0.0', '>='))
            $this->response->redirect($this->url->link($url, $this->token_name.'=' . $this->session->data[$this->token_name]));
        else
            $this->redirect($this->url->link($url, $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL'));
    }

    public function _send_custom_variables_to_view() {
        $jquery_variables = array();

        $jquery_variables = array(
            'token' => $this->session->data[$this->token_name],
            'token_name' => $this->token_name,
            'action' => html_entity_decode($this->url->link($this->real_extension_type.'/'.$this->extension_name, $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL')),
            'link_ajax_get_form' => htmlspecialchars_decode($this->url->link($this->real_extension_type.'/'.$this->extension_name.'&ajax_function=ajax_get_form', $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL')),
            'link_ajax_open_ticket' => htmlspecialchars_decode($this->url->link($this->real_extension_type.'/'.$this->extension_name.'&ajax_function=ajax_open_ticket', $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL')),
            'text_image_manager' => $this->language->get('text_image_manager'),
        );

        //$jquery_variables = $this->model_extension_module_ie_pro_tab_profiles->_send_custom_variables_to_view($jquery_variables);

        $this->data_to_view['jquery_variables'] = $jquery_variables;
    }

    public function ajax_open_ticket()
    {
        $data = $this->request->post;
        $data['domain'] = HTTPS_CATALOG;
        $data['license_id'] = $this->config->get($this->extension_group_config.'_license_id');
        $result = $this->model_extension_devmanextensions_tools->curl_call($data, $this->api_url.'opencart/ajax_open_ticket');

        //from API are in json_encode
        echo $result; die;
    }

    public function _construct_view_form() {
        $this->_add_css_js_to_document();

        $form_view = array(
            'action' => $this->url->link($this->real_extension_type.'/'.$this->extension_name, $this->token_name.'=' . $this->session->data[$this->token_name], 'SSL'),
            'id' => $this->extension_name,
            'extension_name' => $this->extension_name,
            'columns' => 1,
            'tabs' => array(
                $this->language->get('tab_general') => array(
                    'icon' => '<i class="fa fa-cog"></i>',
                    'fields' => $this->model_extension_module_options_combinations_tab_general->get_fields(),
                ),
            )
        );

        $form_view = $this->model_extension_devmanextensions_tools->_get_form_values($form_view);

        return $form_view;
    }

    public function ajax_get_form($license_id = '') {
        $this->model_extension_devmanextensions_tools->ajax_get_form($license_id);
    }

    public function _test_before_save() {
        if(version_compare(VERSION, '3', '>=')) {
            if($this->multistore_config) {
                foreach ($this->stores as $key => $store) {
                    $this->insert_module_status_oc3x($store['store_id']);
                }
            } else {
                $this->insert_module_status_oc3x();
            }
        }

        return false;
    }
    function insert_module_status_oc3x($store_id = false) {
        $status_post_index = $this->extension_group_config.'_status'.(is_numeric($store_id) ? '_'.$store_id : '');
        $status = array_key_exists($status_post_index, $this->request->post) && !empty($this->request->post[$status_post_index]);
        $code = 'module_' . $this->extension_name;
        $key = $code . '_status';
        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "'".(is_numeric($store_id) ? " AND `store_id` = ".(int)$store_id : '').";");

        if ($status) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = 1".(is_numeric($store_id) ? " , `store_id` = ".(int)$store_id  : '' ).";");
        }
    }


    public function table_exists($table_name){
        if (empty($this->db->query("SHOW TABLES LIKE '{$table_name}'")->rows))
            return false;
        return true;
    }

    private function create_product_options_combinations_option_values_table()
    {
        $db_prefix = DB_PREFIX;
        $table_name = "{$db_prefix}product_options_combinations_option_values";

        $this->db->query("CREATE TABLE `{$table_name}` (
            `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `product_id` INT(11) NOT NULL,
            `combination_id` INT(11) NOT NULL,
            `option_value_id` INT(11) NULL,
            `option_id` INT(11) NOT NULL,
            `value` TEXT NULL
         ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("ALTER TABLE `{$table_name}` ADD UNIQUE `unique_index`(`combination_id`, `option_value_id`);");

        $this->db->query("CREATE INDEX `idx-opcov-combination_id` ON `{$table_name}` (combination_id);");
        $this->db->query("CREATE INDEX `idx-opcov-option_value_id` ON `{$table_name}` (option_value_id);");
        $this->db->query("CREATE INDEX `idx-opcov-option_id` ON `{$table_name}` (option_id);");

        $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations` ENGINE=InnoDB;");

        $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations` MODIFY id INT(11);");

        $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations` DROP PRIMARY KEY;");

        $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations` MODIFY id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT;");

        $this->db->query("ALTER TABLE {$table_name} ADD CONSTRAINT `fk-opcov-combination_id` FOREIGN KEY (combination_id) REFERENCES `{$db_prefix}product_options_combinations` (id) ON DELETE CASCADE ON UPDATE CASCADE; ");
    }

    public function migrate_options()
    {
        $db_prefix = DB_PREFIX;
        $this->load->model('extension/module/options_combinations');
        $product_option_combinations = $this->db->query("SELECT id, options, product_id FROM `{$db_prefix}product_options_combinations`")->rows;
        $logger = new Log('opc_migration.log');
        foreach ($product_option_combinations as $product_option_combination) {
            $options = json_decode($product_option_combination['options'], true);

            if (!$options)
                continue;

            foreach ($options as $option_id => $option_value) {
                // If is a checkbox with multi-selection
                if (is_array($option_value)){
                    foreach ($option_value as $option_value_id) {
                        try {
                            $this->model_extension_module_options_combinations->addOptionValue($product_option_combination['id'], $product_option_combination['product_id'], $option_value_id, $option_id);
                        } catch (Exception $e) {
                            $logger->write($e->getMessage());
                        }
                    }
                }
                else {
                    try {
                        $this->model_extension_module_options_combinations->addOptionValue($product_option_combination['id'], $product_option_combination['product_id'], $option_value, $option_id);
                    } catch (Exception $e) {
                        $logger->write($e->getMessage());
                    }
                }
            }
            $logger->write("MIGRATION FINISHED.");
        }
    }

    public function remove_option_columns(){
        $db_prefix = DB_PREFIX;
        if ($this->column_exists('product_options_combinations', 'option_id')){
            $this->db->query("ALTER TABLE {$db_prefix}product_options_combinations DROP COLUMN option_id");
        }
        if ($this->column_exists('product_options_combinations', 'options')){
            $this->db->query("ALTER TABLE {$db_prefix}product_options_combinations DROP COLUMN options;");
        }
    }


    /**
     * Please apply new database changes here in an incremental way. Some order into chaos.
     */
    public function apply_migrations(){
        $db_prefix = DB_PREFIX;

        if ($this->table_exists("{$db_prefix}product_options_combinations") && !$this->table_exists("{$db_prefix}product_options_combinations_option_values")){
            set_time_limit(3600);
            $this->create_product_options_combinations_option_values_table();
            $this->migrate_options();
            $this->remove_option_columns();
        }

        if ($this->get_column_data_type('product_options_combinations', 'quantity') != 'int(4)'){
            $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations` MODIFY quantity INT(4);");
        }

        if ($this->get_column_data_type('product_options_combinations', 'model') != 'varchar(64)'){
            $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations` MODIFY model varchar(64);");
        }

        // 2020-12-23 Adding value field for no selectable options: date, time, datetime, file, text, textarea
        if (!$this->column_exists('product_options_combinations_option_values', 'value')){
            $this->db->query("ALTER TABLE `{$db_prefix}product_options_combinations_option_values` MODIFY option_value_id INT(11) NULL;");
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_options_combinations_option_values` ADD COLUMN `value` TEXT NULL;");
        }

        if (!$this->column_exists('product_options_combinations_option_values', 'product_id')){
            $this->db->query("ALTER TABLE `".DB_PREFIX."product_options_combinations_option_values` ADD `product_id` INT(11)  NULL  DEFAULT NULL  AFTER `id`");
        }

        // 2020-12-28 Creating table product_combination_as_product
        if (!$this->table_exists(DB_PREFIX . "product_combination_as_product")) {
            $this->create_combination_as_product_table();
        }

        $this->fix_for_include_twig();
    }

    private function create_combination_as_product_table(){
        $table_name = DB_PREFIX . "product_combination_as_product";
        $sql = "
        CREATE TABLE `{$table_name}` (
            `product_combination_as_product_id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `product_id` INT(11) NOT NULL,
            `option_values_ids_json` TEXT NOT NULL, 
            `extra_option_json` TEXT NOT NULL,
            `prices_json` TEXT,
            `specials_json` TEXT,
            `images` VARCHAR(255) NULL
            )
        ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ";

        $this->db->query($sql);
        $this->db->query("CREATE INDEX `idx-pcap-product_id` ON `{$table_name}` (product_id);");
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ENGINE=InnoDB;");
        $this->db->query("ALTER TABLE {$table_name} ADD CONSTRAINT `fk-pcap-product_id` FOREIGN KEY (product_id) REFERENCES `" . DB_PREFIX . "product` (product_id) ON DELETE CASCADE ON UPDATE CASCADE;");
    }

    public function get_column_data_type($table, $column){
        $sql = "SHOW COLUMNS FROM  `" . DB_PREFIX . $table . "` WHERE `field` LIKE '" . $column . "'";
        $result = $this->db->query($sql);
        return !empty($result->row) ? $result->row['Type'] : null;
    }

    public function fix_for_include_twig() {
        if(version_compare(VERSION, '3.0.3.5', '>=')) {
            $modification = $this->db->query("SELECT * FROM `".DB_PREFIX."modification` WHERE `code` = 'options_combinations'");
            if(!empty($modification->row['xml'])) {
                $new_xml = str_replace(array('<!-- UNCOMMENT TWIG INCLUDE FIX', 'UNCOMMENT TWIG INCLUDE FIX -->'), '', $modification->row['xml']);
                $this->db->query("UPDATE `".DB_PREFIX."modification` SET xml = '".$this->db->escape($new_xml)."' WHERE modification_id = ".$modification->row['modification_id']);
            }
        }
    }

    public function install() {

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_options_combinations` (
                            `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            `product_id` INT(11) DEFAULT NULL,
                            `option_id` int(11) DEFAULT NULL,
                            `options` text NOT NULL,
                            `images` text NOT NULL,
                            `sku` varchar(64) NOT NULL,
                            `upc` varchar(12) NOT NULL,
                            `prices` text NOT NULL,
                            `quantity` int(3) DEFAULT NULL,
                            `subtract` tinyint(1) DEFAULT NULL,
                            `required` tinyint(1) DEFAULT NULL,
                            `weight` decimal(15,8) DEFAULT NULL,
                            `weight_prefix` varchar(1) DEFAULT NULL,
                            `option_type` varchar(16) DEFAULT NULL,
                            `model` varchar(32) DEFAULT NULL,
                            `length` decimal(15,8) DEFAULT NULL,
                            `width` decimal(15,8) DEFAULT NULL,
                            `height` decimal(15,8) DEFAULT NULL,
                            `extra_text` text NOT NULL,
                            KEY `product_id` (`product_id`)
                        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        if (!$this->column_exists( 'order_product', 'combination_id')) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD COLUMN `combination_id` INT(11) NULL;");
        }

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_options_combinations_bullets` (
                            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            `product_id` int(11) DEFAULT NULL,
                            `option_id` int(11) DEFAULT NULL,
                            `image_origin` int(11) DEFAULT NULL,
                            KEY `product_id` (`product_id`)
                        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->apply_migrations();
    }

    private function includeOptionsData($data){
        $options = $this->model_catalog_option->getOptions();

        $data['options_and_values'] = [];

//        foreach ($options as $key => $opt) {
//            if(!in_array($opt['type'], array('select','radio','checkbox')))
//                unset($options[$key]);
//        }

        foreach ($options as $option) {
            $option_id = $option['option_id'];

            $values = [];
            $option_values = $this->model_catalog_option->getOptionValues($option_id);
            foreach ($option_values as $optionValue) {
                $option_value_id = $optionValue['option_value_id'];
                $values[$option_value_id] = $optionValue;
            }

            $data['options_and_values'][$option_id] = [
                'option_id' => $option_id,
                'name' => $option['name']." [{$option['option_id']}]"." [{$option['type']}]",
                'values' => $values,
                'type' => $option['type'],
            ];

        }

        foreach ($options as $option) {
            $option_id = $option['option_id'];
            $data['options_id_name'][$option_id] = [
                'name' => $option['name'],
                'option_id' => $option_id,
                'type' => $option['type'],
                'values' => $this->getOptionValues($option),
            ];
        }

        return $data;

    }

    private function includeConfigData($data){
        $data['config_opt_comb_price'] = $this->config->get('config_opt_comb_price');
        $data['config_opt_comb_price_customer_groups'] = $this->config->get('config_opt_comb_price_customer_groups');
        $data['config_opt_comb_special'] = $this->config->get('config_opt_comb_special');
        $data['config_opt_comb_discount'] = $this->config->get('config_opt_comb_discount');
        $data['config_opt_comb_points'] = $this->config->get('config_opt_comb_points');
        $data['config_opt_comb_points_customer_groups'] = $this->config->get('config_opt_comb_points_customer_groups');
        $data['config_opt_comb_reward_points'] = $this->config->get('config_opt_comb_reward_points');
        $data['config_opt_comb_reward_points_customer_groups'] = $this->config->get('config_opt_comb_reward_points_customer_groups');
        $data['config_opt_comb_model'] = $this->config->get('config_opt_comb_model');
        $data['config_opt_comb_weight'] = $this->config->get('config_opt_comb_weight');
        $data['config_opt_comb_dimensions'] = $this->config->get('config_opt_comb_dimensions');
        $data['config_opt_comb_extra'] = $this->config->get('config_opt_comb_extra');
        $data['config_opt_comb_image'] = $this->config->get('config_opt_comb_image');
        $data['config_opt_comb_sku'] = $this->config->get('config_opt_comb_sku');
        $data['config_opt_comb_upc'] = $this->config->get('config_opt_comb_upc');
        $data['config_opt_comb_seo_url'] = $this->config->get('config_opt_comb_seo_url');
        $data['entry_options'] = $this->language->get('entry_options');
        $data['token_name'] = $this->token_name;

        if(version_compare(VERSION, '3', '<')) {
            $this->language->get('extension/module/options_combinations_general_texts');
            $this->language->get('extension/module/options_combinations_tab_general');
            $data['entry_images'] = $this->language->get('entry_images');
            $data['entry_subtract_stock'] = $this->language->get('entry_subtract_stock');
            $data['entry_subtract_stock'] = $this->language->get('entry_subtract_stock');
            $data['entry_dimensions'] = $this->language->get('entry_dimensions');
            $data['entry_discount'] = $this->language->get('entry_discount');
            $data['entry_special'] = $this->language->get('entry_special');
            $data['entry_action'] = $this->language->get('entry_action');
            $data['extra'] = $this->language->get('extra');
            $data['entry_seo'] = $this->language->get('entry_seo');
            $data['entry_keyword'] = $this->language->get('entry_keyword');
            $data['entry_store'] = $this->language->get('entry_store');
            $data['bullet'] = $this->language->get('bullet');
            $data['entry_bullet_option_help'] = $this->language->get('entry_bullet_option_help');
            $data['entry_bullet_image_help'] = $this->language->get('entry_bullet_image_help');
            $data['bullet_option'] = $this->language->get('bullet_option');
            $data['bullet_image'] = $this->language->get('bullet_image');
            $data['bullet_image_option_1'] = $this->language->get('bullet_image_option_1');
            $data['bullet_image_option_2'] = $this->language->get('bullet_image_option_2');
            $data['bullet_image_option_3'] = $this->language->get('bullet_image_option_3');
            $data['entry_sku'] = $this->language->get('entry_sku');
            $data['entry_upc'] = $this->language->get('entry_upc');
            $data['entry_quantity'] = $this->language->get('entry_quantity');
            $data['entry_model'] = $this->language->get('entry_model');
            $data['text_yes'] = $this->language->get('text_yes');
            $data['text_no'] = $this->language->get('text_no');
            $data['entry_customer_group'] = $this->language->get('entry_customer_group');
            $data['entry_prefix'] = $this->language->get('entry_prefix');
            $data['entry_price'] = $this->language->get('entry_price');
            $data['entry_points'] = $this->language->get('entry_points');
            $data['entry_points_help'] = $this->language->get('entry_points_help');
            $data['entry_reward_points'] = $this->language->get('entry_reward_points');
            $data['entry_weight'] = $this->language->get('entry_weight');
            $data['entry_length'] = $this->language->get('entry_length');
            $data['entry_width'] = $this->language->get('entry_width');
            $data['entry_height'] = $this->language->get('entry_height');
            $data['entry_priority'] = $this->language->get('entry_priority');
            $data['entry_date_start'] = $this->language->get('entry_date_start');
            $data['entry_date_end'] = $this->language->get('entry_date_end');
            $data['button_remove'] = $this->language->get('button_remove');
            $data['entry_all_customer_groups'] = $this->language->get('entry_all_customer_groups');
        }

        $this->load->language('extension/module/options_combinations');
        $data['text_data'] = $this->language->get('text_data');
        $data['text_discounts'] = $this->language->get('text_discounts');
        $data['text_specials'] = $this->language->get('text_specials');
        $data['text_images'] = $this->language->get('text_images');
        $data['text_points'] = $this->language->get('text_points');
        $data['text_reward_points'] = $this->language->get('text_reward_points');

        return $data;
    }

    public function getOptionsForm($data)
    {
        $product_id = isset($this->request->get['product_id']) ? $this->request->get['product_id'] : null;
        $data['options_thumb'] =  $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($this->request->post['options_combinations'])){
            $data['options_combinations'] = $this->request->post['options_combinations'];
            // process post images
            foreach ($data['options_combinations'] as $key => $combination) {
                if (isset($combination['images'])) {
                    $images = $this->model_extension_module_options_combinations->getProcessedImages($combination['images']);
                    $data['options_combinations'][$key]['images'] = $images;
                }
            }
        } else {
            $data['options_combinations'] = $this->model_extension_module_options_combinations->getCombinedOptions($product_id);
        }

        $data = $this->includeOptionsData($data);

        $data = $this->includeConfigData($data);
        $data['user_token'] = $this->session->data[$this->token_name];

        $this->load->model('extension/module/'.$this->extension_name.'_tab_general');
        $data['all_product_options'] = $this->model_extension_module_options_combinations_tab_general->get_options_array();
        $data['options_combinations_bullet'] = $this->model_extension_module_options_combinations->getProductBulletOptions($product_id);

        if ($this->config->get('config_opt_comb_seo_url')) {
            $this->load->model('localisation/language');
            $data['languages'] = $this->model_localisation_language->getLanguages();
            $data['stores'] = array();
            $data['stores'][] = array(
                'store_id' => 0,
                'name' => $this->language->get('text_default')
            );

            $this->load->model('setting/store');
            $stores = $this->model_setting_store->getStores();

            foreach ($stores as $store) {
                $data['stores'][] = array(
                    'store_id' => $store['store_id'],
                    'name' => $store['name']
                );
            }
        }

        $form = $this->load->view($this->model_extension_module_options_combinations->format_view('extension/module/options_combinations/form'), $data);

        return $form;
    }

    private function renderRow($data, $options){

        $data['combined_product_option']['options'] = array();
        if ($options){
            foreach ($options as $key => $option) {
                $data['combined_product_option']['options'][$option->value] = $option->selected_value_id;
            }
        }

        return $this->load->view($this->model_extension_module_options_combinations->format_view('extension/module/options_combinations/combination_row'), $data);
    }

    public function getDiscountRow(){
        $this->language->load('catalog/product');
        $data = array();
        $data = $this->includeOptionsData($data);
        $data['customer_groups'] = $customer_groups = $this->model_extension_devmanextensions_tools->getCustomerGroups();
        $data['option_combination_row'] = $this->request->get['option_combination_row'];
        $data['count_discounts'] = $this->request->get['count_discounts'];

        if(version_compare(VERSION, '3', '<')) {
            $data['entry_quantity'] = $this->language->get('entry_quantity');
            $data['entry_priority'] = $this->language->get('entry_priority');
            $data['entry_price'] = $this->language->get('entry_price');
            $data['entry_date_start'] = $this->language->get('entry_date_start');
            $data['entry_date_end'] = $this->language->get('entry_date_end');
        }

        $path = $this->model_extension_module_options_combinations->format_view('extension/module/options_combinations/elements_light/option_discount_element_row');
        $response_data = array(
            'data' => $this->load->view($path, $data)
        );

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response_data));
    }

    public function getSpecialRow(){
        $this->language->load('catalog/product');
        $data = array();
        $data = $this->includeOptionsData($data);
        $data['customer_groups'] = $customer_groups = $this->model_extension_devmanextensions_tools->getCustomerGroups();
        $data['option_combination_row'] = $this->request->get['option_combination_row'];
        $data['count_groups'] = $this->request->get['count_specials'];

        if(version_compare(VERSION, '3', '<')) {
            $data['entry_priority'] = $this->language->get('entry_priority');
            $data['entry_price'] = $this->language->get('entry_price');
            $data['entry_date_start'] = $this->language->get('entry_date_start');
            $data['entry_date_end'] = $this->language->get('entry_date_end');
        }

        $response_data = array(
            'data' => $this->load->view($this->model_extension_module_options_combinations->format_view('extension/module/options_combinations/elements_light/option_special_element_row'), $data)
        );

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response_data));
    }

    public function getOptionsRow(){

        $this->language->load('catalog/product');

        $data = array();

        $data = $this->includeOptionsData($data);

        $data = $this->includeConfigData($data);

        $data['customer_groups'] = $customer_groups = $this->model_extension_devmanextensions_tools->getCustomerGroups();

        $data['open_row'] = true;

        if ($this->config->get('config_opt_comb_seo_url')) {
            $this->load->model('localisation/language');
            $data['languages'] = $this->model_localisation_language->getLanguages();
            $data['stores'] = array();
            $data['stores'][] = array(
                'store_id' => 0,
                'name' => $this->language->get('text_default')
            );

            $this->load->model('setting/store');
            $stores = $this->model_setting_store->getStores();

            foreach ($stores as $store) {
                $data['stores'][] = array(
                    'store_id' => $store['store_id'],
                    'name' => $store['name']
                );
            }
        }

        $form = '';

        if ($this->request->get['multiple']){
            $combination_row = $this->request->get['option_combination_row'];
            $options_list = FALSE;
            if ($this->request->get['options']){
                $options_list = json_decode(urldecode($this->request->get['options']));
            }
            else if ($this->request->get['options_ids']){
                // this decode and encode is required for normalizing
                $options_list = json_decode(json_encode($this->findAllVariants($this->request->get['options_ids'])));
            }
            $rows_number =  $this->request->get['multiple'];
            if ($this->request->get['options_ids']){
                $rows_number = count($options_list);
            }
            for ($i=0; $i < $rows_number; $i++){
                $data['option_combination_row'] = $combination_row;
                $options = !empty($options_list) && array_key_exists($i, $options_list) ? $options_list[$i] : [];
                $form .= $this->renderRow($data, $options);
                $combination_row ++;
            }

        } else {
            $data['option_combination_row'] = $this->request->get['option_combination_row'];
            $options = json_decode(urldecode($this->request->get['options']));
            $form = $this->renderRow($data, $options);
        }

        $response_data = array(
            'data' => $form
        );

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response_data));

    }

    private function getOptionValues($option)
    {
        $result = [];
        if(in_array($option['type'],['select','radio', 'checkbox', 'image'])) {
            $result = $this->model_catalog_option->getOptionValues($option['option_id']);
        }

        return $result;
    }

    public function getOptionValuesByIds()
    {
        $result = [];
        $option_ids = isset($this->request->get['option_ids'])
            ? (array)$this->request->get['option_ids']
            : [];

        if($option_ids) {

            $sql = "SELECT od.option_id,
                       od.name AS option_name,
                       ovd.option_value_id,
                       ovd.name
                FROM `".DB_PREFIX."option_description` AS od
                LEFT JOIN `".DB_PREFIX."option_value_description` AS ovd ON ovd.option_id = od.option_id
                WHERE  od.language_id = '".(int)$this->config->get('config_language_id')."'
                  AND (ovd.language_id IS NULL OR ovd.language_id = '".(int)$this->config->get('config_language_id')."')
                  AND od.option_id IN (".implode(',', $option_ids).")";

            $query = $this->db->query($sql);

            foreach ($query->rows as $row) {
                $optionId = $row['option_id'];
                $option_value = [
                    'option_value_id' => $row['option_value_id'],
                    'name' => $row['name'],
                ];

                if(!isset($result[$optionId])) {
                    $result[$optionId] = [
                        'label' => $row['option_name'],
                        'value' => $optionId,
                        'type' => $this->db->query('SELECT type FROM `'.DB_PREFIX.'option` WHERE option_id = '.$optionId)->row['type']
                    ];
                }

                $result[$optionId]['option_value'][] = $option_value;
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(['options'=>$result]));
    }

    private function findAllVariants($option_ids){
        $result = [];

        $options = $optionValues = $no_selectable_options = [];
        foreach ($option_ids as $optionId) {
            $options[$optionId] = $this->model_catalog_option->getOption($optionId);
            if (!in_array($options[$optionId]['type'], ['text', 'textarea', 'file', 'date', 'datetime', 'time'])){
                $temp = [];
                foreach ($this->model_catalog_option->getOptionValues($optionId) as $value) {
                    $option_value_id = $value['option_value_id'];
                    $options[$optionId]['values'][$option_value_id] = $value;

                    $temp[] = $optionId.':'.$option_value_id;
                }

                $optionValues[] = $temp;
            }
            else{
                $no_selectable_options[] = $optionId;
            }
        }

        $combinations = $this->getCombinations($optionValues);
        foreach ($combinations as $combination) {
            $temp = [];
            foreach ($combination as $variant) {
                list($option_id,$option_value_id) = explode(':',$variant);
                $temp[] = [
                    'value' => $option_id,
                    'label' => $options[$option_id]['name'],
                    'option_value' => $options[$option_id]['values'],
                    'selected_value_id' => $option_value_id,
                ];
            }
            foreach ($no_selectable_options as $option_id){
                $temp[] = [
                    'value' => $option_id,
                    'label' => $options[$option_id]['name'],
                    'option_value' => null,
                    'selected_value_id' => null,
                ];
            }

            $result[] = $temp;
        }

        return $result;
    }

    public function getAllVariants()
    {
        $option_ids = isset($this->request->get['option_ids'])
            ? (array)$this->request->get['option_ids']
            : [];

        $result = $this->findAllVariants($option_ids);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(['result'=>$result]));
    }

    private function getCombinations($options){

        $combinations = [[]];

        for ($count = 0; $count < count($options); $count++) {
            $tmp = [];
            foreach ($combinations as $v1) {
                foreach ($options[$count] as $v2)
                    $tmp[] = array_merge($v1, [$v2]);

            }
            $combinations = $tmp;
        }

        return $combinations;
    }

    private function column_exists( $table, $column) {
        $table_name = DB_PREFIX . $table;

        $sql = "SELECT COUNT(*) as `total`
                FROM information_schema.COLUMNS
                WHERE TABLE_SCHEMA = DATABASE()
                      AND COLUMN_NAME = '".$this->db->escape($column)."'
                      AND TABLE_NAME = '".$this->db->escape($table_name)."'";

        $query = $this->db->query( $sql);

        return $query->row['total'] == 1;
    }
}
