<?php
class ControllerExtensionModulefaq extends Controller {
	public function index($setting) {
		static $module = 0;
		
		$this->load->language('Extension/module/faq');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_tax'] = $this->language->get('text_tax');

		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

		$this->load->model('extension/faq');

		$this->load->model('tool/image');

		$data['faqgroups'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['faqgroup'])) {
			$faq_groups = array_slice($setting['faqgroup'], 0, (int)$setting['limit']);
			  if($faq_groups) {
					foreach($faq_groups as $faq_group_id) {
						$faqgroup_info = $this->model_extension_faq->getfaqgroupinfo($faq_group_id);
						$faqs = $this->model_extension_faq->getfaqsBygroup($faq_group_id);
						
						$faqs_datas = array();
						
						if($faqs) {
							foreach($faqs as $faq) {
								$faqs_datas[]=array(
										'faq_id' => $faq['faq_id'],
										'name'		=> $faq['name'],
										'description'		=> html_entity_decode($faq['description']),
								);
							}
						}
						
						if($faqs_datas && $faqgroup_info) {
							$data['faq_groups'][]=array(
									'faqgroup_id' 	=> $faqgroup_info['faqgroup_id'],
									'title'					=> $faqgroup_info['title'],
									'faqs_datas'		=> $faqs_datas,
							);
						}
					}
				}else{
					$data['faq_groups'] = array();
				}
		}

		$data['module'] = $module++;
		
		if ($data['faq_groups']) {
			return $this->load->view('extension/module/faq', $data);
		}
	}
}