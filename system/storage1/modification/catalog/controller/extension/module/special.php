<?php
class ControllerExtensionModuleSpecial extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

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


				$insp_data['insp_images'] = array();
				$insp_results = $this->model_catalog_product->getProductImages($result['product_id']);

				

				foreach ($insp_results as $insp_result) {
					$insp_data['insp_images'][] = array('popup' => $this->model_tool_image->resize($insp_result['image'],$setting['width'], $setting['height']));
				}

				if($result['special'] > 0 AND $result['special'] != NULL ){
				$tag_per = ($result['special']*100)/$result['price'];
				$tag_per = round($tag_per);
				if($tag_per == 0){
				$tag_per = 1;
				}else{
				$tag_per = 100-$tag_per;
				}
				$tag = $result['price'] - $result['special'];
				}else{
				$tag = 0;
				$tag_per = 0;
				}


				$this->load->model('extension/module/options_combinations');
				if($this->config->get('config_opt_comb_status')){
					$file = 'library/optionscombinations/modify_product_card_prices.php';
					$path_modification = DIR_MODIFICATION.'system/'.$file;
					$path_temp = DIR_SYSTEM.$file;
					require (is_file($path_modification) ? $path_modification : $path_temp);
					$data['text_starting_from'] = $this->config->get('config_opt_comb_text_starting_from_' . $this->config->get('config_language_id'));
				}

				if($this->config->get('config_opt_comb_bullet')) {
					$data['bullet_radius'] = $this->config->get('config_opt_comb_bullet_radius');
					$data['bullet_selected_color'] = $this->config->get('config_opt_comb_bullet_selected_color');
				}
			
				$data['products'][] = array(
					'product_id'  => $result['product_id'],

			        'product_combined_options'  => $this->model_extension_module_options_combinations->getProductOptions($result['product_id']),
					'product_options'  => $this->config->get('config_opt_comb_bullet') ? $this->model_extension_module_options_combinations->getProductOptions($result['product_id'], $this->model_extension_module_options_combinations->getProductBulletOptionId($result['product_id'])) : array(),
					'bullet_image_origin' => $this->config->get('config_opt_comb_bullet') ? $this->model_extension_module_options_combinations->getProductBulletImageOrigin($result['product_id']) : '', 
					'thumb'       => $image,
					'tag'       => $tag,
					'tag_per' => $tag_per,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					    // Add images Data 
					'insp_images' => $insp_data['insp_images'],
					//End
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			return $this->load->view('extension/module/special', $data);
		}
	}
}