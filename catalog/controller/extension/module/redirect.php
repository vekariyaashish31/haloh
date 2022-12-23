<?php
class ControllerExtensionModuleRedirect extends Controller {
	public function index() {
		
		$this->load->model('extension/module/redirect');
		$store_id = $this->config->get('config_store_id');
		$redirects = $this->model_extension_module_redirect->getRedirects($store_id);

		$request = $_SERVER['REQUEST_URI']; 
		if($redirects){		
			foreach($redirects as $redirect){ 
				if(md5(htmlspecialchars(trim($request))) == md5(trim($redirect['old_url'])) || md5(trim($request)) == md5(trim($redirect['old_url']))){
					$new_url = htmlspecialchars_decode($redirect['new_url']);
					if($redirect['type'] == 301){
						header("HTTP/1.0 301 Moved Permanently");			  
						header("Location: $new_url", true, 301);
						header("Connection: close");					
						exit();
					}elseif($redirect['type'] == 302){
						header('Location: $new_url', true, 302);		
						exit();					 
					}elseif($redirect['type'] == 303){
						header('Location: $new_url', true, 303);		
						exit();					 
					} 
				}
			}

		}
	}
}
