<?php
class ModelCatalogMenu extends Model {
	public function addMenu($data) {
		$this->db->query("INSERT INTO ". DB_PREFIX ."top_menu SET menu_url = '". $this->db->escape($data['menu_url']) ."', sort_order = '". (int)$data['sort_order'] ."', status = '". (int)$data['status'] ."', menu_type = '". (int)$data['menu_type'] ."'");
		$menu_id = $this->db->getLastId();
		foreach ($data['menu_title'] as $language_id => $value) {
			$this->db->query("INSERT INTO ". DB_PREFIX ."top_menu_description SET menu_id = '". (int)$menu_id ."', language_id = '". (int)$language_id ."', menu_title = '". $this->db->escape($value['title']) ."'");
		}
		$this->cache->delete('menu');

		return $menu_id;
	}

	public function editMenu($menu_id, $data) {
		$this->db->query("UPDATE ". DB_PREFIX ."top_menu SET sort_order = '". (int)$data['sort_order'] ."', status = '". (int)$data['status'] ."', menu_type = '". (int)$data['menu_type'] ."' WHERE menu_id = '". (int)$menu_id ."'");

		$this->db->query("DELETE FROM ". DB_PREFIX ."top_menu_description WHERE menu_id = '". (int)$menu_id ."'");
		foreach ($data['menu_title'] as $language_id => $value) {
			$this->db->query("INSERT INTO ". DB_PREFIX ."top_menu_description SET menu_id = '". (int)$menu_id ."', language_id = '". (int)$language_id ."', menu_title = '". $this->db->escape($value['title']) ."'");
		}
		$this->cache->delete('menu');
	}

	public function deleteMenu($menu_id) {
		$this->db->query("DELETE FROM `". DB_PREFIX ."top_menu` WHERE menu_id = '". (int)$menu_id ."'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "top_menu_description` WHERE menu_id = '". (int)$menu_id ."'");
		$this->cache->delete('menu');
	}

	public function getTotalMenus() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM ". DB_PREFIX ."top_menu");

		return $query->row['total'];
	}

	public function getMenus($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM ". DB_PREFIX ."top_menu i LEFT JOIN " . DB_PREFIX . "top_menu_description id ON (i.menu_id = id.menu_id) WHERE id.language_id = '". (int)$this->config->get('config_language_id') ."'";
			$sort_data = array(
				'id.menu_title',
				'i.sort_order'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY id.menu_title";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}
			$query = $this->db->query($sql);
			return $query->rows;
		} else {
			$menu_data = $this->cache->get('information.' . (int)$this->config->get('config_language_id'));
			if (!$menu_data) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "top_menu i LEFT JOIN " . DB_PREFIX . "top_menu_description id ON (i.menu_id = id.menu_id) WHERE id.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY id.menu_title");
				$menu_data = $query->rows;
				$this->cache->set('information.' . (int)$this->config->get('config_language_id'), $menu_data);
			}

			return $menu_data;
		}
	}

	public function getMenu($menu_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM ". DB_PREFIX ."top_menu WHERE menu_id = '". (int)$menu_id ."'");
		return $query->row;
	}

	public function getMenuTitle($menu_id) {
		$menu_data = array();
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."top_menu_description WHERE menu_id = '". (int)$menu_id ."'");
		foreach ($query->rows as $result) {
			$menu_data[$result['language_id']] = array(
				'title'	=> $result['menu_title']
			);
		}

		return $menu_data;
	}

}