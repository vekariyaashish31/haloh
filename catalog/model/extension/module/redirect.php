<?php
class ModelExtensionModuleRedirect extends Model {
	public function getRedirects($store_id){
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "redirect_url` WHERE store_id = '" . (int)$store_id ."' ORDER BY date_added DESC");
		return $query->rows;
	}
}