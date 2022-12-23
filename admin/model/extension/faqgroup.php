<?php
class ModelExtensionfaqgroup extends Model {
public function createtable(){
$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faq (faq_id int(11) NOT NULL AUTO_INCREMENT,faqgroup_id int(11) NOT NULL DEFAULT '0',sort_order int(3) NOT NULL DEFAULT '0',status tinyint(1) NOT NULL,PRIMARY KEY (faq_id),KEY parent_id (faqgroup_id)) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;");

$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faqgroup (faqgroup_id int(11) NOT NULL AUTO_INCREMENT, sort_order int(3) NOT NULL DEFAULT '0',status tinyint(1) NOT NULL,PRIMARY KEY (faqgroup_id))");

$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faqgroup_description ( faqgroup_id int(11) NOT NULL,language_id int(11) NOT NULL,title varchar(255) NOT NULL, PRIMARY KEY (faqgroup_id,language_id),KEY name (title)) ENGINE=MyISAM DEFAULT CHARSET=utf8;");


$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faqgroup_to_store (faqgroup_id int(11) NOT NULL,store_id int(11) NOT NULL, PRIMARY KEY (faqgroup_id,store_id))");

$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faq_description (faq_id int(11) NOT NULL,language_id int(11) NOT NULL,name varchar(255) NOT NULL,description text NOT NULL,PRIMARY KEY (faq_id,language_id), KEY name (name)) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
}
	public function addfaqgroup($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup SET  sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "'");

		$faqgroup_id = $this->db->getLastId();		

		foreach ($data['faqgroup_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup_description SET faqgroup_id = '" . (int)$faqgroup_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['name']) . "'");
		}

		if (isset($data['faqgroup_filter'])) {
			foreach ($data['faqgroup_filter'] as $filter_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup_filter SET faqgroup_id = '" . (int)$faqgroup_id . "', filter_id = '" . (int)$filter_id . "'");
			}
		}

		if (isset($data['faqgroup_store'])) {
			foreach ($data['faqgroup_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup_to_store SET faqgroup_id = '" . (int)$faqgroup_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		// Set which layout to use with this faqgroup
		if (isset($data['faqgroup_layout'])) {
			foreach ($data['faqgroup_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup_to_layout SET faqgroup_id = '" . (int)$faqgroup_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		if (isset($data['faq_seo_url'])) {
			foreach ($data['faq_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'faqgroup_id=" . (int)$faqgroup_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}

		return $faqgroup_id;
	}

	public function editfaqgroup($faqgroup_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "faqgroup SET  sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "' WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "faqgroup_description WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");

		foreach ($data['faqgroup_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup_description SET faqgroup_id = '" . (int)$faqgroup_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['name']) . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "faqgroup_to_store WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");

		if (isset($data['faqgroup_store'])) {
			foreach ($data['faqgroup_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "faqgroup_to_store SET faqgroup_id = '" . (int)$faqgroup_id . "', store_id = '" . (int)$store_id . "'");
			}
		}
		
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'faqgroup_id=" . (int)$faqgroup_id . "'");

		if (isset($data['faq_seo_url'])) {
			foreach ($data['faq_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'faqgroup_id=" . (int)$faqgroup_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}
	}

	public function deletefaqgroup($faqgroup_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "faqgroup WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "faqgroup_description WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "faqgroup_to_store WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'faqgroup_id=" . (int)$faqgroup_id . "'");
		
		// delete descr
		$query = $this->db->query("SELECT * from " . DB_PREFIX . "faq WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");
		foreach($query->rows as $value) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "faq_description WHERE faq_id = '" . (int)$value['faq_id'] . "'");
		}
		// delete desc
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");
	}

	public function getfaqgroup($faqgroup_id) {
		$query = $this->db->query("select * from " . DB_PREFIX . "faqgroup f left join " . DB_PREFIX . "faqgroup_description fd on(f.faqgroup_id=fd.faqgroup_id) where f.faqgroup_id = '" . (int)$faqgroup_id . "'");
		
		return $query->row;
	}
	
	public function getfaqgroup2($faqgroup_id) {
		$query = $this->db->query("select * from " . DB_PREFIX . "faqgroup f left join " . DB_PREFIX . "faqgroup_description fd on(f.faqgroup_id=fd.faqgroup_id) where f.faqgroup_id = '" . (int)$faqgroup_id . "'");
		 
		return $query->rows;
	}

	public function getfaqgroups($data = array()) {
		$sql = "SELECT  *, title as name FROM " . DB_PREFIX . "faqgroup f1 LEFT JOIN " . DB_PREFIX . "faqgroup_description fd1 ON (f1.faqgroup_id = fd1.faqgroup_id) WHERE fd1.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND fd1.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sort_order";
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
	}

	public function getfaqgroupDescriptions($faqgroup_id) {
		$faqgroup_description_data = array();

		$query = $this->db->query("SELECT *,title as name FROM " . DB_PREFIX . "faqgroup_description WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");

		foreach ($query->rows as $result) {
			$faqgroup_description_data[$result['language_id']] = array(
				'name'             => $result['name'],
			
			);
		}

		return $faqgroup_description_data;
	}

	public function getfaqgroupSeoUrls($faqgroup_id) {
		$faqgroup_seo_url_data = array();
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'faqgroup_id=" . (int)$faqgroup_id . "'");
		
		

		foreach ($query->rows as $result) {
			$faqgroup_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}
		return $faqgroup_seo_url_data;
	}
	
	public function getfaqgroupStores($faqgroup_id) {
		$faqgroup_store_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faqgroup_to_store WHERE faqgroup_id = '" . (int)$faqgroup_id . "'");

		foreach ($query->rows as $result) {
			$faqgroup_store_data[] = $result['store_id'];
		}

		return $faqgroup_store_data;
	}

	public function getTotalfaqgroups() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faqgroup");

		return $query->row['total'];
	}
}