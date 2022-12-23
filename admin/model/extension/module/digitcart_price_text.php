<?php
class ModelExtensionmoduleDigitCartPriceText extends Controller {
	private $moduleName = 'digitcart_price_text';
	private $moduleFilePath = 'extension/module/digitcart_price_text';
	private $moduleModel = 'model_extension_module_digitcart_price_text';
	public function setPriceText($product_id, $data){
		$this->db->query("DELETE FROM " . DB_PREFIX . "digitcart_price_text WHERE product_id = '" . (int)$product_id . "'");
		foreach ($data as $language_id => $value) {
			if($value){
				$this->db->query("INSERT INTO " . DB_PREFIX . "digitcart_price_text SET product_id = '" . (int)$product_id . "', text = '" . $this->db->escape($value) . "', language_id = '" . (int)$language_id . "', date_added = NOW()");
			}
		}
	}
	public function getPriceText($product_id){
		$price_text_data = array();
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "digitcart_price_text WHERE product_id = '" . (int)$product_id . "'");
		if($query->num_rows){
			foreach ($query->rows as $result) {
				$price_text_data[$result['language_id']] = $result['text'];
			}
		}
		return $price_text_data;
	}
	public function getProducts($data = array()){
		$products_data = array();
		$sql = "
			SELECT 
			dpt.*,
			pd.name
			FROM " . DB_PREFIX . "digitcart_price_text dpt
			LEFT JOIN " . DB_PREFIX . "product_description pd ON(dpt.product_id = pd.product_id)
			WHERE pd.language_id = " . (int)$this->config->get('config_language_id') . "
		";
		$sql .= " ORDER BY dpt.date_added DESC ";
		$query = $this->db->query($sql);
		if($query->num_rows){
			$languages = array();
			foreach($query->rows as $row){
				$languages[$row['product_id']][$row['language_id']] = $row['text'];
				$products_data[$row['product_id']] = array(
					'product_id' => $row['product_id'],
					'name' => $row['name'],
					'date_added' => $row['date_added'],
					'languages' => $languages[$row['product_id']]
				);
			}
		}
		return $products_data;
	}
	public function deletePriceText($product_id){
		$this->db->query("DELETE FROM " . DB_PREFIX . "digitcart_price_text WHERE product_id = '" . (int)$product_id . "'");
	}
	public function createTable() {
		$sql = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "digitcart_price_text` (
				`id` int(11) AUTO_INCREMENT NOT NULL,
				`product_id` int(11) NOT NULL,
				`language_id` int(11) NOT NULL,
				`text` text CHARACTER SET utf8 NOT NULL,
				`date_added` datetime NOT NULL,
				PRIMARY KEY (`id`)
			);
		";
		$this->db->query($sql);
	}
}