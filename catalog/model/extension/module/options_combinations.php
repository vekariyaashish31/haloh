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

    public function getCombinedOptions($product_id)
    {
        $this->load->model('tool/image');
        $this->load->model('catalog/product');

        $product_info = $this->model_catalog_product->getProduct($product_id);
        $product_real_discounts = $this->model_catalog_product->getProductDiscounts($product_id);
        $result = [];

        $query = $this->optionscombinations->getProductOptionsCombinations($product_id, false);
        foreach ($query->rows as $row) {

            $images = $options = [];

            $images_decoded = json_decode($row['images'], 1);
            if (is_array($images_decoded)) {
                $count = 0;
                foreach ($images_decoded as $image) {
                    if($image) {
                        $image_popup_width = $this->optionscombinations->getDimension('image_popup_width');
                        $image_popup_height = $this->optionscombinations->getDimension('image_popup_height');

                        $image_thumb_width_name = 'image_thumb_width';
                        $image_thumb_height_name = 'image_thumb_height';

                        $image_thumb_width = $this->optionscombinations->getDimension($image_thumb_width_name);
                        $image_thumb_height = $this->optionscombinations->getDimension($image_thumb_height_name);

                        $image_additional_width_name = 'image_additional_width';
                        $image_additional_height_name = 'image_additional_height';

                        $image_additional_width = $this->optionscombinations->getDimension($image_additional_width_name);
                        $image_additional_height = $this->optionscombinations->getDimension($image_additional_height_name);

                        if ($this->request->server['HTTPS']) {
                            $image_orig_full = $this->config->get('config_ssl') . 'image/' . $image;
                        } else {
                            $image_orig_full =  $this->config->get('config_url') . 'image/' . $image;
                        }

                        $images[] = [
                            'image_popup' => $this->model_tool_image->resize(
                                $image,
                                $image_popup_width,
                                $image_popup_height
                            ),
                            'image_thumb' => $this->model_tool_image->resize(
                                $image,
                                $image_thumb_width,
                                $image_thumb_height
                            ),
                            'image_additional' => $this->model_tool_image->resize(
                                $image,
                                $image_additional_width,
                                $image_additional_height
                            ),
                            'image' => $image,
                            'image_full' => $image_orig_full,
                        ];
                    }
                    $count += 1;
                }
            }

            $price_data = $this->config->get('config_opt_comb_price') ? $this->findCustomerPrice($row) : ['price_prefix' => '=', 'price' => $product_info['price']];
            $points_data = $this->findCustomerPoints($row);
            $reward_points_data = $this->findCustomerRewardPoints($row);
            $discounts_data = $this->findCustomerDiscounts($row, $product_real_discounts);
            $special_data = $this->findCustomerSpecial($row);

            // ignore product discounts if there are option combination discounts
            if ($discounts_data) {
                $product_info['price'] = $product_info['price_no_discount'];
            }

            // discounts
            $row['option_discount'] = $this->calculateDiscounts($discounts_data, $product_info);

            // price without tax
            $raw_price = !empty($price_data) ? $this->calculateValueByPrefix($price_data['price'], $price_data['price_prefix'], $product_info['price']) : $product_info['price'];

            $raw_price_formatted = $this->currency->format($raw_price, $this->session->data['currency']);

            if(!$this->config->get("config_tax")) {
                $final_price = $raw_price;
            }
            else {
                $final_price = $this->tax->calculate($raw_price, $product_info['tax_class_id'], true);
            }

            $final_price_formatted = $this->currency->format($final_price, $this->session->data['currency']);


            if (!$special_data && $product_info['special'] /*&& ($price_data['price_prefix'] != '=' and $price_data['price'] == 0)*/) {

                $special_price = $product_info['special'];

                if(in_array($price_data['price_prefix'], array("+","-")) && $price_data['price'] > 0) {
                    $special_price = abs(eval('return '.$product_info['special'].$price_data['price_prefix'].$price_data['price'].';'));
                }

                $raw_special = [
                    'customer_group_id' => '',
                    'price' => $special_price,
                    'priority' => 0,
                    'date_start' => '',
                    'date_end' => '',
                ];
            } else {
                $raw_special = $special_data;
            }

            $final_special = $this->calculateSpecial($raw_special, $product_info);

            // price including tax
            $row['price'] = $final_price;
            $row['price_formatted'] = $final_price_formatted;

            // price without tax
            $row['raw_price'] = $raw_price;
            $row['raw_price_formatted'] = $raw_price_formatted;
            unset($row['price_prefix']);

            // price without tax also
            if ($this->config->get('config_tax')){
                $row['tax'] = $raw_price;
                $row['tax_formatted'] = $raw_price_formatted;
            } else {
                $row['tax'] = '';
                $row['tax_formatted'] = '';
            }

            // special option including tax
            $row['option_special'] = $final_special;

            // special option without tax
            $row['option_special_raw'] = $raw_special;
            if ($row['option_special_raw']){
                $row['option_special_raw']['price_formatted'] = $this->currency->format($row['option_special_raw']['price'], $this->session->data['currency']);

                // special without tax also
                if ($this->config->get('config_tax')) {
                    $row['tax'] = $row['option_special_raw']['price'];
                    $row['tax_formatted'] = $row['option_special_raw']['price_formatted'];
                } else {
                    $row['tax'] = '';
                    $row['tax_formatted'] = '';
                }
            }

            if (!$this->config->get('config_opt_comb_sku')){
                unset($row['sku']);
            }

            if (!$this->config->get('config_opt_comb_upc')){
                unset($row['upc']);
            }

            if (!$this->config->get('config_opt_comb_model')){
                $row['model'] = $product_info['model'];
            }

            if (!$this->config->get('config_opt_comb_dimensions')){
                unset($row['length']);
                unset($row['width']);
                unset($row['height']);
            }

            if ($this->config->get('config_opt_comb_weight')){
                $row['weight'] = $this->calculateValueByPrefix($row['weight'], $row['weight_prefix'], $product_info['weight']);
                $row['weight_formatted'] = $this->weight->format($row['weight'], $product_info['weight_class_id']);
            }
            else{
                unset($row['weight']);
                unset($row['weight_formatted']);
            }

            unset($row['weight_prefix']);

            // $row['points'] = $this->calculateValueByPrefix($row['points'], $row['points_prefix'], $product_info['points']);
            $row['points'] = !empty($points_data) ? $this->calculateValueByPrefix($points_data['points'], $points_data['points_prefix'], $product_info['points']) : false;
            $row['reward'] = !empty($reward_points_data) ? $this->calculateValueByPrefix($reward_points_data['points'], $reward_points_data['points_prefix'], $product_info['reward']) : false;
            unset($row['points_prefix']);

            $row['images'] = $images;
            $row['option_type'] = in_array(
                $row['option_type'],
                ['select', 'checkbox', 'radio']
            ) ? '' : $row['option_type'];

            $row['options'] = $this->optionscombinations->getCombinationOptionsMapped($row['id']);

            if ($this->config->get('config_opt_comb_seo_url')){
                $seo_query = $this->optionscombinations->buildSEOQuery($product_id, $row['options']);
                $sql = "
                SELECT 
                    * 
                FROM 
                    `" . DB_PREFIX . "seo_url` 
                WHERE 
                    query = '" . $seo_query . "' 
                    AND store_id = '" . (int) $this->config->get('config_store_id') . "' 
                    AND language_id = '" . (int) $this->config->get('config_language_id') . "'
                ";
                $seo_row = $this->db->query($sql)->row;
                if (!empty($seo_row))
                    $row['seo_keyword'] = $seo_row['keyword'];
                else
                    $row['seo_keyword'] = '';
            }

            unset($row['prices']);

            $result[] = $row;
        }
        return $result;
    }

    /**
     * Finds the lower price of given Combined Options
     * @param $combinedOptions
     * @return float
     */
    public function findLowerPrice($combinedOptions){

        $price = INF;
        foreach ($combinedOptions as $combinedOption) {
            if ($combinedOption['price'] < $price){
                $price = (float)$combinedOption['price'];
            }
        }
        return $price;
    }

    /**
     * Finds the lower price including specials of given Combined Options
     * @param $combinedOptions
     * @return mixed
     */
    public function findLowerOfAllPrices($combinedOptions){
        $prices = [];
        $price = INF;
        foreach ($combinedOptions as $combinedOption) {
            if(!empty($combinedOption['price']))
                if ($combinedOption['price']){
                    $prices[] = (float)$combinedOption['price'];
                }
            if(!empty($combinedOption['option_special']))
                if ($combinedOption['option_special']){
                    $prices[] = (float)$combinedOption['option_special']['price'];
                }
        }
        foreach ($prices as $combinationPrice) {
            $price = $combinationPrice < $price ? $combinationPrice : $price;
        }
        return is_infinite($price) ? null : $price;
    }

    /**
     * Finds the combined option including specials with a lower price
     * @param $combinedOptions
     * @return mixed
     */
    public function findOptionWithLowerPrice($combinedOptions){
        $options = [];
        $price = INF;
        $now = new DateTime();
        $option_combination = null;
        foreach ($combinedOptions as $combinedOption) {
            if ($combinedOption['price']){
                $options[] = array(
                    'type' => null,
                    'price' => $combinedOption['raw_price']
                );
            }
            if ($combinedOption['option_special_raw'] and $combinedOption['option_special_raw']['price']){
                $startDt = new DateTime($combinedOption['option_special_raw']['date_start']);
                if (!$combinedOption['option_special_raw']['date_start'])
                    $startDt->sub(DateInterval::createFromDateString('+1 day'));
                $endDate = new DateTime($combinedOption['option_special_raw']['date_end']);
                if (!$combinedOption['option_special_raw']['date_end'])
                    $endDate->add(DateInterval::createFromDateString('+1 day'));
                if ($startDt <= $now && $endDate >= $now) {
                    $combinedOption['option_special_raw']['type'] = 'special';
                    $options[] = $combinedOption['option_special_raw'];
                }
            }
        }

        foreach ($options as $combination) {
            if ((float)$combination['price'] < $price){
                $price = (float)$combination['price'];
                $option_combination = $combination;
            }
        }
        return $option_combination;
    }

    public function findCustomerPrice($row){
        $client_customer_group = $this->customer->getGroupId() ? $this->customer->getGroupId() : $this->config->get('config_customer_group_id');
        $prices = json_decode($row['prices'], 1);

        $price_data = NULL;
        $price_data_for_all = NULL;

        if(empty($prices))
            return NULL;

        foreach ($prices['option_price'] as $key => $group_price) {
            if (isset($group_price['customer_group_id']) && $group_price['customer_group_id'] == $client_customer_group){
                $price_data = $group_price;
                break;
            } elseif (!array_key_exists('customer_group_id', $group_price)){
                $price_data_for_all = $group_price;
            }
        }
        if ($price_data)
            return $price_data;
        else
            return $price_data_for_all;
    }

    private function findCustomerPoints($row){
        $client_customer_group = $this->customer->getGroupId() ? $this->customer->getGroupId() : $this->config->get('config_customer_group_id');
        $prices = json_decode($row['prices'], 1);

        $points_data = NULL;
        if(!empty($prices['option_points']) && is_array($prices['option_points']))
            foreach ($prices['option_points'] as $key => $group_points) {
                if (!isset($group_points['customer_group_id']) || $group_points['customer_group_id'] == $client_customer_group){
                    $points_data = $group_points;
                    break;
                }
            }

        return $points_data;
    }

    private function findCustomerRewardPoints($row){
        $client_customer_group = $this->customer->getGroupId() ? $this->customer->getGroupId() : $this->config->get('config_customer_group_id');
        $prices = json_decode($row['prices'], 1);

        $points_data = NULL;
        if(!empty($prices['option_reward_points']) && is_array($prices['option_reward_points']))
            foreach ($prices['option_reward_points'] as $key => $group_points) {
                if (!isset($group_points['customer_group_id']) || $group_points['customer_group_id'] == $client_customer_group){
                    $points_data = $group_points;
                    break;
                }
            }

        return $points_data;
    }

    public function findCustomerDiscounts($row, $main_discounts = array()){
        return $this->optionscombinations->findCustomerDiscounts($row, false, $main_discounts);
    }

    public function findCustomerSpecial($row){
        return $this->optionscombinations->findCustomerSpecial($row);
    }

    private function calculateSpecial($option_special, $product_info)
    {
        $result = [];
        if($option_special) {
            $result['customer_group_id'] = $option_special['customer_group_id'];
            $result['priority'] = $option_special['priority'];
            $result['price'] = $this->tax->calculate($option_special['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
            $result['raw_price'] = $option_special['price'];
            $result['date_start'] = $option_special['date_start'];
            $result['date_end'] = $option_special['date_end'];
            $result['price_formatted'] = $this->currency->format($this->tax->calculate($option_special['price'], $product_info['tax_class_id'], $this->config->get('config_tax')),
                $this->session->data['currency']
            );
        } else {
            $result = null;
        }
        return $result;
    }

    private function calculateDiscounts($option_discounts, $product_info)
    {
        $result = [];
        foreach ($option_discounts as $option_discount) {
            $result[] = [
                'price_formatted' => $this->currency->format(
                    $this->tax->calculate(
                        $option_discount['price'],
                        $product_info['tax_class_id'],
                        $this->config->get('config_tax')
                    ),
                    $this->session->data['currency']
                ),
                'price' => $this->tax->calculate(
                    $option_discount['price'],
                    $product_info['tax_class_id'],
                    $this->config->get('config_tax')
                ),
                'raw_price' => $option_discount['price'],
                'quantity' => (int)$option_discount['quantity'],
            ];
        }

        return $result;
    }

    private function calculateValueByPrefix($value, $prefix, $main_value)
    {
        switch($prefix){
            case '+':
                $result = $main_value + $value;
                break;
            case '-':
                $result = $main_value - $value;
                break;
            default:
                $result = $value;
        }

        return $result;
    }

    /**
     * Returns options structure of a product from options combinations
     * @param $product_id integer The product id for obtaining options
     * @param $option_id integer If defined, obtain options values only of a given option id
     * @return array
     */
    public function getProductOptions($product_id, $option_id=null, $bullet_card_image_width=null, $bullet_card_image_height=null) {
        return $this->optionscombinations->getProductOptionsFormatted($product_id, $option_id, $bullet_card_image_width, $bullet_card_image_height);
    }

    public function getProductNoSelectableOptions($product_id){
        $sql = "
        SELECT 
            poc.id as combination_id, o.option_id, o.type, od.name, pocov.value
        FROM
            `" . DB_PREFIX . "product_options_combinations` poc
        INNER JOIN
            `" . DB_PREFIX . "product_options_combinations_option_values` pocov
        ON
            (poc.id = pocov.combination_id)
        INNER JOIN
            `" . DB_PREFIX . "option` o
        ON
            (pocov.option_id = o.option_id)
        LEFT JOIN
            `" . DB_PREFIX . "option_description` od
        ON 
            (o.option_id = od.option_id)
        WHERE
            poc.product_id = '" . (int) $product_id . "'
            AND pocov.option_value_id IS NULL
            AND od.language_id = '" . (int) $this->config->get('config_language_id') . "'
        ORDER BY
            poc.id
        ";

        return $this->db->query($sql)->rows;
    }

    public function getCombinationNoSelectableOptionsIds($combination_id){
        $sql = "
        SELECT option_id
        FROM `" . DB_PREFIX . "product_options_combinations_option_values`
        WHERE combination_id = '" . (int) $combination_id . "' AND option_value_id IS NULL
        ";

        return array_map(function ($row){return $row['option_id'];}, $this->db->query($sql)->rows);
    }

    /**
     * Reduce an options combination quantity field
     * @param $options_combination_id int
     * @param $quantity int
     * @return mixed
     */
    public function reduceCombinationQuantity($options_combination_id, $quantity){
        return $this->optionscombinations->reduceCombinationQuantity($options_combination_id, $quantity);
    }

    /**
     * Increase an options combination quantity field
     * @param $options_combination_id int
     * @param $quantity int
     * @return mixed
     */
    public function increaseCombinationQuantity($options_combination_id, $quantity){
        return $this->optionscombinations->increaseCombinationQuantity($options_combination_id, $quantity);
    }

    public function getProductMatchingOptionsCombination($product_id, $options){
        return $this->optionscombinations->getProductMatchingOptionsCombination($product_id, $options);
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

    public function getCombinationLowestPrices($product_id, $product_tax_class_id){
        $data = [
            'special' => '',
            'price' => '',
            'tax' => ''
        ];
        $combinations = $this->getCombinedOptions($product_id);
        if (count($combinations) > 0){
            $lowerPriceOptionCombination = $this->findOptionWithLowerPrice($combinations);
            if(!$lowerPriceOptionCombination)
                return $data;
            if ($lowerPriceOptionCombination['type'] == 'special'){
                $data['special_raw'] = $lowerPriceOptionCombination['price'];
                $data['special'] = $this->currency->format($this->tax->calculate($lowerPriceOptionCombination['price'], $product_tax_class_id, $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $data['price_raw'] = $lowerPriceOptionCombination['price'];
                $data['price'] = $this->currency->format($this->tax->calculate($lowerPriceOptionCombination['price'], $product_tax_class_id, $this->config->get('config_tax')), $this->session->data['currency']);
            }
            if ($this->config->get('config_tax')) {
                $data['tax'] = $this->currency->format($lowerPriceOptionCombination['price'], $this->session->data['currency']);
            } else {
                $data['tax'] = '';
            }
        }
        return $data;
    }

    /**
     * Gets an options combination by id
     * @param $combination_id
     * @return mixed
     */
    public function getCombinationById($combination_id){
        return $this->optionscombinations->getCombinationById($combination_id);
    }

    public function build_grouped_card_product($product_raw, $combination_as_product, $extra_params){

        $optionscombinations_lib = new \optionscombinations\OptionsCombinationsLib($this->registry);

        $extra_options = json_decode($combination_as_product['extra_option_json'], true);
        $product_combined_options = [];
        $product_options = [];

        if (!empty($extra_options)) {
            $option_id = array_keys($extra_options)[0];
            $sql = "
            SELECT * FROM `" . DB_PREFIX . "option` o
            LEFT JOIN `" . DB_PREFIX . "option_description` od
            ON (o.option_id = od.option_id)
            WHERE o.option_id = '" . (int)$option_id . "'
            AND od.language_id = '" . (int)$this->config->get('config_language_id') . "' 
            ";

            $option = $this->db->query($sql)->row;

            if (!empty($option)) {

                $option_formatted = [
                    'option_id' => $option['option_id'],
                    'product_option_value' => [],
                    'name' => $option['name'],
                    'type' => $option['type'],
                    'sort_order' => $option['sort_order'],
                    'language_id' => $option['language_id']
                ];

                $option_values_formatted = ArrayHelper::index(
                    $extra_options[$option_id],
                    'option_value_id'
                );

                $sql = "
                SELECT * FROM `" . DB_PREFIX . "option_value` ov
                LEFT JOIN `" . DB_PREFIX . "option_value_description` ovd
                ON (ov.option_value_id = ovd.option_value_id)
                WHERE ov.option_value_id IN ('" . join("','", array_keys($option_values_formatted)) . "')
                AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "'
                ";

                $option_values = $this->db->query($sql)->rows;

                if (!empty($option_values)) {
                    foreach ($option_values as $option_value) {
                        $opt_image_raw = $option_values_formatted[$option_value['option_value_id']]['comb_image'];

                        $opt_image_width = $this->config->get('config_opt_comb_options_like_images_width') ? $this->config->get('config_opt_comb_options_like_images_width') : 100;
                        $opt_image_height = $this->config->get('config_opt_comb_options_like_images_height') ? $this->config->get('config_opt_comb_options_like_images_height') : 100;

                        $bullet_width = $this->config->get('config_opt_comb_bullet_width') ? $this->config->get('config_opt_comb_bullet_width') : 100;
                        $bullet_height = $this->config->get('config_opt_comb_bullet_height') ? $this->config->get('config_opt_comb_bullet_height') : 100;

                        $bullet_card_image_width = $optionscombinations_lib->getDimension('image_product_width');
                        $bullet_card_image_height = $optionscombinations_lib->getDimension('image_product_height');

                        if ($opt_image_raw) {
                            $opt_image = $this->model_tool_image->resize($opt_image_raw, $opt_image_width, $opt_image_height);
                            $bullet_image = $this->model_tool_image->resize($opt_image_raw, $bullet_width, $bullet_height);
                            $bullet_card_image = $this->model_tool_image->resize($opt_image_raw, $bullet_card_image_width, $bullet_card_image_height);
                        } else {
                            $opt_image = null;
                            $bullet_image = null;
                            $bullet_card_image = $this->model_tool_image->resize('placeholder.png', $bullet_card_image_width, $bullet_card_image_height);
                        }

                        if (!empty($option_value['image'])) {
                            $product_option_image = $this->model_tool_image->resize($option_value['image'], $opt_image_width, $opt_image_height);
                            $product_bullet_image = $this->model_tool_image->resize($option_value['image'], $bullet_width, $bullet_height);
                        } else {
                            $product_option_image = null;
                            $product_bullet_image = null;
                        }

                        $option_formatted['product_option_value'][] = [
                            'option_value_id' => $option_value['option_value_id'],
                            'option_id' => $option_value['option_id'],
                            'image' => $product_option_image,
                            'opt_image' => $opt_image,
                            'bullet_image' => $product_bullet_image,
                            'bullet_opt_image' => $bullet_image,
                            'bullet_card_image' => $bullet_card_image,
                            'sort_order' => $option_value['sort_order'],
                            'language_id' => $option_value['language_id'],
                            'name' => $option_value['name']
                        ];
                    }
                    $product_combined_options[] = $option_formatted;
                    $product_options[] = $option_formatted;

                }
            }
        }

        $grouped_option_value_ids = json_decode($combination_as_product['option_values_ids_json'], true);

        $sql = "
        SELECT * FROM `" . DB_PREFIX . "option_value_description`
        WHERE option_value_id IN ('" . join("','", $grouped_option_value_ids) . "')
        AND language_id = '" . (int)$this->config->get('config_language_id') . "'
        ";

        $grouped_option_values = $this->db->query($sql)->rows;
        $extra_name = '(' . join(', ', array_map(function ($row) {
                return $row['name'];
            }, $grouped_option_values)) . ')';

        $price = json_decode($combination_as_product['prices_json'], true)[$this->config->get('config_customer_group_id')];
        $price = $this->currency->format($this->tax->calculate($price, $product_raw['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

        $grouped_specials = json_decode($combination_as_product['specials_json'], true);

        $special = false;
        if (isset($grouped_specials[$this->config->get('config_customer_group_id')]) || isset($grouped_specials['all'])) {
            $special = PHP_INT_MAX;
            $specials = isset($grouped_specials[$this->config->get('config_customer_group_id')]) ? $grouped_specials[$this->config->get('config_customer_group_id')] : $grouped_specials['all'];
            foreach ($specials as $grouped_special) {
                if (
                    ($grouped_special['date_start'] <= date('Y-m-d') || empty($grouped_special['date_start'])) &&
                    ($grouped_special['date_end'] >= date('Y-m-d') || empty($grouped_special['date_end']))
                ) {
                    $special = min($grouped_special['price'], $special);
                }
            }
            if ($special != PHP_INT_MAX)
                $special = $this->currency->format($this->tax->calculate($special, $product_raw['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            else
                $special = false;
        }

        $href = $this->url->link(
            'product/product',
            'product_id=' . $product_raw['product_id'] . '&ovs=' . join(',', $grouped_option_value_ids) . $extra_params
        );

        //building option-combinations values
        $opc_option_values_mapped = ArrayHelper::map($grouped_option_values, 'option_id', 'option_value_id');
        $opc_option_values_params = http_build_query($opc_option_values_mapped);
        $opc_option_values_params = str_replace('&', '|', $opc_option_values_params);

        $result = [
            'product_id' => $product_raw['product_id'] . '-' . $opc_option_values_params,
            'product_combined_options' => $product_combined_options,
            'product_options' => $this->config->get('config_opt_comb_bullet') ? $product_options : [],
            'bullet_image_origin' => $this->config->get('config_opt_comb_bullet') ? $this->optionscombinations->getProductBulletImageOrigin($product_raw['product_id']) : '',
            'name' => $product_raw['name'] . ' ' . $extra_name,
            'description' => utf8_substr(trim(strip_tags(html_entity_decode($product_raw['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get((version_compare(VERSION, '3', '>=') ? 'theme_' : '') . $this->config->get('config_theme') . '_product_description_length')) . '..',
            'price' => $price,
            'special' => $special,
            'tax' => $product_raw['tax'],
            'minimum' => $product_raw['minimum'] > 0 ? $product_raw['minimum'] : 1,
            'rating' => $product_raw['rating'],
            'href' => $href
        ];

        $images = json_decode($combination_as_product['images'], true);
        if (!empty($images)){
            $this->load->model('tool/image');
            $image_width = $this->config->get((version_compare(VERSION, '3', '>=') ? 'theme_' : '') . $this->config->get('config_theme') . '_image_product_width');
            $image_height = $this->config->get((version_compare(VERSION, '3', '>=') ? 'theme_' : '') . $this->config->get('config_theme') . '_image_product_height');
            $result['thumb'] = $this->model_tool_image->resize($images[0], $image_width, $image_height);
        }

        if (defined('JOURNAL3_ACTIVE')){
            $this->add_journal3_additional_images($result, $images);
        } else if (strpos($this->config->get('config_template'), 'journal2') === 0){
            $this->add_journal2_additional_images($result, $images);
        }

        return array_merge($product_raw, $result);
    }

    private function add_journal3_additional_images(&$product, $images){
        if (!empty($images)){
            $this->load->model('journal3/image');
            $main_image2x = $this->model_journal3_image->resize($images[0], $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
            $product['thumb2x'] = $main_image2x;

            if (isset($images[1])){
                $second_image = $this->model_journal3_image->resize($images[1], $this->journal3->settings->get('image_dimensions_product.width'), $this->journal3->settings->get('image_dimensions_product.height'), $this->journal3->settings->get('image_dimensions_product.resize'));
                $second_image2x = $this->model_journal3_image->resize($images[1], $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
            } else{
                $second_image = false;
                $second_image2x = false;
            }

            $product['second_thumb'] = $second_image;
            $product['second_thumb2x'] = $second_image2x;
        }
    }

    private function add_journal2_additional_images(&$product, $images){
        if (!empty($images)){
            $main_image = $this->model_tool_image->resize($images[0], $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
            $product['thumb'] = $main_image;

            if (count($images) > 1){
                $image2 = $this->model_tool_image->resize($images[1], $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
                $product['thumb2'] = $image2;
            } else{
                $product['thumb2'] = false;
            }
        }
    }

}