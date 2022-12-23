<?php

// <copyright file="multiimageuploader.php" company="Sharley's Web Development"> 
// Copyright (c) 2018 All Right Reserved, http://sharleys.co.uk/ 
//
// This source is subject to the Sharley's Web Development and GPL Licenses. 
// Please see the license.txt file for more information. 
// All other rights reserved. 
// 
// THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY  
// KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE 
// IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A 
// PARTICULAR PURPOSE. 
// 
// </copyright> 
// <author>Kamen Sharlandjiev</author> 
// <email>support@sharleys.co.uk</email> 
// <date>25/01/2018</date> 

class ControllerExtensionModuleMultiimageuploader extends Controller {
 private $error = array();

 public function index() {
 	$this->load->language("extension/module/multiimageuploader");

 	$this->document->setTitle($this->language->get("heading_title")); 

 	$this->load->model("setting/setting");  

 	if (($this->request->server["REQUEST_METHOD"] == "POST")) { 

 		$this->model_setting_setting->editSetting('multiimageuploader', $this->request->post);   

 		$this->session->data["success"] = $this->language->get("text_success"); 

 		$this->response->redirect($this->url->link("marketplace/extension&type=module", "user_token=" . $this->session->data["user_token"], true));
 	}

 	$data["heading_title"] = $this->language->get("heading_title"); 

 //commons 
 	$data["button_save"] = $this->language->get("button_save");
 	$data["button_cancel"] = $this->language->get("button_cancel");
 	$data["text_enabled"] = $this->language->get("text_enabled");   
 	$data["text_disabled"] = $this->language->get("text_disabled"); 
 	$data["success"] = $this->language->get("text_disabled"); 
 	$data["text_module"] = $this->language->get("text_module"); 
 	$data["tab_general"] = $this->language->get("tab_general");
 	$data["tab_general_legend"] = $this->language->get("tab_general_legend");
 	$data["entry_status"] = $this->language->get("entry_status");   
 	$data["placeholder_status"] ='';   
 	$data["entry_folder"] = $this->language->get("entry_folder");   
 	$data["placeholder_folder"] ='';   
 	$data["help_folder"] = $this->language->get("help_folder");   
 	$data["entry_segment"] = $this->language->get("entry_segment");   
 	$data["placeholder_segment"] ='';   
 	$data["help_segment"] = $this->language->get("help_segment");   
 	$data["entry_deletedef"] = $this->language->get("entry_deletedef");   
 	$data["placeholder_deletedef"] ='';   
 	$data["tab_help"] = $this->language->get("tab_help");
 	$data["tab_help_legend"] = $this->language->get("tab_help_legend");
 	$data["entry_test_about"] = $this->language->get("entry_test_about");   
 	$data["placeholder_test_about"] ='';   
 	$data["entry_test_support"] = $this->language->get("entry_test_support");   
 	$data["placeholder_test_support"] ='';   
 	$data["entry_test_vote_for_us"] = $this->language->get("entry_test_vote_for_us");   
 	$data["placeholder_test_vote_for_us"] ='';   

 	if (isset($this->error["warning"])) {
 		$data["error_warning"] = $this->error["warning"];   
 	} else {  
 		$data["error_warning"] = "";
 	}

 	$data["breadcrumbs"] = array(); 

 	$data["breadcrumbs"][] = array( 
 		"text" => $this->language->get("text_home"),   
 		"href" => $this->url->link("common/dashboard", "user_token=" . $this->session->data["user_token"], true)   
 	);

 	$data["breadcrumbs"][] = array( 
 		"text" => $this->language->get("text_module"), 
 		"href" => $this->url->link("marketplace/extension&type=module", "user_token=" . $this->session->data["user_token"], true)   
 	);

 	if (!isset($this->request->get["module_id"])) {
 		$data["breadcrumbs"][] = array( 
 			"text" => $this->language->get("heading_title"),  
 			"href" => $this->url->link("extension/module/multiimageuploader", "user_token=" . $this->session->data["user_token"], true)  
 		);  
 	} else {  
 		$data["breadcrumbs"][] = array( 
 			"text" => $this->language->get("heading_title"),  
 			"href" => $this->url->link("extension/module/multiimageuploader", "user_token=" . $this->session->data["user_token"] . "&module_id=" . $this->request->get["module_id"], true)
 		);  
 	}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/multiimageuploader', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/multiimageuploader', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}
		         
		$data['cancel'] = $this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], true); 
  
		if (isset($this->error['warning'])) {    
			$data['error_warning'] = $this->error['warning'];           
		} else { 
			$data['error_warning'] = '';           
		}        
  
		if (isset($this->session->data['error_warning'])) { 
			$data['error_warning'] = $this->session->data['error_warning'];        
  
			unset($this->session->data['error_warning']);     
		} else { 
			$data['error_warning'] = '';           
		}        
		         
		if (isset($this->session->data['success'])) {       
			$data['success'] = $this->session->data['success'];         
  
			unset($this->session->data['success']);           
		} else { 
			$data['success'] = '';      
		}          
 	$data["user_token"] = $this->session->data["user_token"];  

	if (isset($this->request->post['multiimageuploader_status'])) {
		$data['multiimageuploader_status'] = $this->request->post['multiimageuploader_status'];
	} else {
		$data['multiimageuploader_status'] = $this->config->get('multiimageuploader_status');
	}      
	if (isset($this->request->post['multiimageuploader_folder'])) {
		$data['multiimageuploader_folder'] = $this->request->post['multiimageuploader_folder'];
	} else if($this->config->get('multiimageuploader_folder')) {
		$data['multiimageuploader_folder'] = $this->config->get('multiimageuploader_folder');
	} else {
		$data['multiimageuploader_folder'] = 'catalog/';
	}      
	if (isset($this->request->post['multiimageuploader_segment'])) {
		$data['multiimageuploader_segment'] = $this->request->post['multiimageuploader_segment'];
	} else {
		$data['multiimageuploader_segment'] = $this->config->get('multiimageuploader_segment');
	}      
	if (isset($this->request->post['multiimageuploader_deletedef'])) {
		$data['multiimageuploader_deletedef'] = $this->request->post['multiimageuploader_deletedef'];
	} else {
		$data['multiimageuploader_deletedef'] = $this->config->get('multiimageuploader_deletedef');
	}      
 	$data["header"] = $this->load->controller("common/header");
 	$data["column_left"] = $this->load->controller("common/column_left");   
 	$data["footer"] = $this->load->controller("common/footer");

		$this->response->setOutput($this->load->view('extension/module/multiimageuploader', $data)); }  

		public function upload() {
        // list of valid extensions, ex. array("jpeg", "xml", "bmp")
        $allowedExtensions = array();
        // max file size in bytes
        $sizeLimit = $this->return_bytes(ini_get('upload_max_filesize'));//10 * 1024 * 1024;
        
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        
              $multi_dir='';
    		  if ($this->config->get('multiimageuploader_folder')) {
    		      $multi_dir.=$this->config->get('multiimageuploader_folder');
        		  if (!is_dir ( DIR_IMAGE.$multi_dir )) {
        		      mkdir( DIR_IMAGE.$multi_dir, 0777);
        		  }    		      
    		  }
		      if ($this->config->get('multiimageuploader_segment')) {
		          if ($this->config->get('multiimageuploader_segment') == "date") {
		              $multi_dir.=date("Y")."/";
            		  if (!is_dir ( DIR_IMAGE.$multi_dir )) {
            		      mkdir( DIR_IMAGE.$multi_dir, 0777);
            		  } 		              

            		  if (!is_dir ( DIR_IMAGE.$multi_dir )) {
            		      mkdir( DIR_IMAGE.$multi_dir, 0777);
            		  }  		              
		              $multi_dir.=date("m")."/";
            		  if (!is_dir ( DIR_IMAGE.$multi_dir )) {
            		      mkdir( DIR_IMAGE.$multi_dir, 0777);
            		  }  		              
		          }
		          
		      }          
        
        
        $result = $uploader->handleUpload(DIR_IMAGE, $multi_dir);
        
        // to pass data through iframe you will need to encode all html tags
        echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
    }
		private function return_bytes($val) {
				$val = trim($val);
				$last = strtolower($val[strlen($val)-1]);
				switch($last) {
						// The 'G' modifier is available since PHP 5.1.0
						case 'g':
								$val *= 1024;
						case 'm':
								$val *= 1024;
						case 'k':
								$val *= 1024;
				}

				return $val;
		}
}


class qqUploadedFileXhr {
    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    function save($path) {    
        $input = fopen("php://input", "r");
        $temp = tmpfile();
        $realSize = stream_copy_to_stream($input, $temp);
        fclose($input);
        
        if ($realSize != $this->getSize()){            
            return false;
        }
        
        $target = fopen($path, "w");        
        fseek($temp, 0, SEEK_SET);
        stream_copy_to_stream($temp, $target);
        fclose($target);
        
        return true;
    }
    function getName() {
        return $_GET['qqfile'];
    }
    function getSize() {
        if (isset($_SERVER["CONTENT_LENGTH"])){
            return (int)$_SERVER["CONTENT_LENGTH"];            
        } else {
            throw new Exception('Getting content length is not supported.');
        }      
    }   
}

/**
 * Handle file uploads via regular form post (uses the $_FILES array)
 */
class qqUploadedFileForm {  
    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    function save($path) {
        if(!move_uploaded_file($_FILES['qqfile']['tmp_name'], $path)){
            return false;
        }
        return true;
    }
    function getName() {
        return $_FILES['qqfile']['name'];
    }
    function getSize() {
        return $_FILES['qqfile']['size'];
    }
}

class qqFileUploader {
    private $allowedExtensions = array();
    private $sizeLimit = 10485760;
    private $file;

    function __construct(array $allowedExtensions = array(), $sizeLimit = 10485760){        
        $allowedExtensions = array_map("strtolower", $allowedExtensions);
            
        $this->allowedExtensions = $allowedExtensions;        
        $this->sizeLimit = $sizeLimit;
        
        $this->checkServerSettings();       

        if (isset($_GET['qqfile'])) {
            $this->file = new qqUploadedFileXhr();
        } elseif (isset($_FILES['qqfile'])) {
            $this->file = new qqUploadedFileForm();
        } else {
            $this->file = false; 
        }
    }
    
    private function checkServerSettings(){        
        $postSize = $this->toBytes(ini_get('post_max_size'));
        $uploadSize = $this->toBytes(ini_get('upload_max_filesize'));        
        
        if ($postSize < $this->sizeLimit || $uploadSize < $this->sizeLimit){
            $size = max(1, $this->sizeLimit / 1024 / 1024) . 'M';             
            //die("{'error':'increase post_max_size and upload_max_filesize to $size'}");    
        }        
    }
    
    private function toBytes($str){
        $val = trim($str);
        $last = strtolower($str[strlen($str)-1]);
        switch($last) {
            case 'g': $val *= 1024;
            case 'm': $val *= 1024;
            case 'k': $val *= 1024;        
        }
        return $val;
    }
    
    /**
     * Returns array('success'=>true) or array('error'=>'error message')
     */
    function handleUpload($IMAGEDIR, $uploadDirectory, $replaceOldFile = FALSE){
        if (!is_writable($IMAGEDIR.$uploadDirectory)){
            return array('error' => "Server error. Upload directory isn't writable.".$IMAGEDIR.$uploadDirectory);
        }
        
        if (!$this->file){
            return array('error' => 'No files were uploaded.');
        }
        
        $size = $this->file->getSize();
        
        if ($size == 0) {
            return array('error' => 'File is empty');
        }
        
        if ($size > $this->sizeLimit) {
            return array('error' => 'File is too large');
        }
        
        $pathinfo = pathinfo($this->file->getName());
        $filename = $pathinfo['filename'];
        //$filename = md5(uniqid());
        $ext = $pathinfo['extension'];

        if($this->allowedExtensions && !in_array(strtolower($ext), $this->allowedExtensions)){
            $these = implode(', ', $this->allowedExtensions);
            return array('error' => 'File has an invalid extension, it should be one of '. $these . '.');
        }
        
        if(!$replaceOldFile){
            /// don't overwrite previous files that were uploaded
            while (file_exists($IMAGEDIR.$uploadDirectory . $filename . '.' . $ext)) {
                $filename .= rand(10, 99);
            }
        }
        
        if ($this->file->save($IMAGEDIR.$uploadDirectory . $filename . '.' . $ext)){
            $file = $uploadDirectory.$filename.'.'.$ext;
            return array('success'=>true, 'fileName'=>$file);
        } else {
            return array('error'=> 'Could not save uploaded file.' .
                'The upload was cancelled, or server error encountered');
        }
        
    }   
 protected function validate() {

 	return !$this->error;
 }
}
