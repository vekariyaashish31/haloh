<?php
class ControllerExtensionModuleRedirectUrl extends Controller {
	private $error = array();

	public function index() { 
		
		$this->load->language('extension/module/redirect_url');

		$this->document->setTitle($this->language->get('heading_title1'));
		
		
		$this->load->model('setting/setting');
			
		$this->load->model('extension/module/redirect');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$store_id = 0;
			
			if (isset($this->request->get['store_id']) && $this->request->get['store_id']) {
				$store_id = (int) $this->request->get['store_id'];		
			}	
			
			unset($this->session->data['error_warning']);
			unset($this->session->data['success']);

			$this->model_extension_module_redirect->addUrl($this->request->post, $store_id);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/redirect_url', 'user_token=' . $this->session->data['user_token'], true));
		}

		$data['heading_title'] = $this->language->get('heading_title1');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_deleted'] = $this->language->get('text_deleted');
		
		

		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_create_redirect'] = $this->language->get('button_create_redirect');
		$data['button_import_csv'] = $this->language->get('button_import_csv');		
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_delete_all'] = $this->language->get('button_delete_all');
		$data['button_export_all'] = $this->language->get('button_export_all');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title1'),
			'href' => $this->url->link('extension/module/redirect_url', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['user_token'] = $this->session->data['user_token'];
		$data['server'] = $this->request->server['HTTP_HOST'];
		
		if (isset($this->request->get['store_id']) && $this->request->get['store_id']) {
			$data['action'] = $this->url->link('extension/module/redirect_url', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id']  , true);
		}else{
			$data['action'] = $this->url->link('extension/module/redirect_url', 'user_token=' . $this->session->data['user_token'], true);			
		}	
		$data['import_action'] = $this->url->link('extension/module/redirect_url/importall', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete_action'] = $this->url->link('extension/module/redirect_url/delete', 'user_token=' . $this->session->data['user_token'], true);		
		
		$data['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['delete_all'] = $this->url->link('extension/module/redirect_url/deleteall', 'user_token=' . $this->session->data['user_token'], true);
		$data['export_all'] = $this->url->link('extension/module/redirect_url/exportall', 'user_token=' . $this->session->data['user_token'], true);
		$data['sample_csv'] = $this->url->link('extension/module/redirect_url/sample_csv', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} elseif(isset($this->session->data['error_warning'])){
			$data['error_warning'] = $this->session->data['error_warning'];
			unset($this->session->data['error_warning']);
		}else{
			$data['error_warning'] = '';
		}

		if(isset($this->session->data['success'])){
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}else{
			$data['success'] = '';
		}		

		if (isset($this->error['old_url'])) {
			$data['error_old_url'] = $this->error['old_url'];
		} else {
			$data['error_old_url'] = '';
		}

		if (isset($this->error['new_url'])) {
			$data['error_new_url'] = $this->error['new_url'];
		} else {
			$data['error_new_url'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		
		if(isset($this->request->get['mod'])){
			$data['mode'] = $this->request->get['mod'];
		}else{
			$data['mode'] = '';
		}
		
		// multi-stores management
		$this->load->model('setting/store');
		$data['stores'] = array();
		$data['stores'][] = array(
			'store_id' => 0,
			'name'     => $this->config->get('config_name')
		);

		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$action = array();

			$data['stores'][] = array(
				'store_id' => $store['store_id'],
				'name'     => $store['name']
			);
		}
		
		$data['store_id'] = $store_id = 0;
		
		// Overwrite store settings
		if (isset($this->request->get['store_id']) && $this->request->get['store_id']) {
			$data['store_id'] = $store_id = (int) $this->request->get['store_id'];		
		}	
		
		//Install Table
		$this->model_extension_module_redirect->addUrlTable();
		$data['redirect_urls'] = array();
		
		$results = $this->model_extension_module_redirect->getUrls($store_id);
		
		foreach($results as $result){ 
			$data['redirect_urls'][] = array(
				'url_id' => $result['url_id'],		
				'old_url' => $result['old_url'],		
				'new_url' => $result['new_url'],
				'type' => $result['type'],				
				'date_added' => $result['date_added'],		
				'href' => $this->url->link('extension/module/redirect_url/delete', 'user_token=' . $this->session->data['user_token'] . '&url_id='. $result['url_id'], true)		
			);
		}
		
		if (isset($this->request->post['module_redirect'])) {
			$data['module_redirect'] = $this->request->post['module_redirect'];
		} else {
			$data['module_redirect'] = $this->config->get('module_redirect');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/redirect_url', $data));
	}
	
	public function importall(){
		unset($this->session->data['error_warning']);
		$this->load->language('extension/module/redirect_url');
		$this->load->model('extension/module/redirect');
	
		$this->document->setTitle($this->language->get('heading_title1'));

		if(($this->request->files['upload_csv']['name'] == "") || (pathinfo($this->request->files['upload_csv']['name'], PATHINFO_EXTENSION) != 'csv')){ 
			$this->session->data['error_warning'] = $this->language->get('error_upload_csv');
			
		}else{
			
			if (is_uploaded_file($this->request->files['upload_csv']['tmp_name'])) {
				 $handle = fopen($this->request->files['upload_csv']['tmp_name'], "r");
				 $i = 0;
				 while (($rows = fgetcsv($handle, 10000, ",")) !== false) { 
					 $i++;
					 if($i != 1){
						$this->model_extension_module_redirect->ImportRedirects($rows);
					 }
				 }
				
				fclose($handle);
				$this->session->data['success'] = $this->language->get('text_success');
			}		
		}	

		$this->response->redirect($this->url->link('extension/module/redirect_url', 'user_token=' . $this->session->data['user_token'], true));

	}

	public function delete(){
		$this->load->language('extension/module/redirect_url');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/setting');
			
		$this->load->model('extension/module/redirect');		
		
		if(isset($this->request->post['selected'])){
			foreach ($this->request->post['selected'] as $url_id) {
					$this->model_extension_module_redirect->detaleByID($url_id);
			}
		}elseif(isset($this->request->get['url_id'])){	
			$this->model_extension_module_redirect->detaleByID($this->request->get['url_id']);
		}
		
		$this->session->data['success'] = $this->language->get('text_deleted');

		$this->response->redirect($this->url->link('extension/module/redirect_url', 'user_token=' . $this->session->data['user_token'], true));
		
	}

	public function exportall(){

		$this->load->language('extension/module/redirect_url');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/setting');
			
		$this->load->model('extension/module/redirect');		
	
		// output headers so that the file is downloaded rather than displayed
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=fullexport.csv');

		// create a file pointer connected to the output stream
		$output = fopen('php://output', 'w');

		// output the column headings
		fputcsv($output, array('OLD URL', 'NEW URL', 'TYPE', 'STORE ID'));
		
		$results = $this->model_extension_module_redirect->getUrls();
		
		foreach($results as $result){ 
			fputcsv($output, array($result['old_url'], $result['new_url'], $result['type'], $result['store_id']));
		}
		
	}	
	public function sample_csv(){

		$this->load->language('extension/module/redirect_url');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/setting');
			
		$this->load->model('extension/module/redirect');		
	
		// output headers so that the file is downloaded rather than displayed
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=redirectsample.csv');

		// create a file pointer connected to the output stream
		$output = fopen('php://output', 'w');

		// output the column headings
		fputcsv($output, array('OLD URL', 'NEW URL', 'TYPE', 'STORE ID'));
		
		fputcsv($output, array('/women-clothes/', 'http://yourstore.com/women/women-clothes', '301', '0'));
		fputcsv($output, array('/women-waches/', 'http://yourstore.com/women/women-waches', '301', '0'));
		fputcsv($output, array('/phone/', 'http://yourstore.com/apple', '301', '0'));
		fputcsv($output, array('/fashion-t-shirt.html', 'http://yourstore.com/fashion-shirt.html', '301', '0'));
		
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/redirect_url')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if (!isset($this->request->post['module_redirect']['old_url']) || ((utf8_strlen($this->request->post['module_redirect']['old_url']) <= 1) && substr($this->request->post['module_redirect']['old_url'],0,1) !== '/' )) {
			$this->error['old_url'] = $this->language->get('error_old_url');
		}

		if (!isset($this->request->post['module_redirect']['old_url']) || ((utf8_strlen($this->request->post['module_redirect']['new_url']) <= 4) && substr($this->request->post['module_redirect']['new_url'],0,4) != 'http')) {
			$this->error['new_url'] = $this->language->get('error_new_url');
		}		

		unset($this->session->data['error_warning']);
		unset($this->session->data['success']);

		return !$this->error;
	}
}