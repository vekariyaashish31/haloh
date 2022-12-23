<?php
class ControllerExtensionModuleOptionsCombinations extends Controller
{

    public function option_script(){
        $this->load->language('product/product');
        $this->load->language('extension/module/options_combinations');
        $this->load->model('extension/module/options_combinations');
        $this->load->model('catalog/product');

        $data = $this->request->get;

        $data['options_like_images_option_fields'] = $this->config->get('config_opt_comb_options_like_images_option_fields');
        $data['options_like_list_option_fields'] = $this->config->get('config_opt_comb_options_like_list_option_fields');

        $data['options'] = $this->model_extension_module_options_combinations->getCombinedOptions($data['product_id']);

        $data['no_selectable_options'] = $this->model_extension_module_options_combinations->getProductNoSelectableOptions($data['product_id']);

        $data['data'] = $this->model_catalog_product->getProduct($data['product_id']);

        // TODO: This is not necessary for computing stock text anymore, I'll leave it to avoid errors, it'll be fixed later
        if ($data['data']['quantity'] <= 0) {
            $data['data']['stock'] = $data['data']['stock_status'];
        } elseif ($this->config->get('config_stock_display')) {
            $data['data']['stock'] = $data['data']['quantity'];
        } else {
            $data['data']['stock'] = $this->language->get('text_instock');
        }

        $data['config_stock_display'] = $this->config->get('config_stock_display');
        $data['text_instock']  = $this->language->get('text_instock');

        $data['product_href'] = str_replace('&amp;', '&', $this->url->link('product/product', 'product_id=' . (int) $data['product_id']));
        $data['seo_url'] = $this->config->get('config_seo_url');
        $data['url_params'] = !empty($data['url_params']) ? str_replace("'", "%27", urldecode($data['url_params'])) : '';

        $data['options_like_images_tooltip_position'] = $this->config->get('config_opt_comb_options_like_images_tooltip_position');
        $data['options_like_list_tooltip_position'] = $this->config->get('config_opt_comb_options_like_list_tooltip_position');
        $data['options_like_images_tooltip_background_color'] = $this->config->get('config_opt_comb_options_like_images_tooltip_background_color');
        $data['options_like_list_tooltip_background_color'] = $this->config->get('config_opt_comb_options_like_list_tooltip_background_color');
        $data['options_like_images_tooltip_font_color'] = $this->config->get('config_opt_comb_options_like_images_tooltip_font_color');
        $data['options_like_list_tooltip_font_color'] = $this->config->get('config_opt_comb_options_like_list_tooltip_font_color');

        $require_combination_message = $this->config->get('config_opt_comb_text_select_combination_message_'. $this->config->get('config_language_id'));
        if (!$require_combination_message) {
            $require_combination_message = $this->language->get('text_select_combination_message_default');
        }
        $data['text_require_combination'] = $require_combination_message;

        if(version_compare(VERSION, '3', '<')) {
            $data['text_points'] = $this->language->get('text_points');
            $data['text_reward'] = $this->language->get('text_reward');
            $data['text_reward_points'] = $this->language->get('text_reward_points');
            $data['text_discount'] = $this->language->get('text_discount');
            $data['text_loading'] = $this->language->get('text_loading');
            $data['button_upload'] = $this->language->get('button_upload');
        }

        $data['price_enabled'] = $this->customer->isLogged() ||
            $this->config->get('config_customer_price') == 0;

        $data['config_opt_comb_stock'] = $this->config->get('config_opt_comb_stock');

        $view = 'product/options_combinations_script';
        $extension = version_compare(VERSION, '3', '>=') ? 'twig' : 'tpl';

        //THEME COMPATIBILITY - Multi store compatibility (some shops use different themes for each store).
        $theme_1 = $this->config->get('config_template');
        $theme_2 = $this->config->get('config_theme');
        $current_theme = !empty($theme_1) ? $theme_1 : $theme_2;

        if(is_file(DIR_TEMPLATE.$current_theme.'/template/product/options_combinations_theme_script.'.$extension)){
            $view = 'product/options_combinations_theme_script';
        }elseif(is_file(DIR_TEMPLATE.'default/template/product/options_combinations_theme_script.'.$extension)){
            $view = 'product/options_combinations_theme_script';
        }

        $this->response->addHeader('Content-Type: text/javascript');
        // avoid cache
        $this->response->addHeader('Cache-Control: no-cache, no-store, must-revalidate');
        $this->response->addHeader('Pragma: no-cache');
        $this->response->addHeader('Expires: 0');

        if(version_compare(VERSION, '2.2', '<'))
            $view = 'default/template/'.$view.'.tpl';

        $this->response->setOutput($this->load->view($view, $data));
    }

    public function generic_option_script(){
        $this->load->language('product/product');
        $this->load->language('extension/module/options_combinations');
        $this->load->model('extension/module/options_combinations');
        $this->load->model('catalog/product');

        $data = $this->request->get;

        $data['options_like_images_option_fields'] = $this->config->get('config_opt_comb_options_like_images_option_fields');
        $data['options_like_list_option_fields'] = $this->config->get('config_opt_comb_options_like_list_option_fields');

        $data['product_options'] = $this->model_extension_module_options_combinations->getProductOptions($data['product_id']);
        $data['options'] = $this->model_extension_module_options_combinations->getCombinedOptions($data['product_id']);
        $data['config_opt_comb_add_to_cart_button_selector'] = $this->config->get('config_opt_comb_add_to_cart_button_selector');

        $data['no_selectable_options'] = $this->model_extension_module_options_combinations->getProductNoSelectableOptions($data['product_id']);

        $data['data'] = $this->model_catalog_product->getProduct($data['product_id']);

        $data['price_enabled'] = $this->customer->isLogged() || $this->config->get('config_customer_price') == 0;

        if ($data['data']['quantity'] <= 0) {
            $data['data']['stock'] = $data['data']['stock_status'];
        } elseif ($this->config->get('config_stock_display')) {
            $data['data']['stock'] = $data['data']['quantity'];
        } else {
            $data['data']['stock'] = $this->language->get('text_instock');
        }

        $data['config_stock_display'] = $this->config->get('config_stock_display');
        $data['text_instock']  = $this->language->get('text_instock');

        $data['product_href'] = str_replace('&amp;', '&', $this->url->link('product/product', 'product_id=' . (int) $data['product_id']));
        $data['seo_url'] = $this->config->get('config_seo_url');
        $data['url_params'] = str_replace("'", "%27", urldecode($data['url_params']));

        $require_combination_message = $this->config->get('config_opt_comb_text_select_combination_message_'. $this->config->get('config_language_id'));
        if (!$require_combination_message) {
            $require_combination_message = $this->language->get('text_select_combination_message_default');
        }
        $data['text_require_combination'] = $require_combination_message;

        $data['text_generic_modal_add'] = $this->config->get('config_opt_comb_text_generic_modal_add_' . $this->config->get('config_language_id'));
        $data['text_generic_modal_close'] = $this->config->get('config_opt_comb_text_generic_modal_close_' . $this->config->get('config_language_id'));
        $data['text_generic_modal_choose'] = $this->config->get('config_opt_comb_text_generic_modal_choose_' . $this->config->get('config_language_id'));
        $data['text_reset_options'] = $this->config->get('config_opt_comb_button_reset_options_text_' . $this->config->get('config_language_id'));
        $data['config_opt_comb_button_reset_options'] = $this->config->get('config_opt_comb_button_reset_options');

        if (strpos($data['config_opt_comb_theme_generic_button_text'], '?v=') !== false)
            $data['config_opt_comb_theme_generic_button_text'] = explode('?v=', $data['config_opt_comb_theme_generic_button_text'])[0];

        $this->response->addHeader('Content-Type: text/javascript');
        // avoid cache
        $this->response->addHeader('Cache-Control: no-cache, no-store, must-revalidate');
        $this->response->addHeader('Pragma: no-cache');
        $this->response->addHeader('Expires: 0');

        $view = 'product/options_combinations_generic_script';

        if(version_compare(VERSION, '2.2', '<'))
            $view = 'default/template/'.$view.'.tpl';
        $this->response->setOutput($this->load->view($view, $data));
    }

    public function format_price(){
        $data = $this->request->post;
        $raw_price = $this->tax->calculate($data['price'], $data['tax_class_id'], $this->config->get('config_tax'));
        $price['price_ex_tax'] = $this->currency->format($data['price'] * $data['quantity'], $this->session->data['currency']);
        $price['price_formatted'] = $this->currency->format($raw_price * $data['quantity'], $this->session->data['currency']);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($price));
    }
}
