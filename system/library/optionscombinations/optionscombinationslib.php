<?php

namespace optionscombinations;

use DateTime;

class OptionsCombinationsLib
{

    private $registry;
    private $customer_group_id;

    public function __construct($registry) {
        $this->registry = $registry;

        $customer_group_id = $this->customer && $this->customer->getGroupId() ? $this->customer->getGroupId() : $this->config->get('config_customer_group_id');
        if(is_array($this->session->data) && array_key_exists('customer', $this->session->data) && !empty($this->session->data['customer']) && array_key_exists('customer_group_id', $this->session->data['customer']) && !empty($this->session->data['customer']['customer_group_id']))
            $customer_group_id = $this->session->data['customer']['customer_group_id'];

        $this->customer_group_id = $customer_group_id;
    }

    public function __get($key) {
        return $this->registry->get($key);
    }

    public function __set($key, $value) {
        $this->registry->set($key, $value);
    }

    /**
     * Gets a product options combinations
     * @param $product_id
     * @param bool $ignore_stock If false only gets combinations with available stock (default:true)
     * @return mixed
     */
    public function getProductOptionsCombinations($product_id, $ignore_stock=true){

        $sql = "SELECT *
                FROM `".DB_PREFIX."product_options_combinations`
                WHERE product_id = ".(int)$product_id."
                    AND (option_type = '' OR option_type IS NULL)";

        if (!$ignore_stock && !$this->config->get('config_stock_checkout')){
            $sql .= " AND (subtract = 0 OR (subtract = 1 AND quantity > 0))";
        }

        $sql .= " order by id";
        $query = $this->db->query($sql);

        foreach ($query->rows as $key => $prod) {
            if(!$this->config->get('config_opt_comb_extra'))
                $query->rows[$key]['extra_text'] = '';
        }

        return $query;
    }

    /**
     * Gets a product options combinations in "raw" format for check indexes by jsonencoded options
     * @param $product_id
     * @return mixed
     */
    public function getProductOptionsCombinationsRawFormat($product_id){

        $sql = "SELECT id, options
                FROM `".DB_PREFIX."product_options_combinations`
                WHERE product_id = ".(int)$product_id."
                    AND (option_type = '' OR option_type IS NULL)";

        $query = $this->db->query($sql);

        $final_options = array();
        foreach ($query->rows as $key => $opt_comb) {
            $final_options[$opt_comb['options']] = $opt_comb['id'];
        }

        return $final_options;
    }

    /**
     * Gets an options combination by id
     * @param $combination_id
     * @return mixed
     */
    public function getCombinationById($combination_id){
        $sql = "SELECT *
                FROM `".DB_PREFIX."product_options_combinations`
                WHERE id = ".(int)$combination_id;

        $query = $this->db->query($sql);

        return $query;
    }

    public function getProductMatchingOptionsCombination($product_id, $selected_combination){
        $option_value_ids = [];

        foreach ($selected_combination as $option_id => $value){

            if (empty($value) || (!is_numeric($value) && !is_array($value)))
                continue;

            if (is_array($value)){
                foreach ($value as $value_id){
                    $option_value_ids[] = $value_id;
                }
            }
            else
                $option_value_ids[] = $value;
        }

        sort($option_value_ids);
        $option_value_ids_string = join('-', $option_value_ids);

        $query = "
            SELECT
                poc.*,
                GROUP_CONCAT(
                                pocov.option_value_id
                                ORDER BY pocov.option_value_id ASC
                                SEPARATOR '-'
                            ) AS option_value_ids_string
            FROM
                `" . DB_PREFIX . "product_options_combinations` poc
            INNER JOIN
                `" . DB_PREFIX . "product_options_combinations_option_values` pocov
            ON
                (poc.id = pocov.combination_id)
            WHERE
                poc.product_id = '" . (int) $product_id . "'
            GROUP BY
                poc.id
            HAVING
                option_value_ids_string = '" . $option_value_ids_string . "'
        ";

        $option_combination = $this->db->query($query)->row;

        return !empty($option_combination) ? $option_combination : null;
    }

    private function getPriceValuesByCustomerId($price_data, $option_name, $customer_id){
        $price_values_for_all = null;
        if(empty($price_data)) {
            return null;
        }
        if(is_array($price_data) && array_key_exists($option_name, $price_data))
            foreach ($price_data[$option_name] as $item) {
                if (isset($item['customer_group_id']) && $item['customer_group_id'] == $customer_id){
                    return $item;
                } elseif (!isset($item['customer_group_id'])){
                    $price_values_for_all = $item;
                }
            }
        return $price_values_for_all;
    }

    public function getCurrentPriceValue($price_data, $option_name, $value_name){
        $values = $this->getPriceValuesByCustomerId($price_data, $option_name, $this->customer_group_id);
        return isset($values[$value_name]) ? $values[$value_name] : null;
    }

    public function getOptionsCombinationPrice($option_combination){
        $prices_data = isset($option_combination['prices']) ? json_decode($option_combination['prices'], true) : null;

        if ($prices_data){
            return $this->getCurrentPriceValue($prices_data, 'option_price', 'price');
        }
        return null;
    }

    public function findCustomerSpecial($row){
        $prices = json_decode($row['prices'], 1);

        if(empty($prices))
            return NULL;

        $special_data = NULL;
        if(!empty($prices['option_special']))
            $prices['option_special'] = $this->aasort($prices['option_special'], 'priority');

        foreach ($prices['option_special'] as $key => $group_spacial) {
            $special_data = $this->checkSpecialByDate($group_spacial, $this->customer_group_id);
            if(!empty($special_data)) break;
        }
        if (!$special_data){
            foreach ($prices['option_special'] as $key => $group_spacial) {
                $special_data = $this->checkSpecialByDate($group_spacial);
                if (!empty($special_data)) break;
            }
        }

        return $special_data;
    }

    public function checkSpecialByDate($special_data, $customer_group = '') {
        $today = new DateTime();

        $specialStart = !empty($special_data['date_start']) && $special_data['date_start'] != '0000-00-00' && DateTime::createFromFormat('Y-m-d', $special_data['date_start']) !== FALSE ? new DateTime($special_data['date_start']) : '';
        $specialEnd = !empty($special_data['date_end']) && $special_data['date_end'] != '0000-00-00' && DateTime::createFromFormat('Y-m-d', $special_data['date_end']) !== FALSE ? new DateTime($special_data['date_end']) : '';
        $no_limit = empty($specialEnd) || (empty($specialStart) && $specialEnd >= $today);

        $meet_customer_group = (!$customer_group && $special_data['customer_group_id'] == '') || (!empty($customer_group) && $customer_group == $special_data['customer_group_id']);

        if ($meet_customer_group && ($no_limit || ($today >= $specialStart && $today <= $specialEnd))){
            return $special_data;
        }
        return NULL;
    }

    public function findCustomerDiscounts($row, $quantity = false, $main_discounts = array()){
        $prices = json_decode($row['prices'], 1);

        if(empty($prices))
            return $main_discounts;

        $now = new DateTime();

        if($quantity && empty($prices['option_discount']) && empty($main_discounts)) {
            $this->load->model("catalog/product");
            $prices['option_discount'] = $this->model_catalog_product->getProductDiscounts($row['product_id']);
        }


        $discounts_data = [];
        foreach ($prices['option_discount'] as $key => $group_discounts) {

            $startDt = !empty($group_discounts['date_start']) ? new DateTime($group_discounts['date_start']) : new DateTime('0000-00-00');
            $endDate = !empty($group_discounts['date_end']) ? new DateTime($group_discounts['date_end']) : new DateTime('0000-00-00');

            if (
                (!$quantity || (!empty($quantity) && $quantity >= $group_discounts['quantity'])) &&
                ($group_discounts['customer_group_id'] == $this->customer_group_id || $group_discounts['customer_group_id'] == '') &&
                (
                    ($startDt->format('Y-m-d') <= $now->format('Y-m-d') && $endDate->format('Y-m-d') >= $now->format('Y-m-d'))
                    ||
                    ($startDt->format('Y-m-d') <= $now->format('Y-m-d') && (empty($group_discounts['date_end']) || $group_discounts['date_end'] == '0000-00-00'))
                )
            ){
                $discounts_data[] = $group_discounts;
            }
        }

        // sort by quantity
        $quantity = array_column($discounts_data, 'quantity');
        array_multisort($quantity, SORT_ASC, $discounts_data);
        return !empty($discounts_data) ? $discounts_data : $main_discounts;
    }

    public function getOptionsData($product_id, $options){

        $q = "SELECT * FROM `" . DB_PREFIX . "option` o LEFT JOIN `" . DB_PREFIX . "option_description` od ON (o.option_id = od.option_id) WHERE o.option_id IN (" . implode(',', array_keys($options)) . ") AND od.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY o.sort_order";
        $product_option_query = $this->db->query($q);

        foreach ($product_option_query->rows as $product_option) {
            $product_option_value_data = array();


            if (is_array($options[$product_option['option_id']])){
                $product_option_value_query_sql = "SELECT * FROM `" . DB_PREFIX . "option_value` ov LEFT JOIN `" . DB_PREFIX . "option_value_description` ovd ON (ov.option_value_id = ovd.option_value_id) WHERE ov.option_id = '" . (int)$product_option['option_id'] . "'AND ov.option_value_id IN (" . implode(',', $options[$product_option['option_id']]) . ") AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ov.sort_order";
            } else {
                $product_option_value_query_sql = "SELECT * FROM `" . DB_PREFIX . "option_value` ov LEFT JOIN `" . DB_PREFIX . "option_value_description` ovd ON (ov.option_value_id = ovd.option_value_id) WHERE ov.option_id = '" . (int)$product_option['option_id'] . "'AND ov.option_value_id = '" . (int)$options[$product_option['option_id']] . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ov.sort_order";
            }
            $product_option_value_query = $this->db->query($product_option_value_query_sql);

            foreach ($product_option_value_query->rows as $product_option_value) {
                $product_option_value_data[] = array(
                    'option_value_id' => $product_option_value['option_value_id'],
                    'option_id' => $product_option_value['option_id'],
                    'image' => $product_option_value['image'],
                    'sort_order' => $product_option_value['sort_order'],
                    'language_id' => $product_option_value['language_id'],
                    'name' => $product_option_value['name']
                );
            }

            $product_option_data[] = array(
                'option_id' => $product_option['option_id'],
                'product_option_value' => $product_option_value_data,
                'name' => $product_option['name'],
                'type' => $product_option['type'],
                'sort_order' => $product_option['sort_order'],
                'language_id' => $product_option['language_id']
            );

        }
        return $product_option_data;
    }

    public function getOptionCombinationImages($option, $option_combinations){
        $option_key = array_keys($option)[0];
        foreach ($option_combinations as $option_combination) {
            $option_combination_options = json_decode($option_combination['options'], true);
            if(is_array($option_combination_options)) {
                foreach ($option_combination_options as $key => $value) {
                    if ($key == $option_key) {
                        if (is_array($value)) {
                            if (in_array($option[$option_key], $value)) {
                                return json_decode($option_combination['images'], true);
                            }
                        } elseif ($option[$option_key] == $value) {
                            return json_decode($option_combination['images'], true);
                        }
                    }
                }
            }
        }
        return null;
    }

    /**
     * Get sum of all options combinations quantities of a product
     * @param $product_id
     * @param bool $ignore_subtract
     * @return int
     */
    public function getProductCombinationsQuantity($product_id, $ignore_subtract=false){
        $options_combinations = $this->getProductOptionsCombinations($product_id);
        $total_quantity = 0;
        foreach ($options_combinations->rows as $options_combination) {
            if (!$ignore_subtract && !$options_combination['subtract']){
                continue;
            }
            $total_quantity += $options_combination['quantity'];
        }
        return $total_quantity;
    }

    /**
     * Updates the opencart quantity field of a product based in options combinations quantity
     * @param $product_id
     */
    public function updateProductQuantity($product_id){
        $total_quantity = $this->getProductCombinationsQuantity($product_id, true);
        return $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = '" . (int)$total_quantity . "' WHERE product_id = '" . (int)$product_id . "'");
    }

    /**
     * Reduce an options combination quantity field
     * @param $options_combination_id int
     * @param $quantity int
     * @return mixed
     */
    public function reduceCombinationQuantity($options_combination_id, $quantity){
        $quantity_sql = "quantity - " . (int)$quantity;

        if ($this->config->get('config_opt_comb_keep_stock_at_zero'))
            $quantity_sql = "GREATEST(0, {$quantity_sql})";

        return $this->db->query("UPDATE " . DB_PREFIX . "product_options_combinations SET quantity = ({$quantity_sql}) WHERE id = '" . (int)$options_combination_id . "' AND subtract = '1'");
    }

    /**
     * Increase an options combination quantity field
     * @param $options_combination_id int
     * @param $quantity int
     * @return mixed
     */
    public function increaseCombinationQuantity($options_combination_id, $quantity){
        return $this->db->query("UPDATE `" . DB_PREFIX . "product_options_combinations` SET quantity = (quantity + " . (int)$quantity . ") WHERE id = '" . (int)$options_combination_id . "' AND subtract = '1'");
    }

    /**
     * Get the bullet option value for a given product
     * @param $product_id
     * @return mixed
     */
    public function getProductBulletOptionId($product_id){
        $option = 0;
        $option_query = $this->getProductBulletOptions($product_id);
        if ($option_query->row){
            $option = $option_query->row['option_id'];
        }
        if (!$option){
            $option = $this->config->get('config_opt_comb_bullet_option');
        }
        return $option;
    }

    /**
     * Get the bullet image option value for a given product
     * @param $product_id
     * @return mixed
     */
    public function getProductBulletImageOrigin($product_id){
        $option = 0;
        $option_query = $this->getProductBulletOptions($product_id);
        if ($option_query->row){
            $option = $option_query->row['image_origin'];
        }
        if (!$option){
            $option = $this->config->get('config_opt_comb_bullet_image');
        }
        return $option;
    }

    /**
     * Returns a product bullet options query
     * @param $product_id
     * @return mixed
     */
    public function getProductBulletOptions($product_id){
        if (!$product_id)
            return null;
        $sql = "SELECT * FROM `" . DB_PREFIX . "product_options_combinations_bullets` WHERE product_id = ".(int)$product_id;
        return $this->db->query($sql);
    }

    /**
     * Return array ordered by key value
     * @param $array
     * @return array
     */
    public function aasort ($array, $key) {
        $sorter=array();
        $ret=array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii]=array_key_exists($key, $va) ? $va[$key] : 0;
        }
        asort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii]=$array[$ii];
        }
        return $ret;
    }


    /**
     * Returns the option values of a combination give a combination id
     * @param $combination_id
     * @return mixed
     */
    public function getCombinationOptionValues($combination_id){
        $db_prefix = DB_PREFIX;
        return $this->db->query("
            SELECT ov.*, ovd.* FROM `{$db_prefix}product_options_combinations_option_values` pocov 
            INNER JOIN `{$db_prefix}option_value` ov ON (pocov.option_value_id=ov.option_value_id)
            LEFT JOIN `{$db_prefix}option_value_description` ovd ON (ov.option_value_id=ovd.option_value_id)
            WHERE pocov.combination_id={$this->db->escape($combination_id)} AND ovd.language_id='{$this->config->get('config_language_id')}'
            ORDER BY pocov.id ASC
            ")->rows;
    }

    /**
     * Returns all the option values a product has in all its combinations without repetition
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function getProductOptionValues($product_id, $option_id = null){
        $db_prefix = DB_PREFIX;
        $product_option_values_query = "
            SELECT ov.*, ovd.* FROM `{$db_prefix}product_options_combinations` poc 
            INNER JOIN `{$db_prefix}product_options_combinations_option_values` pocov ON (poc.id=pocov.combination_id)
            INNER JOIN `{$db_prefix}option_value` ov ON (pocov.option_value_id=ov.option_value_id)
            LEFT JOIN `{$db_prefix}option_value_description` ovd ON (pocov.option_value_id=ovd.option_value_id)
            WHERE poc.product_id = {$this->db->escape($product_id)} AND ovd.language_id='{$this->config->get('config_language_id')}'
         ";

        if ($option_id)
            $product_option_values_query .= " AND pocov.option_id = {$option_id}";

        $product_option_values_query .= ' GROUP BY ov.option_value_id';

        return $this->db->query($product_option_values_query)->rows;
    }

    /**
     * Returns all the options product has in all its combinations without repetition
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function getProductOptions($product_id){
        $db_prefix = DB_PREFIX;
        $product_options_query = "
            SELECT o.*, od.* FROM `{$db_prefix}product_options_combinations` poc 
            INNER JOIN `{$db_prefix}product_options_combinations_option_values` pocov ON (poc.id=pocov.combination_id)
            INNER JOIN `{$db_prefix}option` o ON (pocov.option_id=o.option_id)
            LEFT JOIN `{$db_prefix}option_description` od ON (o.option_id=od.option_id)
            WHERE poc.product_id = {$this->db->escape($product_id)} AND od.language_id='{$this->config->get('config_language_id')}'
            GROUP BY o.option_id
            ORDER BY pocov.id ASC
         ";

        return $this->db->query($product_options_query)->rows;
    }

    public function getCombinations($data = []){

        $db_prefix = DB_PREFIX;
        $query = "SELECT poc.* from `{$db_prefix}product_options_combinations` poc";

        // INNER JOIN BLOCK
        if (!empty($data['option_id']) || !empty($data['option_value_id']))
            $query .= " INNER JOIN {$db_prefix}product_options_combinations_option_values pocov ON (poc.id=pocov.combination_id)";

        $query .= ' WHERE (1=1)';
        // END INNER JOIN BLOCK

        // CONDITION BLOCK
        if (!empty($data['product_id']))
            if (is_array($data['product_id']))
                $query .= ' AND poc.product_id IN (' . $this->db->escape(join(',', $data['product_id'])) . ')';
            else
                $query .= " AND poc.product_id={$data['product_id']}";

        if (!empty($data['option_id']))
            if (is_array($data['option_id']))
                $query .= ' AND pocov.option_id IN (' . $this->db->escape(join(',', $data['option_id'])) . ')';
            else
                $query .= " AND pocov.option_id={$data['option_id']}";

        if (!empty($data['option_value_id'])){
            if (is_array($data['option_value_id']))
                $query .= ' AND pocov.option_value_id IN (' . $this->db->escape(join(',', $data['option_value_id'])) . ')';
            else
                $query .= " AND pocov.option_value_id={$data['option_value_id']}";
        }
        // END CONDITION BLOCK

        $query .= ' GROUP BY poc.id';

        return $this->db->query($query)->rows;
    }

    public function getCombinationOptionsMapped($combination_id){
        $option_values = $this->getCombinationOptionValues($combination_id);

        $db_prefix = DB_PREFIX;
        $combination_values = $this->db->query("
            SELECT pocov.option_id, pocov.option_value_id, pocov.value FROM `{$db_prefix}product_options_combinations_option_values` pocov 
            LEFT JOIN `{$db_prefix}option_value` ov ON (pocov.option_value_id=ov.option_value_id)
            LEFT JOIN `{$db_prefix}option_value_description` ovd ON (ov.option_value_id=ovd.option_value_id)
            WHERE pocov.combination_id={$combination_id} AND (ovd.language_id IS NULL OR ovd.language_id='{$this->config->get('config_language_id')}')
            ORDER BY pocov.id ASC
            ")->rows;

        $options_mapped = [];

        foreach ($combination_values as $combination_value){
            $value = empty($combination_value['value']) ? $combination_value['option_value_id'] : $combination_value['value'];
            $option_id = $combination_value['option_id'];
            $option = $this->getOption($option_id);
            if (is_array($option) && array_key_exists('type', $option) && $option['type'] === 'checkbox'){
                if(!isset($options_mapped[$option_id]))
                    $options_mapped[$option_id] = [];
                $options_mapped[$option_id][] = $value;
            }else{
                $options_mapped[$option_id] = $value;
            }
        }

        return $options_mapped;
    }

    public function getOption($option_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "option` o LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE o.option_id = '" . (int)$option_id . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "'");

        return $query->row;
    }

    /**
     * Returns options structure of a product from options combinations
     * @param $product_id integer The product id for obtaining options
     * @param $option_id integer If defined, obtain options values only of a given option id
     * @return array
     */
    public function getProductOptionsFormatted($product_id, $option_id=null, $bullet_card_image_width=null, $bullet_card_image_height=null) {

        $product_option_data = [];

        $db_prefix = DB_PREFIX;
        $query = "SELECT *, ovd.name AS ovd_name, od.name AS od_name, o.sort_order as o_sort_order, ov.sort_order as ov_sort_order";
        $query .= " FROM `{$db_prefix}product_options_combinations` poc";
        $query .= " INNER JOIN `{$db_prefix}product_options_combinations_option_values` pocov ON (poc.id=pocov.combination_id)";
        $query .= " INNER JOIN `{$db_prefix}option_value` ov ON (pocov.option_value_id=ov.option_value_id)";
        $query .= " INNER JOIN `{$db_prefix}option_value_description` ovd ON (ov.option_value_id=ovd.option_value_id)";
        $query .= " INNER JOIN `{$db_prefix}option` o ON (pocov.option_id=o.option_id)";
        $query .= " INNER JOIN `{$db_prefix}option_description` od ON (o.option_id=od.option_id)";
        $query .= " WHERE poc.product_id = '{$this->db->escape($product_id)}'";
        $query .= " AND ovd.language_id='{$this->config->get('config_language_id')}'";
        $query .= " AND od.language_id='{$this->config->get('config_language_id')}'";

        $buy_out_of_stock = $this->config->get('config_stock_checkout') ? 1 : 0;
        // If subtract is false, or subtract is true and quantity is grater than zero or buy out of stock is activated
        $query .= " AND (poc.subtract = 0 OR (poc.subtract = 1 AND poc.quantity > 0) OR 1 = {$buy_out_of_stock})";

        if ($option_id) {
            if (is_array($option_id))
                $query .= " AND pocov.option_id IN (" . $this->db->escape(join(',', $option_id)) . ")";
            else
                $query .= " AND pocov.option_id='{$this->db->escape($option_id)}'";
        }

        $query .= " ORDER BY o.sort_order, pocov.id";

        foreach ($this->db->query($query)->rows as $row){
            if (!isset($product_option_data[$row['option_id']])){
                $product_option_data[$row['option_id']] = [
                    'option_id'            => $row['option_id'],
                    'product_option_value' => [],
                    'name'                 => $row['od_name'],
                    'type'                 => $row['type'],
                    'sort_order'           => $row['o_sort_order'],
                    'language_id'          => $row['language_id']
                ];
            }

            if (!isset($product_option_data[$row['option_id']]['product_option_value'][$row['option_value_id']])){
                $opt_images = json_decode($row['images'], true);

                $opt_image_width = $this->config->get('config_opt_comb_options_like_images_width') ? $this->config->get('config_opt_comb_options_like_images_width') : 100;
                $opt_image_height = $this->config->get('config_opt_comb_options_like_images_height') ? $this->config->get('config_opt_comb_options_like_images_height') : 100;

                $bullet_width = $this->config->get('config_opt_comb_bullet_width') ? $this->config->get('config_opt_comb_bullet_width') : 100;
                $bullet_height = $this->config->get('config_opt_comb_bullet_height') ? $this->config->get('config_opt_comb_bullet_height') : 100;

                if (!$bullet_card_image_width)
                    $bullet_card_image_width = $this->getDimension('image_product_width');
                if (!$bullet_card_image_height)
                    $bullet_card_image_height = $this->getDimension('image_product_height');

                if ($opt_images){
                    $opt_image = $this->model_tool_image->resize($opt_images[0], $opt_image_width, $opt_image_height);
                    $bullet_image = $this->model_tool_image->resize($opt_images[0], $bullet_width, $bullet_height);
                    $bullet_card_image = $this->model_tool_image->resize($opt_images[0], $bullet_card_image_width, $bullet_card_image_height);
                    $mask_image = $this->model_tool_image->resize('catalog/bullet_lazy_load.png', $bullet_width, $bullet_height);
                } else {
                    $opt_image = null;
                    $bullet_image = null;
                    $bullet_card_image = $this->model_tool_image->resize('placeholder.png', $bullet_card_image_width, $bullet_card_image_height);
                    $mask_image = $this->model_tool_image->resize('catalog/bullet_lazy_load.png', $bullet_card_image_width, $bullet_card_image_height);
                }

                if ($row['image']){
                    $product_option_image = $this->model_tool_image->resize($row['image'], $opt_image_width, $opt_image_height);
                    $product_bullet_image = $this->model_tool_image->resize($row['image'], $bullet_width, $bullet_height);
                } else {
                    $product_option_image = null;
                    $product_bullet_image = null;
                }

                $product_option_data[$row['option_id']]['product_option_value'][$row['option_value_id']] = [
                    'option_value_id'         => $row['option_value_id'],
                    'option_id'               => $row['option_id'],
                    'image'                   => $product_option_image,
                    'opt_image'               => $opt_image,
                    'bullet_image'            => $product_bullet_image,
                    'bullet_image_mask'       => $mask_image,
                    'bullet_opt_image'        => $bullet_image,
                    'bullet_card_image'       => $bullet_card_image,
                    'sort_order'              => $row['ov_sort_order'],
                    'language_id'             => $row['language_id'],
                    'name'                    => $row['ovd_name']
                ];
            }
        }

        //sorting option values
        $final_options = [];
        foreach ($product_option_data as $product_option){
            usort($product_option['product_option_value'], function ($option_value1, $option_value2){
                if ($option_value1['sort_order'] == $option_value2['sort_order'])
                    return 0;
                return $option_value1['sort_order'] < $option_value2['sort_order'] ? -1 : 1;
            });
            $final_options[] = $product_option;
        }

        return $final_options;
    }

    public function getDimension($var_name) {
        if(version_compare(VERSION, '2.3', '<')) {
            $var_name = 'config_'.$var_name;
        } else{
            $var_name = (version_compare(VERSION, '3', '>=') ? 'theme_' : '').$this->config->get('config_theme').'_'.$var_name;
        }
        $dimension = $this->config->get($var_name);
        if(empty($dimension))
            return 100;
        return $dimension;
    }

    public function buildSEOQuery($product_id, $combination_options_mapped){
        $option_values_str = '';

        foreach ($combination_options_mapped as $option_id => $option_value){
            if (is_numeric($option_value))
                $option_values_str .= $option_value . ',';
            else if (is_array($option_value))
                foreach ($option_value as $option_value_id)
                    $option_values_str .= $option_value_id . ',';
        }

        $option_values_str = substr($option_values_str, 0, -1);

        return "product_id=" . (int)$product_id . "&ovs=" . $option_values_str;
    }
}
