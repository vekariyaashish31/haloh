<?php

use optionscombinations\ArrayHelper;
use optionscombinations\OptionsCombinationsLib;


class ModelExtensionModuleOptionsCombinations extends Model
{
    public function __construct($registry) {
        parent::__construct($registry);
        $this->optionscombinations = new OptionsCombinationsLib($this->registry);
        if (!$this->model_tool_image){
            $this->load->model('tool/image');
        }
    }

    public function validate_permiss() {
        if (!$this->user->hasPermission('modify', $this->real_extension_type.'/'.$this->extension_name)) {
            if(!empty($this->request->post['no_exit']))
            {
                $array_return = array(
                    'error' => true,
                    'message' => $this->language->get('error_permission')
                );
                echo json_encode($array_return); die;
            }
            else
                throw new Exception($this->language->get('error_permission'));

            return false;
        }
        return true;
    }
    public function exception($message) {
        throw new Exception($message);
    }

    public function removeDeletedOptionsCombinations($product_id, $option_combination_ids){
        $db_prefix = DB_PREFIX;

        $query = "DELETE FROM `{$db_prefix}product_options_combinations` WHERE product_id={$product_id}";

        if (!empty($option_combination_ids))
            $query .= ' AND id NOT IN (' . join(',', $option_combination_ids) . ')';

        $this->db->query($query);
    }

    public function getProcessedOptionCombinationInput($input_data){
        $prices = [
            'option_discount' => isset($input_data['option_discount']) ? $input_data['option_discount'] : [],
            'option_special' => isset($input_data['option_special']) ? $input_data['option_special'] : [],
            'option_price' => isset($input_data['option_price']) ? $input_data['option_price'] : [],
            'option_points' => isset($input_data['option_points']) ? $input_data['option_points'] : [],
            'option_reward_points' => isset($input_data['option_reward_points']) ? $input_data['option_reward_points'] : [],
        ];

        // make sure prices has correct values
        if ($prices['option_discount']){
            foreach ($prices['option_discount'] as $key => $discount) {
                $prices['option_discount'][$key]['price'] = $discount['price'] ? $discount['price'] : 0;
                $prices['option_discount'][$key]['quantity'] = $discount['quantity'] ? $discount['quantity'] : 0;
                $prices['option_discount'][$key]['priority'] = $discount['priority'] ? $discount['priority'] : 0;
//                        $prices['option_discount'][$key]['date_start'] = $discount['date_start'] ? $discount['date_start'] : date("Y-m-d");
//                        $prices['option_discount'][$key]['date_end'] = $discount['date_end'] ? $discount['date_end'] : date("Y-m-d");
                $prices['option_discount'][$key]['date_start'] = $discount['date_start'] ? $discount['date_start'] : "";
                $prices['option_discount'][$key]['date_end'] = $discount['date_end'] ? $discount['date_end'] : "";

            }
        }

        if ($prices['option_special']){
            foreach ($prices['option_special'] as $key => $special) {
                $prices['option_special'][$key]['price'] = $special['price'] ? $special['price'] : 0;
                $prices['option_special'][$key]['priority'] = $special['priority'] ? $special['priority'] : 0;
//                        $prices['option_special'][$key]['date_start'] = $special['date_start'] ? $special['date_start'] : date("Y-m-d");
//                        $prices['option_special'][$key]['date_end'] = $special['date_end'] ? $special['date_end'] : date("Y-m-d");
                $prices['option_special'][$key]['date_start'] = $special['date_start'] ? $special['date_start'] : "";
                $prices['option_special'][$key]['date_end'] = $special['date_end'] ? $special['date_end'] : "";

            }
        }

        if ($prices['option_price']){
            foreach ($prices['option_price'] as $key => $price) {
                $prices['option_price'][$key]['price'] = $price['price'] ? $price['price'] : 0;
            }
        }

        if ($prices['option_points']){
            foreach ($prices['option_points'] as $key => $points) {
                $prices['option_points'][$key]['points'] = $points['points'] ? $points['points'] : 0;
            }
        }

        if ($prices['option_reward_points']){
            foreach ($prices['option_reward_points'] as $key => $reward_points) {
                $prices['option_reward_points'][$key]['points'] = $reward_points['points'] ? $reward_points['points'] : 0;
            }
        }

        $input_data['prices'] = json_encode($prices);

        if (!empty( $input_data['images'])) {
            $input_data['images'] = json_encode(array_values($input_data['images']));
        }

        return $input_data;
    }

    public function insert_option_combination($data){
        $db_prefix = DB_PREFIX;
        $query = "INSERT INTO `{$db_prefix}product_options_combinations`
                        (
                            `product_id`,
                            `images`,
                            `sku`,
                            `upc`,
                            `prices`,
                            `quantity`,
                            `model`,
                            `subtract`,
                            `weight_prefix`,
                            `weight`,
                            `option_type`,
                            `length`,
                            `width`,
                            `height`,
                            `extra_text`
                        )
                        VALUES (
                        ".(int)$data['product_id'].",
                        '".(!empty($data['images']) ? $this->Utf8_ansi($this->db->escape($data['images'])) : '')."',
                        '".(isset($data['sku']) ? $this->db->escape($data['sku']) : '')."',
                        '".(isset($data['upc']) ? $this->db->escape($data['upc']) : '')."',
                        '".(!empty($data['prices']) ? $data['prices'] : json_encode(array()))."',
                        ".(isset($data['quantity']) ? (int)$data['quantity'] : 0).",
                        '".(isset($data['model']) ? $this->db->escape($data['model']) : '')."',
                        ".(isset($data['subtract']) ? (int)$data['subtract'] : 0).",
                        '".(isset($data['weight_prefix']) ? $data['weight_prefix'] : '')."',
                        ".(isset($data['weight']) ? (float)$data['weight'] : 0).",
                        '".(isset($data['option_type']) ? $this->db->escape($data['option_type']) : '')."',
                        ".(isset($data['length']) ? (float)$data['length'] : 0).",
                        ".(isset($data['width']) ? (float)$data['width'] : 0).",
                        ".(isset($data['height']) ? (float)$data['height'] : 0).",
                        '".(isset($data['extra_text']) ? $this->db->escape($data['extra_text']) : '')."'
                        )";
        $this->db->query($query);
        $option_combination_id = $this->db->getLastId();

        return $option_combination_id;
    }

    public function update_option_combination($option_combination_id, $data){
        $query = "UPDATE `" . DB_PREFIX . "product_options_combinations` SET
                            `product_id` = ".(int)$data['product_id'].",
                            `images` = '".(!empty($data['images']) ? $this->Utf8_ansi($this->db->escape($data['images'])) : '')."',
                            `sku` = '".(isset($data['sku']) ? $this->db->escape($data['sku']) : '')."',
                            `upc` = '".(isset($data['upc']) ? $this->db->escape($data['upc']) : '')."',
                            `prices` = '".$data['prices']."',
                            `quantity` = ".(isset($data['quantity']) ? (int)$data['quantity'] : 0).",
                            `model` = '".(isset($data['model']) ? $this->db->escape($data['model']) : '')."',
                            `subtract` = ".(isset($data['subtract']) ? (int)$data['subtract'] : 0).",
                            `weight_prefix` = '".(isset($data['weight_prefix']) ? $data['weight_prefix'] : '')."',
                            `weight` = ".(isset($data['weight']) ? (float)$data['weight'] : 0).",
                            `option_type` = '".(isset($data['option_type']) ? $this->db->escape($data['option_type']) : '')."',
                            `length` = ".(isset($data['length']) ? (float)$data['length'] : 0).",
                            `width` = ".(isset($data['width']) ? (float)$data['width'] : 0).",
                            `height` = ".(isset($data['height']) ? (float)$data['height'] : 0).",
                            `extra_text` = '".(isset($data['extra_text']) ? $this->db->escape($data['extra_text']) : '')."'
                        WHERE id = ".(int)$option_combination_id;
        $this->db->query($query);
    }

    private function combination_contains_selectable_options($combination_input){
        foreach ($combination_input['options'] as $option_id => $option_value){
            if (is_array($option_value) || is_numeric($option_value))
                return true;
        }
        return  false;
    }

    public function addCombination($product_id, $data)
    {
        $data['options_combinations'] = $this->removeNotUniqVariants($data['options_combinations']);

        $option_combination_ids = array_filter(array_map(function ($option_combination){
            return isset($option_combination['id']) ? $option_combination['id'] : null;
        }, $data['options_combinations']));

        $this->removeDeletedOptionsCombinations($product_id, $option_combination_ids);

        foreach ($data['options_combinations'] as $input_option_combination) {

            if (!$this->combination_contains_selectable_options($input_option_combination))
                continue;

            $option_combination_id = isset($input_option_combination['id']) ? $input_option_combination['id'] : null;

            $input_option_combination = $this->getProcessedOptionCombinationInput($input_option_combination);
            $input_option_combination['product_id'] = $product_id;

            if (!$option_combination_id){
                $option_combination_id = $this->insert_option_combination($input_option_combination);
            }
            else{
                $this->update_option_combination($option_combination_id, $input_option_combination);
                $this->removeOptionValues($option_combination_id);
            }

            if(!empty($input_option_combination['options']) && is_array($input_option_combination['options'])) {
                foreach ($input_option_combination['options'] as $option_id => $option_value) {
                    // if option_value is an array the option has several values selected, that's the case of checkbox option type
                    if (is_array($option_value))
                        foreach ($option_value as $check_value)
                            $this->addOptionValue($option_combination_id, $product_id, $check_value, $option_id);
                    else if (is_numeric($option_value))
                        $this->addOptionValue($option_combination_id, $product_id, $option_value, $option_id);
                    else
                        $this->addOptionValue($option_combination_id, $product_id, 'NULL', $option_id, "'$option_value'");
                }
            }

            if ($this->config->get('config_opt_comb_seo_url')){
                $this->saveSEOUrl($product_id, $input_option_combination);
            }

        }

        if(!empty($data['options_combinations']))
            $this->optionscombinations->updateProductQuantity($product_id);

        if ($this->config->get('config_opt_comb_combinations_as_products')){
            $this->transform_product_combinations_into_products(
                $product_id
            );
        }
    }

    private function saveSEOUrl($product_id, $input_option_combination){

        $query = $this->optionscombinations->buildSEOQuery($product_id, $input_option_combination['options']);

        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = '" . $query . "'");

        if (empty($input_option_combination['seo_url']))
            return;

        foreach ($input_option_combination['seo_url'] as $store_id => $languages){
            foreach ($languages as $language_id => $keyword){
                if (!empty($keyword)) {
                    $sql = "
                    INSERT INTO " . DB_PREFIX . "seo_url
                    SET store_id = '" . (int)$store_id . "',
                    language_id = '" . (int)$language_id . "',
                    query = '" . $query . "',
                    keyword = '" . $this->db->escape($keyword) . "'
                    ";
                    $this->db->query($sql);
                }
            }
        }
    }


    public function rebuild_combination_as_product_index(){
        set_time_limit(14400);

        $product_sql = "SELECT product_id FROM `" . DB_PREFIX . "product`";

        foreach ($this->db->query($product_sql)->rows as $row){
            $this->transform_product_combinations_into_products($row['product_id']);
        }
    }

    public function transform_product_combinations_into_products($product_id){

        // removing previous values
        $this->db->query("
        DELETE FROM `" . DB_PREFIX ."product_combination_as_product` WHERE product_id = '" . (int) $product_id . "'
        ");

        $this->load->model('catalog/product');

        $product_data = $this->model_catalog_product->getProduct($product_id);

        $combinations = $this->getCombinedOptions($product_id);

        if (empty($combinations))
            return;

        $option_ids_to_group_by = $this->config->get('config_opt_comb_options_to_group_combinations');

        if (!empty($option_ids_to_group_by)){

            $combination_group = [];

            foreach ($combinations as $combination){

                $grouping_options = [];
                $grouping_values = [];

                $options = array_filter($combination['options'], function ($option_value){
                    return is_array($option_value) || is_numeric($option_value);
                });

                foreach ($options as $option_id => $option_value){
                    if (in_array($option_id, $option_ids_to_group_by)){
                        $grouping_options[$option_id] = true;
                        $option_value =  is_array($option_value) ? $option_value : [$option_value];
                        $grouping_values = array_merge($grouping_values, $option_value);
                        unset($options[$option_id]);
                    }
                }

                // Checking if the combination has the same options we want to group by
                if (count($grouping_options) == count($option_ids_to_group_by)){
                    $unsorted_grouping_values = $grouping_values;
                    sort($grouping_values);
                    $key = json_encode($grouping_values);

                    if (!isset($combination_group[$key]))
                        $combination_group[$key] = [
                            'extra_options' => [],
                            'prices' => [],
                            'specials' => [],
                            // In option_value_ids we are going to store the original order of the option values.
                            // These will be used to get the first option value image if the user wants to show that
                            // image as the grouped card image
                            'option_value_ids' => $unsorted_grouping_values,
                            'combination_images' => []
                        ];

                    // If the user doesnt select the first option value image to be shown then this first
                    // combination image will be shown by default
                    if (empty($combination_group[$key]['combination_images']) && !empty($combination['images'])){
                        $combination_group[$key]['combination_images'] = array_map(function ($item){
                            return $item['image'];
                        }, $combination['images']);
                    }

                    if (!empty($options)){
                        $extra_option_id = array_keys($options)[0];
                        $extra_option_key = $extra_option_id . '-';
                        $extra_option_value = array_shift($options);
                        $extra_option_value = !is_array($extra_option_value) ? [$extra_option_value] : $extra_option_value;

                        // setting combination image to every value
                        foreach ($extra_option_value as $index => $option_value){
                            $extra_option_value[$index] = [
                                'option_value_id' => $option_value,
                                'comb_image' => !empty($combination['images']) ? $combination['images'][0]['image'] : ''
                            ];
                        }

                        $combination_group[$key]['extra_options'] = ArrayHelper::merge(
                            $combination_group[$key]['extra_options'],
                            [$extra_option_key => ['option_id' => $extra_option_id, 'option_values' => $extra_option_value]]
                        );
                    }

                    // computing min price by customer group with the prices of all combinations
                    foreach ($combination['option_price'] as $price_data){
                        $customer_group_id = $price_data['customer_group_id'];
                        $product_price = (float) $product_data['price'];
                        $op = $price_data['price_prefix'];
                        $comb_price = (float) $price_data['price'];
                        $price = eval("return \$product_price {$op} {$comb_price};");

                        if (
                            !isset($combination_group[$key]['prices'][$customer_group_id]) ||
                            $combination_group[$key]['prices'][$customer_group_id] > $price
                        )
                            $combination_group[$key]['prices'][$customer_group_id] = $price;
                    }

                    // grouping specials by customer groups. These specials will be used later in the catalog to select
                    // the one who corresponds to the user group and the date at the time of accessing the catalog
                    if (isset($combination['option_special']))
                        foreach ($combination['option_special'] as $special_data){
                            $customer_group_id = !empty($special_data['customer_group_id']) ? $special_data['customer_group_id'] : 'all';

                            if (!isset($combination_group[$key]['specials'][$customer_group_id]))
                                $combination_group[$key]['specials'][$customer_group_id] = [];

                            $combination_group[$key]['specials'][$customer_group_id][] = $special_data;
                        }
                } else{
                    $this->insert_combination_as_product($product_id, $product_data, $combination);
                }
            }

            if (!empty($combination_group)){

                foreach ($combination_group as $option_value_ids_json => $content){
                    $extra_option_data = array_shift($content['extra_options']);
                    $extra_option_id = $extra_option_data['option_id'];
                    $extra_option_value_ids = $extra_option_data['option_values'];

                    $images = [];
                    if (!empty($content['combination_images']))
                        $images = $content['combination_images'];
                    $images = json_encode($images);

                    $sql = "
                    INSERT INTO `" . DB_PREFIX . "product_combination_as_product`
                    (product_id, option_values_ids_json, extra_option_json, prices_json, specials_json, images)
                    VALUES (
                    '{$product_id}',
                    '" . $option_value_ids_json . "',
                    '" . json_encode([$extra_option_id => $extra_option_value_ids]) . "',
                    '" . json_encode($content['prices']) . "',
                    '" . json_encode($content['specials']) . "',
                    '{$images}'
                    )
                    ";
                    $this->db->query($sql);
                }
            }
        } else{
            foreach ($combinations as $combination){
                $this->insert_combination_as_product($product_id, $product_data, $combination);
            }
        }
    }

    private function insert_combination_as_product($product_id, $product_data, $combination){

        $option_values_ids = [];

        $options = array_filter($combination['options'], function ($option_value){
            return is_array($option_value) || is_numeric($option_value);
        });

        foreach ($options as $option_value){
            if (is_array($option_value))
                foreach ($option_value as $option_value_id)
                    $option_values_ids[] = $option_value_id;
            else
                $option_values_ids[] = $option_value;
        }

        if (empty($option_values_ids))
            return false;

        $prices = [];

        foreach ($combination['option_price'] as $price_data){
            $customer_group_id = $price_data['customer_group_id'];
            $product_price = (float) $product_data['price'];
            $op = $price_data['price_prefix'];
            $comb_price = (float) $price_data['price'];
            $price = eval("return \$product_price {$op} {$comb_price};");
            if (!isset($prices[$customer_group_id]) || $prices[$customer_group_id] > $price)
                $prices[$customer_group_id] = $price;
        }

        $specials = [];

        foreach ($combination['option_special'] as $special_data){
            $customer_group_id = !empty($special_data['customer_group_id']) ? $special_data['customer_group_id'] : 'all';
            if (!isset($specials[$customer_group_id]))
                $specials[$customer_group_id] = [];
            $specials[$customer_group_id][] = $special_data;
        }

        $images = [];
        if (!empty($combination['images'])){
            $images = array_map(function ($item){
                return $item['image'];
            }, $combination['images']);
        }
        $images = json_encode($images);

        $sql = "
        INSERT INTO `" .DB_PREFIX . "product_combination_as_product`
        (product_id, option_values_ids_json, prices_json, specials_json, images)
        VALUES (
        '{$product_id}',
        '" . json_encode($option_values_ids) . "',
        '" . json_encode($prices) . "',
        '" . json_encode($specials) . "',
        '{$images}'
        )";

        $this->db->query($sql);
    }

    public function Utf8_ansi($valor='') {
        $utf8_ansi2 = array(
            "\u00c0" =>"À",
            "\u00c1" =>"Á",
            "\u00c2" =>"Â",
            "\u00c3" =>"Ã",
            "\u00c4" =>"Ä",
            "\u00c5" =>"Å",
            "\u00c6" =>"Æ",
            "\u00c7" =>"Ç",
            "\u00c8" =>"È",
            "\u00c9" =>"É",
            "\u00ca" =>"Ê",
            "\u00cb" =>"Ë",
            "\u00cc" =>"Ì",
            "\u00cd" =>"Í",
            "\u00ce" =>"Î",
            "\u00cf" =>"Ï",
            "\u00d1" =>"Ñ",
            "\u00d2" =>"Ò",
            "\u00d3" =>"Ó",
            "\u00d4" =>"Ô",
            "\u00d5" =>"Õ",
            "\u00d6" =>"Ö",
            "\u00d8" =>"Ø",
            "\u0151" =>"ő",
            "\u00d9" =>"Ù",
            "\u00da" =>"Ú",
            "\u00db" =>"Û",
            "\u00dc" =>"Ü",
            "\u00dd" =>"Ý",
            "\u00df" =>"ß",
            "\u00e0" =>"à",
            "\u00e1" =>"á",
            "\u00e2" =>"â",
            "\u00e3" =>"ã",
            "\u00e4" =>"ä",
            "\u00e5" =>"å",
            "\u00e6" =>"æ",
            "\u00e7" =>"ç",
            "\u00e8" =>"è",
            "\u00e9" =>"é",
            "\u00ea" =>"ê",
            "\u00eb" =>"ë",
            "\u00ec" =>"ì",
            "\u00ed" =>"í",
            "\u00ee" =>"î",
            "\u00ef" =>"ï",
            "\u00f0" =>"ð",
            "\u00f1" =>"ñ",
            "\u00f2" =>"ò",
            "\u00f3" =>"ó",
            "\u00f4" =>"ô",
            "\u00f5" =>"õ",
            "\u00f6" =>"ö",
            "\u00f8" =>"ø",
            "\u00f9" =>"ù",
            "\u00fa" =>"ú",
            "\u00fb" =>"û",
            "\u00fc" =>"ü",
            "\u00fd" =>"ý",
            "\u00ff" =>"ÿ");
        return strtr($valor, $utf8_ansi2);
    }

    private function validateDate($date, $format = 'Y-m-d') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }

    public function validateForm($instance){
        $error = [];

        // var_dump($this->request->post['options_combinations']);die;
        $options_combinations = isset($this->request->post['options_combinations']) ? $this->request->post['options_combinations'] : [];

        $error_rows = array();

        foreach ($options_combinations as $index => $combination) {
            $error_in_row = false;
            // validate option prices
            if (isset($combination['option_price'])){
                foreach ($combination['option_price'] as $indexComb => $option_price) {
                    // customer_group_id
                    if (isset($option_price["customer_group_id"]) && !ctype_digit($option_price["customer_group_id"])){
                        $error['options_combinations'][$index]['option_price'][$indexComb]["customer_group_id"] = 'customer_group_id error';
                        $error_in_row = true;
                    }
                    // price_prefix
                    if (!isset($option_price["price_prefix"]) || !($option_price["price_prefix"] == '=' || $option_price["price_prefix"] == '+' || $option_price["price_prefix"] == '-')){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_price][$indexComb][price_prefix]";
                        $error['options_combinations'][$index]['option_price'][$indexComb]["price_prefix"] = 'price_prefix error';
                        $error_in_row = true;
                    }
                    // price
                    if (isset($option_price["price"]) && $option_price["price"] && !is_numeric($option_price["price"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_price][$indexComb][price]";
                        $error['options_combinations'][$index]['option_price'][$indexComb]["price"] = 'price error';
                        $error_in_row = true;
                    }
                }
            }

            // validate option points
            if (isset($combination['option_points'])){
                foreach ($combination['option_points'] as $indexComb => $option_points) {
                    // customer_group_id
                    if (isset($option_points["customer_group_id"]) && !ctype_digit($option_points["customer_group_id"])){
                        $error['options_combinations'][$index]['option_points'][$indexComb]["customer_group_id"] = 'customer_group_id error';
                        $error_in_row = true;
                    }

                    // points_prefix
                    if (!isset($option_points["points_prefix"]) || !($option_points["points_prefix"] == '+' || $option_points["points_prefix"] == '-' || $option_points["points_prefix"] == '=')){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_points][$indexComb][points_prefix]";
                        $error['options_combinations'][$index]['option_points'][$indexComb]["points_prefix"] = 'points_prefix error';
                        $error_in_row = true;
                    }

                    // points
                    if (isset($option_points["points"]) && $option_points["points"] && !is_numeric($option_points["points"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_points][$indexComb][points]";
                        $error['options_combinations'][$index]['option_points'][$indexComb]["points"] = 'points error';
                        $error_in_row = true;
                    }
                }
            }
            
            // validate option reward points
            if (isset($combination['option_reward_points'])){
                foreach ($combination['option_reward_points'] as $indexComb => $option_reward_points) {
                    // customer_group_id
                    if (isset($option_reward_points["customer_group_id"]) && !ctype_digit($option_reward_points["customer_group_id"])){
                        $error['options_combinations'][$index]['option_reward_points'][$indexComb]["customer_group_id"] = 'customer_group_id error';
                        $error_in_row = true;
                    }
                    // points_prefix
                    if (!isset($option_reward_points["points_prefix"]) || !($option_reward_points["points_prefix"] == '+' || $option_reward_points["points_prefix"] == '-' || $option_reward_points["points_prefix"] == '=')){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_reward_points][$indexComb][points_prefix]";
                        $error['options_combinations'][$index]['option_reward_points'][$indexComb]["points_prefix"] = 'points_prefix error';
                        $error_in_row = true;
                    }
                    // points
                    if (isset($option_reward_points["points"]) && $option_reward_points["points"] && !is_numeric($option_reward_points["points"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_reward_points][$indexComb][points]";
                        $error['options_combinations'][$index]['option_reward_points'][$indexComb]["points"] = 'reward points error';
                        $error_in_row = true;
                    }
                }
            }

            // validate option discount
            if (isset($combination['option_discount'])){
                foreach ($combination['option_discount'] as $indexComb => $option_discount) {
                    // customer_group_id
                    if (isset($option_discount["customer_group_id"]) &&  $option_discount["customer_group_id"] && !ctype_digit($option_discount["customer_group_id"])){
                        $error['options_combinations'][$index]['option_discount'][$indexComb]["customer_group_id"] = 'customer_group_id error';
                        $error_in_row = true;
                    }
                    // quantity
                    if (isset($option_discount["quantity"]) && $option_discount["quantity"] && !ctype_digit($option_discount["quantity"])){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_discount][$indexComb][quantity]";
                        $error['options_combinations'][$index]['option_reward_points'][$indexComb]["quantity"] = 'quantity error';
                        $error_in_row = true;
                    }
                    // priority
                    if (isset($option_discount["priority"]) && $option_discount["priority"] && !ctype_digit($option_discount["priority"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_discount][$indexComb][priority]";
                        $error['options_combinations'][$index]['option_discount'][$indexComb]["priority"] = 'priority error';
                        $error_in_row = true;
                    }
                    // priority
                    if (isset($option_discount["price"]) && $option_discount["price"] && !is_numeric($option_discount["price"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_discount][$indexComb][price]";
                        $error['options_combinations'][$index]['option_discount'][$indexComb]["price"] = 'price error';
                        $error_in_row = true;
                    }
                    // date_start
                    if (!isset($option_discount["date_start"]) || ($option_discount["date_start"] && !$this->validateDate($option_discount["date_start"])) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_discount][$indexComb][date_start]";
                        $error['options_combinations'][$index]['option_discount'][$indexComb]["date_start"] = 'date_start error';
                        $error_in_row = true;
                    }
                    // date_end
                    if (!isset($option_discount["date_end"]) || ($option_discount["date_end"] && !$this->validateDate($option_discount["date_end"])) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_discount][$indexComb][date_end]";
                        $error['options_combinations'][$index]['option_discount'][$indexComb]["date_end"] = 'date_end error';
                        $error_in_row = true;
                    }
                }
            }
            // validate option special
            if (isset($combination['option_special'])){
                foreach ($combination['option_special'] as $indexComb => $option_special) {
                    // customer_group_id
                    if (isset($option_special["customer_group_id"]) &&  $option_special["customer_group_id"] && !ctype_digit($option_special["customer_group_id"])){
                        $error['options_combinations'][$index]['option_special'][$indexComb]["customer_group_id"] = 'customer_group_id error';
                        $error_in_row = true;
                    }
                    // priority
                    if (isset($option_special["priority"]) && $option_special["priority"] && !ctype_digit($option_special["priority"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_special][$indexComb][priority]";
                        $error['options_combinations'][$index]['option_special'][$indexComb]["priority"] = 'priority error';
                        $error_in_row = true;
                    }
                    // priority
                    if (isset($option_special["price"]) && $option_special["price"] && !is_numeric($option_special["price"]) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_special][$indexComb][price]";
                        $error['options_combinations'][$index]['option_special'][$indexComb]["price"] = 'price error';
                        $error_in_row = true;
                    }
                    // date_start
                    if (!isset($option_special["date_start"]) || ($option_special["date_start"] && !$this->validateDate($option_special["date_start"])) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_special][$indexComb][date_start]";
                        $error['options_combinations'][$index]['option_special'][$indexComb]["date_start"] = 'date_start error';
                        $error_in_row = true;
                    }
                    // date_end
                    if (!isset($option_special["date_end"]) || ($option_special["date_end"] && !$this->validateDate($option_special["date_end"])) ){
                        $error['options_combinations_js_errors'][] = "options_combinations[$index][option_special][$indexComb][date_end]";
                        $error['options_combinations'][$index]['option_special'][$indexComb]["date_end"] = 'date_end error';
                        $error_in_row = true;
                    }
                }
            }
            if ($error_in_row){
                $error_rows[] = $index + 1;
            }
        }

        $this->language->load('extension/module/options_combinations_errors');

        if ($error_rows){
            $error['warning'] = sprintf($this->language->get('error_options_combinations_validation'), implode(', ', $error_rows));
        }

        return $error;
    }

    private function removeNotUniqVariants($combinations)
    {
        $variants = [];
        $result = [];
        if (isset($combinations)){
            foreach ($combinations as $item) {
                if (isset($item['options'])) {
                    if(in_array($item['options'], $variants)) {
                        continue;
                    }
                    $variants[] = $item['options'];
                    $result[] = $item;
                } else {
                    $result[] = $item;
                }
            }
        }

        return $result;
    }

    public function removeCombination($id)
    {
        $sql = "DELETE
                    FROM `".DB_PREFIX."product_options_combinations`
                    WHERE id = ".(int)$id;

        $this->db->query($sql);
    }

    public function removeAllCombinationsByProduct( $product_id)
    {
        $productOptionsCombinationsTable = DB_PREFIX . 'product_options_combinations';
        $productOptionsCombinationsBulletsTable = DB_PREFIX . 'product_options_combinations_bullets';

        $sql = "DELETE
                    FROM `{$productOptionsCombinationsTable}`
                    WHERE `product_id` = {$product_id}";

        $this->db->query($sql);

        $sql = "DELETE
                    FROM `{$productOptionsCombinationsBulletsTable}`
                    WHERE `product_id` = {$product_id}";

        $this->db->query($sql);
    }

    public function getProcessedImages($raw_images){
        $images = [];
        if (is_array($raw_images)) {
            foreach ($raw_images as $image) {
                $images[] = [
                    'image_thumb' => $this->model_tool_image->resize($image, 100, 100),
                    'image' => $image,
                ];
            }
        }

        return $images;
    }

    public function getCombinedOptions($product_id, $raw_images=false)
    {
        $result = [];
        $sql = "SELECT *
                    FROM `".DB_PREFIX."product_options_combinations`
                    WHERE product_id = ".(int)$product_id . " order by id";

        $query = $this->db->query($sql);
        foreach ($query->rows as $row) {
            $images = $options = [];

            $images_decoded = json_decode($row['images'], 1);
            if ($raw_images){
                $images = $images_decoded;
            } else {
                $images = $this->getProcessedImages($images_decoded);
            }

            $row['images'] = $images;
            $row['option_type'] = in_array($row['option_type'],['select', 'checkbox', 'radio']) ? '' : $row['option_type'];

            $row['options'] = $this->optionscombinations->getCombinationOptionsMapped($row['id']);

            $prices = json_decode($row['prices'], 1);
            $row['option_discount'] = isset($prices['option_discount']) ? $prices['option_discount'] : [];
            $row['option_special'] = isset($prices['option_special']) ? $prices['option_special'] : [];
            $row['option_price'] = isset($prices['option_price']) ? $prices['option_price'] : [];
            $row['option_points'] = isset($prices['option_points']) ? $prices['option_points'] : [];
            $row['option_reward_points'] = isset($prices['option_reward_points']) ? $prices['option_reward_points'] : [];

            // fetching seo url keywords
            if ($this->config->get('config_opt_comb_seo_url')){
                $seo_query = $this->optionscombinations->buildSEOQuery($product_id, $row['options']);
                $sql = "SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE query = '" . $seo_query . "'";
                $seo_url_rows = $this->db->query($sql)->rows;
                $row['seo_url'] = [];
                foreach ($seo_url_rows as $seo_url_row){
                    if (!isset($row['seo_url'][$seo_url_row['store_id']]))
                        $row['seo_url'][$seo_url_row['store_id']] = [];
                    $row['seo_url'][$seo_url_row['store_id']][$seo_url_row['language_id']] = $seo_url_row['keyword'];
                }
            }

            $result[] = $row;
        }


        return $result;
    }

    /**
     * Returns a normalized array of options Ex: ["1",["2","3"],"4"] will return ["1","2","3","4"]
     *
     * @param $options
     * @return array
     */
    private function normalizeOptionsArray($options){
        $normalized_options = [];
        if(is_array($options))
            foreach ($options as $option_value_id) {
                if (is_array($option_value_id)){
                    foreach ($option_value_id as $item) {
                        $normalized_options[] = $item;
                    }
                }else{
                    $normalized_options[] = $option_value_id;
                }

            }
        return $normalized_options;
    }

    public function getDisplayOptionsCombinations( $product_id, $product_specials, $raw_images = false, $extra_params = '')
    {
        $result = [];

        $options_combinations = $this->getCombinedOptions( $product_id, $raw_images);

        if (!empty($options_combinations)) {

            $product_table = DB_PREFIX . 'product';

            if (empty( $product_specials)) {
                $sql = "SELECT price
                            FROM `{$product_table}`
                            WHERE product_id = ".(int)$product_id;

                $query = $this->db->query($sql);
                $base_price = $query->row['price'];
            } else {
                $base_price = $product_specials[0]['price'];
            }

            foreach ($options_combinations as $option_combination) {

                if (empty($option_combination['options']))
                    continue;

                $price_options = !empty($option_combination['option_price'][0]) ? $option_combination['option_price'][0] : 0;
                $price_prefix = !empty($price_options['price_prefix']) ? $price_options['price_prefix'] : '=';
                $option_price = !empty($price_options['price']) ? $price_options['price'] : 0;

                $price = $base_price;

                switch ($price_prefix) {
                    case '+':
                        $price += $option_price;
                        break;

                    case '-':
                        $price -= $option_price;
                        break;

                    case '=':
                        $price = $option_price;
                        break;
                }

                $price = $this->currency->format($price, $this->config->get('config_currency'));

                if (!empty( $option_combination['images'])) {
                    $image = $option_combination['images'][0]['image'];
                } else {
                    $image = '';
                }

                $token_param = version_compare(VERSION, '3.0.0.0', '<') ? 'token' : 'user_token';
                $token = $this->session->data[$token_param];

                $combination = [
                    'model' => $option_combination['model'],
                    'quantity' => $option_combination['quantity'],
                    'base_price' => $base_price,
                    'price_prefix' => $price_prefix,
                    'option_price' => $option_price,
                    'price' => $price,
                    'image' => $image,
                    'image_thumb_list' => $this->model_tool_image->resize($image, 40, 40),
                    'url' => "index.php?route=catalog/product/edit&{$token_param}={$token}&product_id={$product_id}{$extra_params}#tab-option",
                    'options' => []
                ];


                foreach ($option_combination['options'] as $option_id => $option_value) {
                    $sql = "
                    SELECT * FROM `" . DB_PREFIX . "option_description` 
                    WHERE option_id = '" . (int) $option_id . "' 
                    AND language_id = '" . (int) $this->config->get('config_language_id') . "'
                    ";

                    $option = $this->db->query($sql)->row;

                    if (empty($option))
                        continue;

                    $option_value_str = '';

                    $option_value_query = "
                    SELECT * FROM `" . DB_PREFIX . "option_value_description`
                    WHERE option_value_id = '%s'
                    AND language_id = '" . (int) $this->config->get('config_language_id') . "'
                    ";

                    if (is_array($option_value)){
                        foreach ($option_value as $option_value_id){
                            $sql = sprintf($option_value_query, (int) $option_value_id);
                            $option_value_row = $this->db->query($sql)->row;

                            if (empty($option_value_row))
                                continue;

                            $option_value_str .= ", {$option_value_row['name']}";
                        }
                        $option_value_str = substr($option_value_str, 2);
                    }
                    elseif (is_numeric($option_value)){
                        $sql = sprintf($option_value_query, (int) $option_value);
                        $option_value_row = $this->db->query($sql)->row;

                        if (empty($option_value_row))
                            continue;

                        $option_value_str = $option_value_row['name'];
                    }
                    else{
                        $option_value_str = $option_value;
                    }

                    $combination['options'][] = (!empty($option_value_str)) ?
                        "{$option['name']} : {$option_value_str}" :
                        "{$option['name']}";
                }

                $result[] = $combination;
            }
        }
        return $result;
    }

    /**
     * Save product specific bullet options to database
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function addProductBulletOptions($product_id, $data){
        $option_id = 0;
        $image_origin = 0;

        if (in_array('options_combinations_bullet', array_keys($data))){
            $option_id = array_key_exists('option_id', $data['options_combinations_bullet']) ? $data['options_combinations_bullet']['option_id'] : '';
            $image_origin = array_key_exists('image_origin', $data['options_combinations_bullet']) ? $data['options_combinations_bullet']['image_origin'] : '';
        }

        $sql = "DELETE
                FROM `".DB_PREFIX."product_options_combinations_bullets`
                WHERE product_id = ".(int)$product_id;

        $this->db->query($sql);

        $sql = "INSERT INTO `".DB_PREFIX."product_options_combinations_bullets`
                (`product_id`, `option_id`, `image_origin`)
                VALUES ('".(int)$product_id."','".(int)$option_id."','".(int)$image_origin."')";

        return $this->db->query($sql);
    }

    /**
     * Get the bullet option value for a given product
     * @param $product_id
     * @return mixed
     */
    public function getProductBulletOptionId($product_id){
        return $this->optionscombinations->getProductBulletOptionId($product_id);
    }

    /**
     * Get the bullet image option value for a given product
     * @param $product_id
     * @return mixed
     */
    public function getProductBulletImageOrigin($product_id){
        return $this->optionscombinations->getProductBulletImageOrigin($product_id);
    }

    /**
     * Returns a product bullet options
     * @param $product_id
     * @return array
     */
    public function getProductBulletOptions($product_id){
        $options = array(
            'option_id' => 0,
            'image_origin' => 0,
        );
        $query = $this->optionscombinations->getProductBulletOptions($product_id);
        if ($query && $query->row){
            $options['option_id'] = $query->row['option_id'];
            $options['image_origin'] = $query->row['image_origin'];
        }
        return $options;
    }

    public function getProductOptionsCombinations( $product_id) {
        return $this->optionscombinations->getProductOptionsCombinations($product_id, false);
    }

    public function getProductOptionsCombinationsRawFormat($product_id) {
        return $this->optionscombinations->getProductOptionsCombinationsRawFormat($product_id);
    }

    /**
     * Returns options structure of a product from options combinations
     * @param  $product_id integer The product id for obtaining options
     * @param  $option_id integer If defined, obtain options values only of a given option id
     * @return array
     */
    public function getProductOptions($product_id, $option_id=null, $bullet_card_image_width=null, $bullet_card_image_height=null) {
        return $this->optionscombinations->getProductOptionsFormatted($product_id, $option_id, $bullet_card_image_width, $bullet_card_image_height);
    }

    public function addOptionValue($combination_id, $product_id, $option_value_id, $option_id, $value = 'NULL'){
        $db_prefix = DB_PREFIX;
        $this->db->query("INSERT INTO `{$db_prefix}product_options_combinations_option_values` (combination_id, product_id, option_value_id, option_id, value) VALUES ({$combination_id}, {$product_id}, {$option_value_id}, {$option_id}, {$value});");
    }

    public function removeOptionValues($combinationId){
        $db_prefix = DB_PREFIX;
        $this->db->query("DELETE FROM `{$db_prefix}product_options_combinations_option_values` WHERE combination_id={$combinationId}");
    }

    public function format_view($view_path) {
        if(version_compare(VERSION, '2.3', '>='))
            return $view_path;
        else
            return str_replace('extension/', '', $view_path).'.tpl';
    }

    public function format_controller($controller_path) {
        if(version_compare(VERSION, '2.3', '>='))
            return $controller_path;
        else
            return str_replace('extension/', '', $controller_path);
    }
}
?>
