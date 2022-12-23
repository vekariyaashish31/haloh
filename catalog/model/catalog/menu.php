<?php
class ModelCatalogMenu extends Model {
	public function getMenu($menu_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "top_menu i LEFT JOIN " . DB_PREFIX . "top_menu_description id ON (i.menu_id = id.menu_id) WHERE i.menu_id = '". (int)$menu_id ."' AND id.language_id = '". (int)$this->config->get('config_language_id') ."' AND i.status = '1'");

		return $query->row;
	}

	public function getMenus() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "top_menu i LEFT JOIN " . DB_PREFIX . "top_menu_description id ON (i.menu_id = id.menu_id) WHERE id.language_id = '". (int)$this->config->get('config_language_id') ."' AND i.status = '1' ORDER BY i.sort_order, LCASE(id.menu_title) ASC");

		return $query->rows;
	}
}