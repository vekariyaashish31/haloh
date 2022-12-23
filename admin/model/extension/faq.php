<?php
class ModelExtensionfaq extends Model {
public function createtable(){
$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faq (faq_id int(11) NOT NULL AUTO_INCREMENT,faqgroup_id int(11) NOT NULL DEFAULT '0',sort_order int(3) NOT NULL DEFAULT '0',status tinyint(1) NOT NULL,PRIMARY KEY (faq_id),KEY parent_id (faqgroup_id)) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;");

$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faqgroup (faqgroup_id int(11) NOT NULL AUTO_INCREMENT, sort_order int(3) NOT NULL DEFAULT '0',status tinyint(1) NOT NULL,PRIMARY KEY (faqgroup_id))");

$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faqgroup_description ( faqgroup_id int(11) NOT NULL,language_id int(11) NOT NULL,title varchar(255) NOT NULL, PRIMARY KEY (faqgroup_id,language_id),KEY name (title)) ENGINE=MyISAM DEFAULT CHARSET=utf8;");


$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faqgroup_to_store (faqgroup_id int(11) NOT NULL,store_id int(11) NOT NULL, PRIMARY KEY (faqgroup_id,store_id))");

$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "faq_description (faq_id int(11) NOT NULL,language_id int(11) NOT NULL,name varchar(255) NOT NULL,description text NOT NULL,PRIMARY KEY (faq_id,language_id), KEY name (name)) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

	}
	
	public function addfaq($data) {
		
		$this->db->query("INSERT INTO " . DB_PREFIX . "faq SET faqgroup_id = '" . (int)$data['faqgroup_id'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "'");

		$faq_id = $this->db->getLastId();

		

		foreach ($data['faq_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "faq_description SET faq_id = '" . (int)$faq_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}

		

		return $faq_id;
	}

	public function editfaq($faq_id, $data) {
		
		$this->db->query("UPDATE " . DB_PREFIX . "faq SET faqgroup_id = '" . (int)$data['faqgroup_id'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "'  WHERE faq_id = '" . (int)$faq_id . "'");

		

		$this->db->query("DELETE FROM " . DB_PREFIX . "faq_description WHERE faq_id = '" . (int)$faq_id . "'");

		foreach ($data['faq_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "faq_description SET faq_id = '" . (int)$faq_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
	}

	public function deletefaq($faq_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq WHERE faq_id = '" . (int)$faq_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq_description WHERE faq_id = '" . (int)$faq_id . "'");
		
		
	}

	public function getfaq($faq_id){
		$query = $this->db->query("select *,title as faqgroup_faqs from " . DB_PREFIX . "faq f left join " . DB_PREFIX . "faq_description fd on(f.faq_id=fd.faq_id)left join " . DB_PREFIX . "faqgroup_description fgd on(fgd.faqgroup_id=f.faqgroup_id) where f.faq_id = '" . (int)$faq_id . "' AND fd.language_id='" . (int)$this->config->get('config_language_id') . "'");
		
		return $query->row;
	}
	
	public function getfaqs($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "faq f2 LEFT JOIN " . DB_PREFIX . "faq_description fd2 ON (f2.faq_id = fd2.faq_id) left join " . DB_PREFIX . "faqgroup_description fgd2 on(fgd2.faqgroup_id=f2.faqgroup_id) WHERE fd2.language_id = '" . (int)$this->config->get('config_language_id') . "'";
		
		$sql .= " GROUP BY f2.faq_id";
		
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
	
	
	public function getfaqDescriptions($faq_id) {
		$faq_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq_description WHERE faq_id = '" . (int)$faq_id . "'");

		foreach ($query->rows as $result) {
			$faq_description_data[$result['language_id']] = array(
				'name'             => $result['name'],
				'description'      => $result['description']
			);
		}
		return $faq_description_data;
	}

	public function getTotalfaqs() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq");

		return $query->row['total'];
	}
	
	
}
