<?php
class ControllerExtensionModuleCustomSearch extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/custom_search');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module/custom_search');


		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

			// echo "<pre>"; print_r($this->customer->isLogged()); echo "</pre>";die; 
			if (empty($this->customer->isLogged())) {
				$this->session->data['redirect'] = $this->url->link('account/account', '', true);

				$this->response->redirect($this->url->link('account/login', '', true));
			}else{

				foreach ($this->request->post as $key => $value) {
					$this->session->data[$key] = $value;
					// $this->session->data['custom_search'][$key] = $value;
				}


$product_url 	= $this->request->post['product_url'];
$email 			= $this->request->post['product_name'];
$telephone 		= $this->request->post['price'];
$quantity 		= $this->request->post['quantity'];
$this->request->post['price'] = 0;
$this->load->model('extension/module/custom_search');



$product_id = 20;
//$product_id = $this->model_extension_module_custom_search->addProductCustomSearch($this->request->post);
			
$invoice_prefix 			= $this->config->get('config_invoice_prefix');
$store_id 					= $this->config->get('config_store_id');
$store_name 				= $this->config->get('config_name');
$store_url 					= $this->config->get('config_url');
$customer_id    			= $this->customer->isLogged();
$customer_group_id 			= '1';
$firstname 					= $this->customer->getFirstName();
$lastname 					= $this->customer->getLastName();
$custom_field 				= '';
$payment_firstname 			= $this->customer->getFirstName();
$payment_lastname 			= $this->customer->getLastName();

$payment_company 			= '';
$payment_address_1 			= '123';
$payment_address_2 			= '123';
$payment_city 				= 'Thailand';
$payment_postcode 			= '963215';
$payment_country 			= 'Thailand';
$payment_country_id 		= '99';
$payment_zone 				= 'Nakhon Ratchasima';
$payment_zone_id 			= '1478';
$payment_address_format 	= '';
$payment_custom_field 		= '';
$payment_method 			= 'Cash On Delivery';
$payment_code 				= 'cod';
$shipping_firstname 		= $this->customer->getFirstName();
$shipping_lastname 			= $this->customer->getLastName();
$shipping_company 			= $this->session->data['shipping_address']['company'];
$shipping_address_1 		= $this->session->data['shipping_address']['address_1'];
$shipping_address_2 		= $this->session->data['shipping_address']['address_2'];
$shipping_postcode 			= $this->session->data['shipping_address']['postcode'];
$shipping_city 				= $this->session->data['shipping_address']['city'];
$shipping_zone_id 			= $this->session->data['shipping_address']['zone_id'];
$shipping_zone 				= $this->session->data['shipping_address']['zone'];
$shipping_country 			= $this->session->data['shipping_address']['country'];
$shipping_country_id 		= $this->session->data['shipping_address']['country_id'];
$shipping_address_format 	= '';
$shipping_custom_field 		= '';
$shipping_method 			= 'Free Shipping';
$shipping_code 				= 'free.free';
$comment 					= '';
$total 						= $this->request->post['price'];
$affiliate_id 				= '0';
$commission 				= '0';
$marketing_id 				= '0';
$tracking 					= '';
$language_id 				= '1';
$currency_id 				= '4';
$currency_code 				= 'USD';
$currency_value 			= '1.00000000';
$ip 						= $this->request->server['REMOTE_ADDR'];
$user_agent 				= '';
$forwarded_ip 				= '';
$accept_language 			= 'en-US,en;q=0.9,hi;q=0.8';
$order_status_id 			= 17;


$this->db->query("INSERT INTO `" . DB_PREFIX . "order` SET invoice_prefix = '" . $this->db->escape($invoice_prefix) . "', store_id = '" . (int)$store_id . "', store_name = '" . $this->db->escape($store_name) . "', store_url = '" . $this->db->escape($store_url) . "', customer_id = '" . (int)$customer_id . "', customer_group_id = '" . (int)$customer_group_id . "', firstname = '" . $this->db->escape($firstname) . "', lastname = '" . $this->db->escape($lastname) . "', email = '" . $this->db->escape($email) . "', telephone = '" . $this->db->escape($telephone) . "', custom_field = '" . $this->db->escape(isset($custom_field) ? json_encode($custom_field) : '') . "', payment_firstname = '" . $this->db->escape($payment_firstname) . "', payment_lastname = '" . $this->db->escape($payment_lastname) . "', payment_company = '" . $this->db->escape($payment_company) . "', payment_address_1 = '" . $this->db->escape($payment_address_1) . "', payment_address_2 = '" . $this->db->escape($payment_address_2) . "', payment_city = '" . $this->db->escape($payment_city) . "', payment_postcode = '" . $this->db->escape($payment_postcode) . "', payment_country = '" . $this->db->escape($payment_country) . "', payment_country_id = '" . (int)$payment_country_id . "', payment_zone = '" . $this->db->escape($payment_zone) . "', payment_zone_id = '" . (int)$payment_zone_id . "', payment_address_format = '" . $this->db->escape($payment_address_format) . "', payment_custom_field = '" . $this->db->escape(isset($payment_custom_field) ? json_encode($payment_custom_field) : '') . "', payment_method = '" . $this->db->escape($payment_method) . "', payment_code = '" . $this->db->escape($payment_code) . "', shipping_firstname = '" . $this->db->escape($shipping_firstname) . "', shipping_lastname = '" . $this->db->escape($shipping_lastname) . "', shipping_company = '" . $this->db->escape($shipping_company) . "', shipping_address_1 = '" . $this->db->escape($shipping_address_1) . "', shipping_address_2 = '" . $this->db->escape($shipping_address_2) . "', shipping_city = '" . $this->db->escape($shipping_city) . "', shipping_postcode = '" . $this->db->escape($shipping_postcode) . "', shipping_country = '" . $this->db->escape($shipping_country) . "', shipping_country_id = '" . (int)$shipping_country_id . "', shipping_zone = '" . $this->db->escape($shipping_zone) . "', shipping_zone_id = '" . (int)$shipping_zone_id . "', shipping_address_format = '" . $this->db->escape($shipping_address_format) . "', shipping_custom_field = '" . $this->db->escape(isset($shipping_custom_field) ? json_encode($shipping_custom_field) : '') . "', shipping_method = '" . $this->db->escape($shipping_method) . "', shipping_code = '" . $this->db->escape($shipping_code) . "', comment = '" . $this->db->escape($comment) . "', total = '" . (float)$total . "', affiliate_id = '" . (int)$affiliate_id . "', commission = '" . (float)$commission . "', marketing_id = '" . (int)$marketing_id . "', tracking = '" . $this->db->escape($tracking) . "', language_id = '" . (int)$language_id . "', currency_id = '" . (int)$currency_id . "', currency_code = '" . $this->db->escape($currency_code) . "', currency_value = '" . (float)$currency_value . "', ip = '" . $this->db->escape($ip) . "', forwarded_ip = '" .  $this->db->escape($forwarded_ip) . "', user_agent = '" . $this->db->escape($user_agent) . "', accept_language = '" . $this->db->escape($accept_language) . "', date_added = NOW(), date_modified = NOW()");
		
$order_id = $this->db->getLastId();
$tntorder_id = 'CCG-'.rand(10000000,100000000);





$this->db->query("INSERT INTO " . DB_PREFIX . "order_product SET order_id = '" . (int)$order_id . "', product_id = '" . (int)$product_id . "', name = 'test', quantity = '" . (int)$this->request->post['quantity'] . "', price = '" . (float)$this->request->post['price'] . "', total = '" . (float)$this->request->post['price'] . "',product_url = '" . $this->db->escape($this->request->post['product_url']) . "', details = '" . $this->db->escape($this->request->post['details']) . "'");



$this->db->query("INSERT INTO " . DB_PREFIX . "order_total SET order_id = '" . (int)$order_id . "', code = 'sub_total', title = 'Sub-Total', `value` = '" . (float)$this->request->post['price'] . "', sort_order = '1'");

$this->db->query("INSERT INTO " . DB_PREFIX . "order_total SET order_id = '" . (int)$order_id . "', code = 'shipping', title = 'Free Shipping', `value` = '0', sort_order = '3'");
$this->db->query("INSERT INTO " . DB_PREFIX . "order_total SET order_id = '" . (int)$order_id . "', code = 'total', title = 'Total', `value` = '0', sort_order = '9'");



$this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int)$order_status_id . "',tntorder_id = '" . $tntorder_id . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");


$this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', order_status_id = '" . (int)$order_status_id . "',  date_added = NOW()");


$this->response->redirect($this->url->link('extension/module/custom_search/popupconfirm', 'tntorder_id=' . $tntorder_id, true));

				/*$product_id = $this->model_extension_module_custom_search->addProductCustomSearch($this->request->post);

				$this->session->data['temp_product_id'] = $product_id;

				$quantity = $this->request->post['quantity'];
				$option = array();
				$recurring_id = 0;
				
				$this->cart->add($product_id, $quantity, $option, $recurring_id);
				
				$this->session->data['success'] = $this->language->get('text_add');

				$this->response->redirect($this->url->link('checkout/checkout', '', true));*/
			}

		}

		$this->getForm();
	}

	protected function getForm() {
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/custom_search', '', true)
		);

		$data['text_custom_search'] = $this->language->get('text_custom_search_add');

		if (isset($this->error['product_url'])) {
			$data['error_product_url'] = $this->error['product_url'];
		} else {
			$data['error_product_url'] = '';
		}

		if (isset($this->error['product_name'])) {
			$data['error_product_name'] = $this->error['product_name'];
		} else {
			$data['error_product_name'] = '';
		}

		if (isset($this->error['price'])) {
			$data['error_price'] = $this->error['price'];
		} else {
			$data['error_price'] = '';
		}

		if (isset($this->error['quantity'])) {
			$data['error_quantity'] = $this->error['quantity'];
		} else {
			$data['error_quantity'] = '';
		}

		$data['product_name'] = @$this->customer->getEmail();
		$data['price'] = @$this->customer->getTelephone();
		
		$data['action'] = $this->url->link('extension/module/custom_search', '', true);

		if (isset($this->request->post['product_url'])) {
			$data['product_url'] = $this->request->post['product_url'];
		} else {
			$data['product_url'] = '';
		}

		/*if (isset($this->request->post['product_name'])) {
			$data['product_name'] = $this->request->post['product_name'];
		} else {
			$data['product_name'] = '';
		}

		if (isset($this->request->post['price'])) {
			$data['price'] = $this->request->post['price'];
		} else {
			$data['price'] = '';
		}*/

		if (isset($this->request->post['quantity'])) {
			$data['quantity'] = $this->request->post['quantity'];
		} else {
			$data['quantity'] = '';
		}

		if (isset($this->request->post['details'])) {
			$data['details'] = $this->request->post['details'];
		} else {
			$data['details'] = '';
		}
		
		$data['back'] = $this->url->link('extension/module/custom_search', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('extension/module/custom_search_form', $data));
	}

	public function popupconfirm() {
		$this->load->language('extension/module/custom_search');

		$this->document->setTitle($this->language->get('heading_title'));
	
		$data['tntorder_id'] = $this->request->get['tntorder_id'];

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/custom_search', '', true)
		);

		$data['text_custom_search'] = $this->language->get('text_custom_search_add');
		
		$data['back'] = $this->url->link('extension/module/custom_search', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('extension/module/popupconfirm', $data));

	}
	protected function validateForm() {
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $this->request->post['product_url'])) {
			$this->error['product_url'] = $this->language->get('error_product_url');
		}

		

		if ((utf8_strlen(trim($this->request->post['quantity'])) < 1) || (utf8_strlen(trim($this->request->post['quantity'])) > 11)) {
			$this->error['quantity'] = $this->language->get('error_quantity');
		}

		return !$this->error;
	}
}