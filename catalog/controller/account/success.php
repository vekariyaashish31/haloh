<?php
class ControllerAccountSuccess extends Controller {
	public function index() {
		$this->load->language('account/success');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('account/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_message'), $this->url->link('information/contact'));
			
			$this->load->model('account/customer');
			$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
			if ($customer_info['shipping_code'] != '') {
				$data['text_shipping_code'] = 'Your Shipping Code is / รหัสลูกค้าของคุณคือ: <span style="background: #ffe4c4;padding: 2px 10px;">'.$customer_info['shipping_code'].'</span>';
			}
		} else {
			$data['text_message'] = sprintf($this->language->get('text_approval'), $this->config->get('config_name'), $this->url->link('information/contact'));
		}
		$data['button_continue'] = 'กรอกที่อยู่การจัดส่ง';
		if ($this->cart->hasProducts()) {
			$data['continue'] = $this->url->link('checkout/cart');
		} else {
			// $data['continue'] = $this->url->link('account/account', '', true);
			$data['continue'] = $this->url->link('account/address/add', '', true);
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}