<?php

class ControllerCommonMenu extends Controller {

	public function index() {

		$this->load->language('common/menu');



		// Menu

		$this->load->model('catalog/category');



		$this->load->model('catalog/product');



		$data['categories'] = array();



		$categories = $this->model_catalog_category->getCategories(0);



		foreach ($categories as $category) {

			if ($category['top']) {

				// Level 2

				$children_data = array();



				$children = $this->model_catalog_category->getCategories($category['category_id']);



				foreach ($children as $child) {

					// Level 3 

                                $children_data_3 = array();



                                $children_3 = $this->model_catalog_category->getCategories($child['category_id']);



                                foreach ($children_3 as $child_3) {



                                    $filter_data_3 = array(

                                        'filter_category_id'  => $child_3['category_id'],

                                        'filter_sub_category' => true

                                    );



                                    $children_data_3[] = array(

                                        'name'  => $child_3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_3) . ')' : ''),

                                        'href'  => $this->url->link('product/category', 'path=' . $child['category_id'] . '_' . $child_3['category_id'])

                                    );

                                }

                                //end of level 3



					$filter_data = array(

						'filter_category_id'  => $child['category_id'],

						'filter_sub_category' => true

					);



					$children_data[] = array(

						'thumb_menus' => HTTP_SERVER . 'image/' .$child['image'],

						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),

						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),

						'grand_childs' => $children_data_3//for level 3

					);

				}



				// Level 1

				$data['categories'][] = array(

					'name'     => $category['name'],

					'thumb_menu' => HTTP_SERVER . 'image/' . $category['image'],

					'children' => $children_data,

					'column'   => $category['column'] ? $category['column'] : 1,

					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])

				);

			}

		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['search'] = $this->load->controller('common/search');
		$data['home'] = $this->url->link('common/home');
		$data['name'] = $this->config->get('config_name');
		$data['hcom'] = $this->url->link('product/compare');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);


		return $this->load->view('common/menu', $data);

	}

}

