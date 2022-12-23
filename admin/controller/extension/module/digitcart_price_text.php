<?php
class ControllerExtensionmoduleDigitCartPriceText extends Controller {
	private $error = array();
	private $moduleName = 'digitcart_price_text';
	private $moduleFilePath = 'extension/module/digitcart_price_text';
	private $moduleModel = 'model_extension_module_digitcart_price_text';
	private $eventFilePath = 'setting/event';
	private $eventModel = 'model_setting_event';
	private function moduleEvents(){
		return array(
			array(
				'trigger' => 'admin/view/catalog/product_form/after',
				'action' => $this->moduleFilePath . '/adminViewProductAfter'
			),
			array(
				'trigger' => 'admin/controller/catalog/product/*/before',
				'action' => $this->moduleFilePath . '/adminControllerProductBefore'
			),
			array(
				'trigger' => 'admin/model/catalog/product/editProduct/after',
				'action' => $this->moduleFilePath . '/adminModelProductEditAfter'
			),
			array(
				'trigger' => 'admin/model/catalog/product/addProduct/after',
				'action' => $this->moduleFilePath . '/adminModelProductAddAfter'
			),
			array(
				'trigger' => 'catalog/view/product/product/before',
				'action' => $this->moduleFilePath . '/catalogViewProductBefore'
			),
			array(
				'trigger' => 'catalog/view/product/*/before',
				'action' => $this->moduleFilePath . '/catalogViewProductListBefore'
			),
			array(
				'trigger' => 'catalog/view/account/wishlist/before',
				'action' => $this->moduleFilePath . '/catalogViewProductListBefore'
			),
			array(
				'trigger' => 'catalog/view/extension/module/*/before',
				'action' => $this->moduleFilePath . '/catalogViewProductListBefore'
			)
		);
	}
	public function index() {
		$lang = $this->load->language($this->moduleFilePath);
		$data['heading_title'] = $this->language->get('heading_title');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addStyle('view/javascript/jquery-te/jquery-te-1.4.0.css');
		$this->document->addScript('view/javascript/jquery-te/jquery-te-1.4.0.min.js');
		$this->load->model('setting/setting');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_' . $this->moduleName, $this->request->post);
			if(isset($this->request->post['manual_products']['update'])){
				$this->load->model($this->moduleFilePath);
				foreach($this->request->post['manual_products']['update'] as $product_id => $languages_text){
					$this->{$this->moduleModel}->setPriceText($product_id, $languages_text);
				}
			}
			if(isset($this->request->post['manual_products']['delete'])){
				$this->load->model($this->moduleFilePath);
				foreach($this->request->post['manual_products']['delete'] as $product_id){
					$this->{$this->moduleModel}->deletePriceText($product_id);
				}
			}
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->moduleFilePath, 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['action'] = $this->url->link($this->moduleFilePath, 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$vars = array(
			'status' => false,
			'text_position' => 'replace',
			'for_out_of_stock' => array()
		);
		foreach($vars as $var => $default){
			if (isset($this->request->post['module_' . $this->moduleName . '_' . $var])) {
				$data['module_' . $this->moduleName . '_' . $var] = $this->request->post['module_' . $this->moduleName . '_' . $var];
			} elseif($this->config->get('module_' . $this->moduleName . '_' . $var)) {
				$data['module_' . $this->moduleName . '_' . $var] = $this->config->get('module_' . $this->moduleName . '_' . $var);
			} else {
				$data['module_' . $this->moduleName . '_' . $var] = $default;
			}
		}
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->model($this->moduleFilePath);
		$data['products'] = array();
		$products = $this->{$this->moduleModel}->getProducts();
		foreach ($products as $product){
			$data['products'][] = array(
				'product_id' => $product['product_id'],
				'name' => $product['name'],
				'languages' => $product['languages'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($product['date_added'])),
			);
		}
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view($this->moduleFilePath, $data));
	}
	protected function createHook($output, $pre, $post){
		$output = ' ' . $output;
		$ini = strpos($output, $pre);
		if ($ini == 0) return '';
		$ini += strlen($pre);
		$len = strpos($output, $post, $ini) - $ini;
		$between =  substr($output, $ini, $len);
		return $pre . $between . $post;
	}
	public function adminViewProductAfter(&$route = false, &$data = false, &$output = false)  {
		$this->load->model($this->moduleFilePath);
		if (isset($this->request->post['digitcart_price_text'])) {
			$data['digitcart_price_text'] = $this->request->post['digitcart_price_text'];
		} elseif (isset($this->request->get['product_id'])) {
			$data['digitcart_price_text'] = $this->{$this->moduleModel}->getPriceText($this->request->get['product_id']);
		} else {
			$data['digitcart_price_text'] = array();
		}
		$l = $this->load->language($this->moduleFilePath);
		$h1 = $this->createHook($output, '<input type="text" name="price" value="', '/>');
		$r1 = '';
		foreach($data['languages'] as $language){
			$v = isset($data[$this->moduleName][$language['language_id']]) ? $data[$this->moduleName][$language['language_id']] : '';
			$r1 .= '
				<hr>
				<div class="input-group">
					<span class="input-group-addon"><img src="language/' . $language['code'] . '/' . $language['code'] . '.png" title="' . $language['name'] . '" /></span>
					<input 
						name="' . $this->moduleName . '[' . $language['language_id'] . ']"
						value="' . $v . '" 
						placeholder="' . $l['text_custom_text'] . '" 
						class="pre-editor form-control" 
						type="text"
					/>
					<span data-toggle="tooltip" title="' . $l['text_editor'] . '" class="input-group-addon btn call-editor"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
				</div>
			';
		}
		$r1 = $h1 . $r1;
		$h2 = '<footer';
		$r2 = '
			<style>
			.jqte .jqte_tool .jqte_tool_label {
			  display: inline-block;
			  height: auto;
			  line-height: normal;
			  vertical-align: middle;
			}
			.jqte_toolbar {
			  border-color: #ccc;
			}
			.jqte_editor, .jqte_source {
			  border-bottom: 1px solid #ccc;
			  border-left: 1px solid #ccc;
			  border-right: 1px solid #ccc;
			  font-family: inherit;
			  min-height: 40px;
			}
			.jqte_toolbar div {
			  z-index: 999;
			}
			.input-group {
			  margin-bottom: 10px;
			}
			.jqte .jqte_editor * {
			  font-family: inherit;
			}
			.jqte {
			  border-color: #ccc;
			  border-radius: 0;
			  border-width: 1px 0 0;
			  box-shadow: none;
			  line-height: normal;
			  margin: 0;
			  overflow: visible;
			}
			</style>
			<script>
			if(jQuery().jqte){
				$(".call-editor").on("click", function(){
					var target = $(this).parent().find(".pre-editor");
					if(target.hasClass("editored")){
						target.removeClass("editored").jqte({"status" : false});
					} else {
						target.addClass("editored").jqte({"status" : true})
					}
				});
			}
			</script>
		';
		$r2 = $r2 . $h2;
		$output = str_replace(
			array(
				$h1,
				$h2
			),
			array(
				$r1,
				$r2
			),
			$output
		);
	}
	public function adminControllerProductBefore($route = false, $data = false){
		$this->document->addStyle('view/javascript/jquery-te/jquery-te-1.4.0.css');
		$this->document->addScript('view/javascript/jquery-te/jquery-te-1.4.0.min.js');
	}
	public function adminModelProductEditAfter($route = false, $data = false, $c = false){
		$product_id = $this->request->get['product_id'];
		if(isset($this->request->post[$this->moduleName]) && is_array($this->request->post[$this->moduleName]) && !empty($this->request->post[$this->moduleName])){
			$this->load->model($this->moduleFilePath);
			$this->{$this->moduleModel}->setPriceText($product_id, $this->request->post[$this->moduleName]);
		}
	}
	public function adminModelProductAddAfter($route = false, $data = false, $product_id = false, $c = false){
		if(isset($this->request->post[$this->moduleName]) && is_array($this->request->post[$this->moduleName]) && !empty($this->request->post[$this->moduleName])){
			$this->load->model($this->moduleFilePath);
			$this->{$this->moduleModel}->setPriceText($product_id, $this->request->post[$this->moduleName]);
		}
	}
	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->moduleFilePath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
	}
	public function install(){
		/* create database table */
		$this->load->model($this->moduleFilePath);
		$this->{$this->moduleModel}->createTable();
		$this->load->model($this->eventFilePath);
		foreach($this->moduleEvents() as $event){
			$this->{$this->eventModel}->addEvent($this->moduleName, $event['trigger'], $event['action']);
		}
	}
	public function uninstall(){
		$this->load->model($this->eventFilePath);
		$this->{$this->eventModel}->deleteEventByCode($this->moduleName);
	}
}