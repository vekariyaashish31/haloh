<?php

class ControllerCommonHeader extends Controller {

	public function index() {

            $this->document->addStyle('catalog/view/theme/default/devmanextensions/options_combinations/stylesheet/image-picker.css');
            $this->document->addScript('catalog/view/theme/default/devmanextensions/options_combinations/javascript/image-picker.min.js'); 

		// Analytics

		$this->load->model('setting/extension');



		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {

			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {

				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));

			}

		}



		if ($this->request->server['HTTPS']) {

			$server = $this->config->get('config_ssl');

		} else {

			$server = $this->config->get('config_url');

		}



		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {

			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');

		}




               $data['quickview'] = $this->load->controller('extension/module/inspirequickview');
            
		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;

		$data['description'] = $this->document->getDescription();

		$data['keywords'] = $this->document->getKeywords();

		$data['links'] = $this->document->getLinks();

		$data['styles'] = $this->document->getStyles();

		$data['scripts'] = $this->document->getScripts('header');

		$data['lang'] = $this->language->get('code');

		$data['direction'] = $this->language->get('direction');

			$data['text_faq'] = $this->language->get('text_faq');
				$data['faq'] = $this->url->link('extension/faq');
				$data['faqtop'] = $this->config->get('module_faqgroup_top');
				

		$data['name'] = $this->config->get('config_name');



		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {

			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');

		} else {

			$data['logo'] = '';

		}



		$this->load->language('common/header');



		// Wishlist

		if ($this->customer->isLogged()) {

			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());

		} else {

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));

		}



		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));



		$data['home'] = $this->url->link('common/home');

		$data['wishlist'] = $this->url->link('account/wishlist', '', true);

		$data['logged'] = $this->customer->isLogged();

		$data['account'] = $this->url->link('account/account', '', true);

		$data['register'] = $this->url->link('account/register', '', true);

		$data['login'] = $this->url->link('account/login', '', true);

		$data['order'] = $this->url->link('account/order', '', true);

		$data['transaction'] = $this->url->link('account/transaction', '', true);

		$data['download'] = $this->url->link('account/download', '', true);

		$data['logout'] = $this->url->link('account/logout', '', true);

		$data['shopping_cart'] = $this->url->link('checkout/cart');

		$data['checkout'] = $this->url->link('checkout/checkout', '', true);

		$data['contact'] = $this->url->link('information/contact');

		$data['telephone'] = $this->config->get('config_telephone');

		$data['open'] = ($this->config->get('config_open'));



		$data['language'] = $this->load->controller('common/language');

		$data['currency'] = $this->load->controller('common/currency');

		$data['search'] = $this->load->controller('common/search');

		$data['cart'] = $this->load->controller('common/cart');

			$data['redirect_module'] = $this->load->controller('extension/module/redirect');
			

		$data['menu'] = $this->load->controller('common/menu');



		$this->load->model('catalog/menu');

		$menus = $this->model_catalog_menu->getMenus();

		$data['social_menu'] = array(); $data['main_menu'] = array();

		foreach ($menus as $row) {

			if($row['menu_type'] == 1){

				$data['main_menu'][] = array(

					'menu_title'=> $row['menu_title'],

					'menu_url'	=> $row['menu_url']

				);

			}else{

				$data['social_menu'][] = array(

					'menu_title'=> $row['menu_title'],

					'menu_url'	=> $row['menu_url']

				);

			}

		}



		$data['special'] = $this->url->link('product/special');

		$data['sitemap'] = $this->url->link('information/sitemap');

		$data['brand'] = $this->url->link('product/manufacturer');

		$data['hcom'] = $this->url->link('product/compare');



		$data['background_color'] = $this->config->get('config_background_color');

		$data['text_color'] = $this->config->get('config_text_color');



		return $this->load->view('common/header', $data);

	}

}

