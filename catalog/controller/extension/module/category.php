<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/category');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		

		// foreach ($categories as $category) {
		// 	$children_data = array();

		// 	if ($category['category_id'] == $data['category_id']) {
		// 		$children = $this->model_catalog_category->getCategories($category['category_id']);

		// 		foreach($children as $child) {
		// 			$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

		// 			$children_data[] = array(
		// 				'category_id' => $child['category_id'],
		// 				'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
		// 				'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
		// 			);
		// 		}
		// 	}

		// 	$filter_data = array(
		// 		'filter_category_id'  => $category['category_id'],
		// 		'filter_sub_category' => true
		// 	);

		// 	$data['categories'][] = array(
		// 		'category_id' => $category['category_id'],
		// 		'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
		// 		'children'    => $children_data,
		// 		'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
		// 	);
		// }

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
					'children' => $children_data,
					'thumb_menu' => HTTP_SERVER . 'image/' . $category['image'],
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		return $this->load->view('extension/module/category', $data);
	}
}