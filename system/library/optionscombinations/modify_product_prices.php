<?php

if($product_id && $this->config->get('config_opt_comb_status') && $this->config->get('config_opt_comb_text_starting_from_' . $this->config->get('config_language_id'))) {

     //Fix for some extensions that are chaning the product id variable in product controller.
    $product_id = !empty($this->request->get['product_id']) ? $this->request->get['product_id'] : $product_id;

    $this->load->model('extension/module/options_combinations');
    $lowest_prices = $this->model_extension_module_options_combinations->getCombinationLowestPrices($product_id, $product_info['tax_class_id']);

    if (isset($lowest_prices['special']) && $lowest_prices['special']){
        $data['special'] = $lowest_prices['special'];

        if(isset($result) && array_key_exists('special', $result))
            $result['special'] = $lowest_prices['special_raw'];
    }

    if ($data['price'] !== false && $lowest_prices['price']){
        $data['price'] = $lowest_prices['price'];
    }

    if ($lowest_prices['tax']){
        $data['tax'] = $lowest_prices['tax'];
    }
}
