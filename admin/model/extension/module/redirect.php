<?php 
class ModelExtensionModuleRedirect extends Model {
  	public function addUrlTable() {

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "redirect_url` (
			`url_id` INT(11) NOT NULL AUTO_INCREMENT,
			`old_url` TEXT NOT NULL,
			`new_url` TEXT NOT NULL,
			`type` INT(11) NOT NULL,
			`store_id` INT(11) NOT NULL,
			`date_added` DATETIME NULL DEFAULT NULL,
			`date_modified` DATETIME NOT NULL,  
			 PRIMARY KEY (`url_id`))");

  	} 
	
	public function addUrl($data, $store_id){ 
		$http = ($this->request->server['HTTPS']) ? HTTPS_CATALOG : HTTP_CATALOG;
		
		$query =  $this->db->query("INSERT INTO `" . DB_PREFIX . "redirect_url` SET old_url = '" . $this->db->escape($data['module_redirect']['old_url']) ."', new_url = '" . $this->db->escape($data['module_redirect']['new_url']) ."', type= '". $data['module_redirect']['type'] ."', store_id = '". $store_id ."', date_added = NOW()");
		return $this->db->getLastId();
	}
	
	public function editUrl($url_id, $data){

		$query =  $this->db->query("UPDATE `" . DB_PREFIX . "redirect_url` SET old_url = '" . $data['module_redirect']['old_url'] ."', new_url = '" . $data['module_redirect']['new_url'] ."', type= '". $data['module_redirect']['type'] ."', date_modified = NOW() WHERE url_id = '" . (int)$url_id. "'");
		return $url_id;
	}	
	
	public function ImportRedirects($data){
		//$old_url = isset($data[0]) ? 
		
		$this->db->query("INSERT INTO `" . DB_PREFIX . "redirect_url` SET old_url = '" . (isset($data[0]) ? $this->db->escape($data[0]) : '') ."', new_url = '" . (isset($data[1]) ? $this->db->escape($data[1]) : '') ."', type= '". (isset($data[2]) ? $data[2] : '') ."', store_id = '". (isset($data[3]) ? $data[3] : '') ."', date_added = NOW()");	
	}
	
	
	public function detaleAll(){
		$query =  $this->db->query("DELETE FROM `" . DB_PREFIX . "redirect_url`");
	}		

	public function detaleByID($url_id){
		$query =  $this->db->query("DELETE FROM `" . DB_PREFIX . "redirect_url` WHERE url_id = '" . (int)$url_id . "'");
	}		
	
	public function getUrl($url_id){
		$query =  $this->db->query("SELECT * from `" . DB_PREFIX . "redirect_url` WHERE url_id = '" . $url_id .  "' ORDER BY date_added ASC");
		return $query->row;
	}

	public function getUrls($store_id){
		$query =  $this->db->query("SELECT * from `" . DB_PREFIX . "redirect_url` WHERE store_id = '" . (int)$store_id . "' ORDER BY date_added DESC");
		return $query->rows;
	}

	public function getTotalUrls($data){
		$query =  $this->db->query("SELECT COUNT(*) AS total from `" . DB_PREFIX . "redirect_url` ORDER BY date_added DESC");
		return $query->row['total'];
	}
	
}
?>