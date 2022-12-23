<?php
class ControllerExtensionmoduleDigitCartPriceText extends Controller {
	private $moduleName = 'digitcart_price_text';
	private $moduleFilePath = 'extension/module/digitcart_price_text';
	private $moduleModel = 'model_extension_module_digitcart_price_text';
	public function catalogViewProductBefore($route = false, &$data = false, &$output = false){
		if($this->config->get('module_digitcart_price_text_status')){
			$this->load->model($this->moduleFilePath);
			$digitcart_price_text = $this->{$this->moduleModel}->getPriceText($this->request->get['product_id']);
			$tp = $this->config->get('module_digitcart_price_text_text_position');
			if($digitcart_price_text){
				$digitcart_price_text = html_entity_decode($digitcart_price_text, ENT_QUOTES, 'utf-8');
				if($tp == 'before'){
					$data['price'] = '<div class="digitcart-price-text digitcart-price-text-before">' . $digitcart_price_text . '</div>' . $data['price'];
				}
				if($tp == 'replace'){
					$data['price'] = '<div class="digitcart-price-text digitcart-price-text-replace">' . $digitcart_price_text . '</div>';
				}
				if($tp == 'after'){
					$data['price'] = $data['price'] . '<div class="digitcart-price-text digitcart-price-text-after">' . $digitcart_price_text . '</div>';
				}
			}
		}
	}
	public function catalogViewProductListBefore($route = false, &$data = false, &$output = false){
		if($this->config->get('module_digitcart_price_text_status') && isset($data['products'])){
			$tp = $this->config->get('module_digitcart_price_text_text_position');
			$this->load->model($this->moduleFilePath);
			$modified_products = array();
			foreach($data['products'] as $product){
				if(isset($product['product_id']) && isset($product['price'])){
					$digitcart_price_text = $this->{$this->moduleModel}->getPriceText($product['product_id']);
					if($digitcart_price_text){
						$digitcart_price_text = html_entity_decode($digitcart_price_text, ENT_QUOTES, 'utf-8');
						if($tp == 'before'){
							$replacement = array('price' => '<div class="digitcart-price-text digitcart-price-text-before">' . $digitcart_price_text . '</div>' . $product['price']);
						}
						if($tp == 'replace'){
							$replacement = array('price' => '<div class="digitcart-price-text digitcart-price-text-replace">' . $digitcart_price_text . '</div>');
						}
						if($tp == 'after'){
							$replacement = array('price' => $product['price'] . '<div class="digitcart-price-text digitcart-price-text-after">' . $digitcart_price_text . '</div>');
						}
						$product = array_replace($product, $replacement);
					}
				}
				$modified_products[] = $product;
			}
			$data['products'] = $modified_products;
		}
	}
}