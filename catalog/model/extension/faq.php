<?php
class ModelExtensionFaq extends Model{
	public function getfaqgroup($data=array()){
		$sql="SELECT * FROM " . DB_PREFIX . "faqgroup fg LEFT JOIN " . DB_PREFIX . "faqgroup_description fgd on(fg.faqgroup_id=fgd.faqgroup_id) WHERE status='1' AND fgd.language_id='" . (int)$this->config->get('config_language_id') . "'";
		
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		
		$query=$this->db->query($sql);
		return $query->rows;
	}
	
	
	public function getfaqs($data=array()) {
		$sql="SELECT * FROM " . DB_PREFIX . "faq f LEFT JOIN " . DB_PREFIX . "faq_description fd on(f.faq_id=fd.faq_id) WHERE f.status='1' AND fd.language_id='" . (int)$this->config->get('config_language_id') . "'";
		
		
		if (!empty($data['filter_name'])) {
			$sql .= " AND (";
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "fd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
				$sql .= ")";
			}
			
		$query=$this->db->query($sql);
		
		return $query->rows;
	}
	
	public function getTotalfaqs($data=array()) {
		$sql="SELECT * FROM " . DB_PREFIX . "faq f LEFT JOIN " . DB_PREFIX . "faq_description fd on(f.faq_id=fd.faq_id) WHERE f.status='1' AND fd.language_id='" . (int)$this->config->get('config_language_id') . "'";
		
	
		if (!empty($data['filter_name'])) {
				$sql .= " AND (";
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "fd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
				$sql .= ")";
			}
			
		$query=$this->db->query($sql);
		
		return $query->rows;
	}
	
	public function getTotalfaqgroup($data=array()){
		$sql="SELECT * FROM " . DB_PREFIX . "faqgroup fg LEFT JOIN " . DB_PREFIX . "faqgroup_description fgd on(fg.faqgroup_id=fgd.faqgroup_id) WHERE status='1' AND fgd.language_id='" . (int)$this->config->get('config_language_id') . "'";
		
		$query=$this->db->query($sql);
		
		return count($query->rows);
	}
		
	public function getfaqgroup2($faqgroup_id){
		$sql="SELECT * FROM " . DB_PREFIX . "faqgroup fg LEFT JOIN " . DB_PREFIX . "faqgroup_description fgd on(fg.faqgroup_id=fgd.faqgroup_id) WHERE status='1'  AND fgd.language_id='" . (int)$this->config->get('config_language_id') . "'";
		$query=$this->db->query($sql);
		return $query->rows;
	}
		
	public function getfaqgroup3($faqgroup_id) {
		$sql="SELECT * FROM " . DB_PREFIX . "faqgroup f LEFT JOIN " . DB_PREFIX . "faqgroup_description fd on(f.faqgroup_id=fd.faqgroup_id) WHERE f.status='1' AND fd.language_id='" . (int)$this->config->get('config_language_id') . "' AND f.faqgroup_id = '". (int)$faqgroup_id ."'";
		
		$query=$this->db->query($sql);
		
		return $query->rows;
	}
	
	
	public function getfaqsBygroup($faqgroup_id) {
		$sql="SELECT * FROM " . DB_PREFIX . "faq f LEFT JOIN " . DB_PREFIX . "faq_description fd on(f.faq_id=fd.faq_id) WHERE f.status='1' AND fd.language_id='" . (int)$this->config->get('config_language_id') . "' AND f.faqgroup_id = '". (int)$faqgroup_id ."'";
		
		$query=$this->db->query($sql);
		
		return $query->rows;
	}

	public function getfaqgroupinfo($faqgroup_id){
		$sql="SELECT * FROM " . DB_PREFIX . "faqgroup fg LEFT JOIN " . DB_PREFIX . "faqgroup_description fgd on(fg.faqgroup_id=fgd.faqgroup_id) WHERE fg.faqgroup_id = '". (int)$faqgroup_id ."' AND fgd.language_id='" . (int)$this->config->get('config_language_id') . "'";
		
		$query=$this->db->query($sql);
		return $query->row;
	}

	
	public function totalfaq($faqgroup_id)
	{
	$query=$this->db->query("select * from " . DB_PREFIX . "faq f where f.faqgroup_id='". (int)$faqgroup_id ."'");
	return $query->num_rows;
	}
	
	public function totalgroups($faqgroup_id)
	{
	$query=$this->db->query("select * from " . DB_PREFIX . "faqgroup_description f where f.faqgroup_id='". (int)$faqgroup_id ."'");
	return $query->rows;
	}
	
}