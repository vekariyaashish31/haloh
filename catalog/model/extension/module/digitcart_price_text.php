<?php
class ModelExtensionmoduleDigitCartPriceText extends Controller {
	private $moduleName = 'digitcart_price_text';
	private $moduleFilePath = 'extension/module/digitcart_price_text';
	private $moduleModel = 'model_extension_module_digitcart_price_text';
	public function getPriceText($product_id){
		$return = false;
		$query = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "' LIMIT 1");
		if($query->num_rows){
			if($query->row['quantity'] < 1){
				$temp = $this->config->get('module_digitcart_price_text_for_out_of_stock');
				if(!empty($temp[$this->config->get('config_language_id')])){
					$return = $temp[$this->config->get('config_language_id')];
					return $return;
				}
			}
		}
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "digitcart_price_text WHERE product_id = '" . (int)$product_id . "' and language_id = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");
		if($query->num_rows){
			$return = $query->row['text'];
		}
		return $return;
	}
}