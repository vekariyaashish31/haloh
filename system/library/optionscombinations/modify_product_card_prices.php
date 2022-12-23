<?php
$temp_product_var = isset($result) ? $result : (isset($product) ? $product : (isset($product_info) ? $product_info : array()));
if(!empty($temp_product_var['product_id']) && $this->config->get('config_opt_comb_status') && $this->config->get('config_opt_comb_text_starting_from_' . $this->config->get('config_language_id'))) {
    $this->load->model('extension/module/options_combinations');
    $lowest_prices = $this->model_extension_module_options_combinations->getCombinationLowestPrices($temp_product_var['product_id'], $temp_product_var['tax_class_id']);

    if (isset($lowest_prices['special']) && $lowest_prices['special']){
        $special = $lowest_prices['special'];
        $result['special'] = $lowest_prices['special_raw'];
    }

    if ($price !== false && $lowest_prices['price']){
        $price = $lowest_prices['price'];
    }

    if ($lowest_prices['tax']){
        $tax = $lowest_prices['tax'];
    }
}
