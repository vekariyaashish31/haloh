<?php
//==============================================
// Cross Selling Bundle
// Author 	: OpenCartBoost
// Email 	: support@opencartboost.com
// Website 	: http://www.opencartboost.com
//==============================================
class ControllerExtensionModuleCrossSelling extends Controller {
	public function index($setting) {
		static $module = 0;
		
		$this->load->language('extension/module/cross_selling');

		$this->load->model('catalog/product');
		$this->load->model('extension/module/cross_selling');
		$this->load->model('tool/image');
		
		$data['products'] = [];

		$results = [];
		
		$product_type = $setting['type'];
		
		$product_id = (isset($this->request->get['product_id'])) ? $this->request->get['product_id'] : 0;

		/*
		$also_filter = [
			'product_id'	=> $product_id,
			'start' 		=> 0,
			'limit' 		=> $setting['limit']
		];
		*/
		
		switch($product_type) {
			case "also_bought":
				$data['heading_title'] = $this->language->get('text_also_bought');
				
				//$results = $this->model_module_cross_selling->getAlsoBoughtProducts($also_filter);
				$results = $this->model_extension_module_cross_selling->getAlsoBoughtProducts($product_id, $setting['limit']);
			break;
			
			case "also_viewed":
				$data['heading_title'] = $this->language->get('text_also_viewed');
				
				//$results = $this->model_module_cross_selling->getAlsoViewedProducts($also_filter);
				$results = $this->model_extension_module_cross_selling->getAlsoViewedProducts($product_id, $setting['limit']);
			break;
			
			case "recently_purchased":
				$data['heading_title'] = $this->language->get('text_recently_purchased');
				
				$results = $this->model_extension_module_cross_selling->getRecentlyPurchasedProducts($setting['limit']);
			break;
			
			case "recently_viewed":
				$data['heading_title'] = $this->language->get('text_recently_viewed');
				
				$results = $this->model_extension_module_cross_selling->getRecentlyViewedProducts($setting['limit']);
			break;
		}
		
		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}
				
				/*
				if ((float)$result['special'] && $result['price'] > 0) {
					$saving = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')) - $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
					$persen_save = round((($result['price'] - $result['special'])/$result['price'])*100, 1);
					
					$text_save = $this->language->get('text_save');
					$text_save_off = $this->language->get('text_save_off');
					
					if ($this->language->get('direction') == 'rtl') {
						$prod_save = '('.$text_save_off .''. $persen_save .') '. $saving .' '. $text_save;
					} else {
						$prod_save = $text_save .' '. $saving .' ('. $persen_save .''. $text_save_off .')';
					}
				} else {
					$prod_save = false;
				}
				*/
				
				$data['products'][] = [
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					//'prod_save' => $prod_save,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				];
			}
		
			$data['module'] = $module++;
		
			return $this->load->view('extension/module/cross_selling', $data);
		}
	}
}