<?php
class ControllerExtensionModuleFaqgroup extends Controller {
	public function index() {
		$this->load->language('Extension/module/faqgroup');

		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->request->get['faqgroup_id'])) {
			$data['faqgroup_id'] = $this->request->get['faqgroup_id'];
		} else {
			$data['faqgroup_id'] = '';
		}
		
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');
		
		if (isset($this->request->get['faqsearch'])) {
			$faqsearch = $this->request->get['faqsearch'];
		} else {
			$faqsearch = '';
		}
		$data['faqsearch'] = $faqsearch;
		$data['faqstatus'] = $this->config->get('module_faqgroup_status');
		$data['faq_search'] = $this->config->get('module_faqgroup_search');

		$this->load->model('catalog/product');
		$this->load->model('extension/faq');
		$data['faqgroups'] = array();

		$faqgroups = $this->model_extension_faq->getfaqgroup();
		foreach ($faqgroups as $faqgroup) {
			$children_data = array();

				

			$filter_data = array(
				'filter_faqgroup_id'  => $faqgroup['faqgroup_id'],
				'filter_sub_faqgroup' => true
			);
			
			$data['faqgroups'][] = array(
				'faqgroup_id' => $faqgroup['faqgroup_id'],
				'name'        => $faqgroup['title'] . ($this->config->get('config_product_count') ? ' (' . $this->model_extension_faq->totalfaq($faqgroup['faqgroup_id']) . ')' : ''),
				
				'href'        => $this->url->link('extension/faq', 'faqgroup_id=' . $faqgroup['faqgroup_id'])
			);
		}

		return $this->load->view('extension/module/faqgroup', $data);
	}
}