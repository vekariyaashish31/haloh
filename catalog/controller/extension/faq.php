<?php
  class ControllerExtensionfaq extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/faq');
		$data['faqgroup_error']=$this->language->get('faqgroup_error');
		
		$this->load->model('extension/faq');
		
		
		$this->document->setTitle($this->language->get('heading_title'));
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/faq')
		);
		$data['faq_groups']=array();
		$data['pagination_status'] = false;
		$data['heading_title'] = $this->language->get('heading_title');
		if(!empty($this->request->get['faqgroup_id'])){
			$faq_groups = $this->model_extension_faq->getfaqgroup3($this->request->get['faqgroup_id']);
			if($faq_groups) {
				foreach($faq_groups as $faq_group){
					$faqs = $this->model_extension_faq->getfaqsBygroup($faq_group['faqgroup_id']);
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
					
					if($faqs_datas) {
						$data['faq_groups'][]=array(
								'faqgroup_id' 	=> $faq_group['faqgroup_id'],
								'title'					=> $faq_group['title'],
								'faqs_datas'		=> $faqs_datas,
						);
					}
				}
			}
		}else{
			$data['pagination_status'] = true;
			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			$limit = 10;
			$filter_data = array(
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
			);
			
			$results = $this->model_extension_faq->getfaqgroup($filter_data);
			$faq_total = $this->model_extension_faq->getTotalfaqgroup();
			
			foreach($results as $faq_group){
					$faqs = $this->model_extension_faq->getfaqsBygroup($faq_group['faqgroup_id']);
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
					
					if($faqs_datas) {
						$data['faq_groups'][]=array(
								'faqgroup_id' 	=> $faq_group['faqgroup_id'],
								'title'					=> $faq_group['title'],
								'faqs_datas'		=> $faqs_datas,
						);
					}
			}
			
			$pagination = new Pagination();
			$pagination->total = $faq_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('extension/faq','&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($faq_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($faq_total - $limit)) ? $faq_total : ((($page - 1) * $limit) + $limit), $faq_total, ceil($faq_total / $limit));
		}
		 
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('extension/faq', $data));
	}
}
