<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/owl.carousel.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/owl.theme.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/owl.carousel.min.js');

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}

					/*Additional images start*/
                              
                            $more_images['images'] = array();
                            
                            $results = $this->model_catalog_product->getProductImages($product_info['product_id']);
                            
                            foreach ($results as $result){
                                    $more_images['images'][]=array(
                                        'popup_more' => $this->model_tool_image->resize($result['image'],$setting['width'], $setting['height'])
                                    );
                                    //print_r($more_images);
                            }
                            $more_images['product_id_images']=$product_info['product_id'];

                            if($product_info['special'] > 0 AND $product_info['special'] != NULL ){
							$tag_per = ($product_info['special']*100)/$product_info['price'];
							$tag_per = round($tag_per);
							if($tag_per == 0){
							$tag_per = 1;
							}else{
							$tag_per = 100-$tag_per;
							}
							$tag = $product_info['price'] - $product_info['special'];
							}else{
							$tag = 0;
							$tag_per = 0;
							}
                            
                    /*Additional images end*/


				$this->load->model('extension/module/options_combinations');
				if($this->config->get('config_opt_comb_status')){
					$file = 'library/optionscombinations/modify_product_card_featured_prices.php';
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
						'product_id'  => $product_info['product_id'],

			    'product_combined_options'  => $this->model_extension_module_options_combinations->getProductOptions($product_info['product_id']),
				'product_options'  => $this->config->get('config_opt_comb_bullet') ? $this->model_extension_module_options_combinations->getProductOptions($product_info['product_id'], $this->model_extension_module_options_combinations->getProductBulletOptionId($product_info['product_id']), $setting['width'], $setting['height']) : array(),
				'bullet_image_origin' => $this->config->get('config_opt_comb_bullet') ? $this->model_extension_module_options_combinations->getProductBulletImageOrigin($product_info['product_id']) : '',
			
						'thumb'       => $image,
						'tag'       => $tag,
						'tag_per' => $tag_per,
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						  // Add images Data 
                                'more_images' => $more_images, //Additional images
                           //End
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}