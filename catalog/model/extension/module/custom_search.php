<?php
class ModelExtensionModuleCustomSearch extends Model {
	public function addProductCustomSearch( $data ) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "product SET model = 'CUSTOM_ORDER', sku = 'URL', upc = '', ean = '', jan = '', isbn = '', mpn = '', location = '', quantity = '" . (int)$data['quantity'] . "', minimum = '1', subtract = '0', stock_status_id = '7', date_available = '0000-00-00', manufacturer_id = '0', shipping = '1', price = '" . (float)$data['price'] . "', points = '0', weight = '0.000000', weight_class_id = '0', length = '0.000000', width = '0.000000', height = '0.000000', length_class_id = '0', status = '1', tax_class_id = '0', sort_order = '0', date_added = NOW(), date_modified = NOW()");

		$product_id = $this->db->getLastId();

		$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int)$product_id . "', language_id = '" . (int)$this->config->get('config_language_id') . "', name = '" . $this->db->escape($data['product_name']) . "', description = '', tag = '', meta_title = '', meta_description = '', meta_keyword = '', product_url = '" . $this->db->escape($data['product_url']) . "', details = '" . $this->db->escape($data['details']) . "'");

		$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int)$product_id . "', store_id = '0'");

		return $product_id;
	}

	public function deleteProduct($product_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int)$product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "'");

		$this->cache->delete('product');
	}
}