<?php
$combination_id = null;

if($this->config->get('config_opt_comb_status') && $option_combination){
    $option_combination = !empty($option_combination) && is_string($option_combination) ? json_decode($option_combination, true) : $option_combination;
    $selected_options_combinations = $option_combination;

    if ($selected_options_combinations) {

        $option_value_ids_str = '';
        $no_selectable_option_ids_str = '';

        foreach ($selected_options_combinations as $option_id => $value) {

            if (empty($value))
                continue;

            if (!is_numeric($value) && !is_array($value)){
                $no_selectable_option_ids_str .= "'{$option_id}',";
            }

            if (!is_array($value))
                $option_value_ids_str .= "'{$value}',";
            else{
                foreach ($value as $value_id){
                    $option_value_ids_str .= "'{$value_id}',";
                }
            }
        }

        $option_value_ids_str = substr($option_value_ids_str, 0, -1);
        $no_selectable_option_ids_str = substr($no_selectable_option_ids_str, 0, -1);

        $query = "
            SELECT
                o.option_id,
                o.type,
                od.name AS option_name,
                ov.option_value_id,
                ovd.name AS option_value_name
            FROM
                `" . DB_PREFIX . "option` o
            INNER JOIN
                `" . DB_PREFIX . "option_description` od
            ON
                (o.option_id = od.option_id AND od.language_id = '" . (int)$this->config->get('config_language_id') . "')
            LEFT JOIN
                `" . DB_PREFIX . "option_value` ov
            ON
                (o.option_id = ov.option_id)
            LEFT JOIN
                `" . DB_PREFIX . "option_value_description` ovd
            ON
                (ov.option_value_id = ovd.option_value_id AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "')
            WHERE
                ov.option_value_id IN (" . $option_value_ids_str . ") " . (!empty($no_selectable_option_ids_str) ? "OR o.option_id IN (" . $no_selectable_option_ids_str . ")" : "") . " 
            ORDER BY
                o.sort_order,
                ov.sort_order
        ";

        foreach ($this->db->query($query)->rows as $option) {
            $cart_option = array(
                'product_option_id' => "",
                'product_option_value_id' => "",
                'option_id' => $option['option_id'],
                'option_value_id' => $option['option_value_id'],
                'name' => $option['option_name'],
                'value' => $option['option_value_name'],
                'type' => $option['type'],
                'price' => ''
            );

            if (in_array($option['type'], ['text', 'textarea', 'file', 'date', 'datetime', 'time'])){
                $cart_option['option_value_id'] = null;
                $cart_option['value'] = $selected_options_combinations[$option['option_id']];
            }

            $option_data[] = $cart_option;
        }

    }

    $options_combinations = $this->opc->getProductMatchingOptionsCombination($cart['product_id'], $selected_options_combinations);

    if ($options_combinations){

        $prices_array = json_decode($options_combinations['prices'], true);

        $combination_id = $options_combinations['id'];

        if(!empty($options_combinations['images'])) {
            $first_image = json_decode($options_combinations['images'], true);
            $first_image = !empty($first_image) && is_array($first_image) ? $first_image[0] : false;

            if(!empty($first_image))
                $product_query->row['image'] = $first_image;
        }

        $price_prefix = $this->opc->getCurrentPriceValue($prices_array, 'option_price', 'price_prefix');
        $price_value = $this->opc->getCurrentPriceValue($prices_array, 'option_price', 'price');

        //Devman Extensions - info@devmanextensions.com - 13/9/21 13:41 - calculate price first all
        if ($price_prefix == '+') {
            $price += $price_value;
        } elseif ($price_prefix == '-' ) {
            $price -= $price_value;
        }
        elseif ($price_prefix == '=') {
            $price = $price_value;
        }

        //Make array_reverse to get better prices first.
        $customer_discounts = array_reverse($this->opc->findCustomerDiscounts($options_combinations, $cart['quantity']));
        $customer_special = $this->opc->findCustomerSpecial($options_combinations);

        $has_normal_discount = (!isset($prices_array['option_discount']) || !$prices_array['option_discount']) && $product_discount_query->num_rows && ($price_prefix != '=' and $price_value == 0);
        if ($customer_discounts){
            foreach ($customer_discounts as $customer_discount){
                $price = $customer_discount['price'];
                break;
            }
        } else if ($has_normal_discount) {
            $price = $product_discount_query->row['price'];
        }

        $has_normal_special = (!isset($prices_array['option_special']) || !$prices_array['option_special']) && $product_special_query->num_rows && ($price_prefix != '=' and $price_value == 0);
        if ($customer_special && $customer_special['price'] < $price){
            $price = $customer_special['price'];
        } else if ($has_normal_special && $product_special_query->row['price'] < $price) {
            $price = $product_special_query->row['price'];
        }

        /*if (!$customer_discounts && !$customer_special && !$has_normal_special && !$has_normal_discount){
            if ($price_prefix == '+') {
                $price += $price_value;
            } elseif ($price_prefix == '-' ) {
                $price -= $price_value;
            }
            elseif ($price_prefix == '=') {
                $price = $price_value;
            }
        }*/

        $weight_prefix = $options_combinations['weight_prefix'];
        $weight_value = $options_combinations['weight'];
        if ($weight_prefix == '+') {
            $option_weight = $weight_value;
        } elseif ($weight_prefix == '-') {
            $option_weight = 0 - $weight_value;
        }  elseif ($weight_prefix == '=') {
            $product_query->row['weight'] = $weight_value;
            $option_weight = 0;
        }

        if(!empty($options_combinations['length']) && (float)$options_combinations['length'] > 0)
            $product_query->row['length'] = $options_combinations['length'];
        if(!empty($options_combinations['width']) && (float)$options_combinations['width'] > 0)
            $product_query->row['width'] = $options_combinations['width'];
        if(!empty($options_combinations['height']) && (float)$options_combinations['height'] > 0)
            $product_query->row['height'] = $options_combinations['height'];

        if ($options_combinations['subtract'] && (!$options_combinations['quantity'] || ($options_combinations['quantity'] < $cart['quantity']))) {
            $stock = false;
        }

        if (isset($options_combinations['model']) and $options_combinations['model']){
            $product_query->row['model'] = $options_combinations['model'];
        }

        // Points
        $points_prefix  = $this->opc->getCurrentPriceValue($prices_array, 'option_points', 'points_prefix');
        $points_value   = $this->opc->getCurrentPriceValue($prices_array, 'option_points', 'points');

        if( $points_prefix == '+' ) {
            $option_points += $points_value;
        } elseif( $points_prefix == '-' ) {
            $option_points -= $points_value;
        } elseif( $points_prefix == '=' ) {
            $option_points = $points_value;
        }

        // Reward points
        $reward_points_prefix = $this->opc->getCurrentPriceValue($prices_array, 'option_reward_points', 'points_prefix');
        $reward_points_value = $this->opc->getCurrentPriceValue($prices_array, 'option_reward_points', 'points');
        
        if ($reward_points_prefix == '+') {
            $reward += $reward_points_value;
        } elseif ($reward_points_prefix == '-') {
            $reward -= $reward_points_value;
        } elseif ($reward_points_prefix == '=') {
            $reward = $reward_points_value;
        }
    } else {
        if ($product_discount_query->num_rows) {
            $price = $product_discount_query->row['price'];
        }

        if ($product_special_query->num_rows) {
            $price = $product_special_query->row['price'];
        }
    }
}
