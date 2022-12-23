<?php
if ($this->config->get('config_opt_comb_combinations_as_products')) {
    $final_products = array();
    foreach ($data['products'] as $key => $result) {
        if (!empty($result['combination_as_product'])) {
            $combination_as_product = $result['combination_as_product'];
            unset($result['combination_as_product']);
            $final_products[] = $this->model_extension_module_options_combinations->build_grouped_card_product($result, $combination_as_product, $url);
        } else
            $final_products[] = $result;
    }
    $data['products'] = $final_products;
}