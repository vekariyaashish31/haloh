<?php
class ControllerExtensionModulefaqgroup extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/faqgroup');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/faq');
		$this->model_extension_faq->createtable();
		
		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_faqgroup', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_searchkeyword'] = $this->language->get('entry_searchkeyword');
		
		$data['help_top'] = $this->language->get('help_top');
		$data['help_bottom'] = $this->language->get('help_bottom');
		
		$data['entry_top'] = $this->language->get('entry_top');
		$data['entry_bottom'] = $this->language->get('entry_bottom');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true),
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/faqgroup', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/faqgroup', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);


		if (isset($this->request->post['module_faqgroup_status'])) {
			$data['module_faqgroup_status'] = $this->request->post['module_faqgroup_status'];
		} else {
			$data['module_faqgroup_status'] = $this->config->get('module_faqgroup_status');
		}
		
		if (isset($this->request->post['module_faqgroup_search'])) {
			$data['module_faqgroup_search'] = $this->request->post['module_faqgroup_search'];
		} else {
			$data['module_faqgroup_search'] = $this->config->get('module_faqgroup_search');
		}
		
		if (isset($this->request->post['module_faqgroup_top'])) {
			$data['module_faqgroup_top'] = $this->request->post['module_faqgroup_top'];
		} else {
			$data['module_faqgroup_top'] = $this->config->get('module_faqgroup_top');
		}
		
		if (isset($this->request->post['module_faqgroup_bottom'])) {
			$data['module_faqgroup_bottom'] = $this->request->post['module_faqgroup_bottom'];
		} else {
			$data['module_faqgroup_bottom'] = $this->config->get('module_faqgroup_bottom');
		}


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/faqgroup', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/faqgroup')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}