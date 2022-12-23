<?php
class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');

		if (isset($this->session->data['order_id'])) {
			$this->cart->clear();

            // Custom Search
            if (isset( $this->session->data['temp_product_id'] )) {
                if (isset($this->session->data['product_url'])) {
                    $this->db->query("UPDATE " . DB_PREFIX . "order_product SET product_url = '" . $this->db->escape($this->session->data['product_url']) . "', details = '" . $this->db->escape($this->session->data['details']) . "' WHERE model = 'CUSTOM_ORDER' AND order_id = '" . (int)$this->session->data['order_id'] . "'");
                    $this->db->query("UPDATE " . DB_PREFIX . "product SET status = '0' WHERE model = 'CUSTOM_ORDER'");
                }
                //$this->load->model('extension/module/custom_search');
                //$this->model_extension_module_custom_search->deleteProduct($this->session->data['temp_product_id']);

                unset($this->session->data['temp_product_id']);
                unset($this->session->data['product_url']);
                unset($this->session->data['product_name']);
                unset($this->session->data['price']);
                unset($this->session->data['quantity']);
                unset($this->session->data['details']);
            }
            // Custom Search - / End
            

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}