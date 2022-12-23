<?php
class ControllerExtensionSearch extends Controller {
	public function index() {
		$this->load->language('extension/faq');
		$this->load->model('extension/faq');

		$this->load->model('tool/image');
	
		if (isset($this->request->get['faqsearch'])) {
			$faqsearch = $this->request->get['faqsearch'];
		} else {
			$faqsearch = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = 10;
		}

		if(isset($this->request->get['faqsearch'])){
			$this->document->setTitle($this->language->get('text_search') .  ' - ' . $this->request->get['faqsearch']);
		} else {
			$this->document->setTitle($this->language->get('text_search'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$url = '';

		if (isset($this->request->get['faqsearch'])) {
			$url .= '&faqsearch=' . urlencode(html_entity_decode($this->request->get['faqsearch'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/search', $url)
		);

		if (isset($this->request->get['faqsearch'])) {
			$data['text_search'] = $this->language->get('text_search') .  ' - ' . $this->request->get['faqsearch'];
		} else {
			$data['text_search'] = $this->language->get('text_search');
		}

		$data['text_empty'] = $this->language->get('text_empty');
		$data['text_keyword'] = $this->language->get('text_keyword');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_sub_category'] = $this->language->get('text_sub_category');
		$data['text_quantity'] = $this->language->get('text_quantity');
		$data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$data['text_model'] = $this->language->get('text_model');
		$data['text_price'] = $this->language->get('text_price');
		$data['text_tax'] = $this->language->get('text_tax');
		$data['text_points'] = $this->language->get('text_points');
		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
		$data['text_sort'] = $this->language->get('text_sort');
		$data['text_limit'] = $this->language->get('text_limit');
		$data['text_like']    		= $this->language->get('text_like');
		$data['text_postby']    	= $this->language->get('text_postby');
		$data['text_published']     = $this->language->get('text_published');
		$data['text_time_read']     = $this->language->get('text_time_read');
		$data['text_comment']    	= $this->language->get('text_comment');

		$data['entry_search'] = $this->language->get('entry_search');
		$data['entry_description'] = $this->language->get('entry_description');

		$data['button_search'] = $this->language->get('button_search');

		if (isset($this->request->get['faqsearch'])) {
			$filter_data = array(
				'filter_name'         => $faqsearch,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
			);
			$data['faqs'] = array();
			
			$faq_total = count($this->model_extension_faq->getTotalfaqs($filter_data));

			$results = $this->model_extension_faq->getfaqs($filter_data);
		
			foreach($results as $result){
				$data['faqs'][] = array(
					'faq_id' => $result['faq_id'],
					'name'		=> $result['name'],
					'description'		=> html_entity_decode($result['description']),
				);
			}
			

			$url = '';

			if (isset($this->request->get['faqsearch'])) {
				$url .= '&faqsearch=' . urlencode(html_entity_decode($this->request->get['faqsearch'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}


			$url = '';

			if (isset($this->request->get['faqsearch'])) {
				$url .= '&faqsearch=' . urlencode(html_entity_decode($this->request->get['faqsearch'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$url = '';

			if (isset($this->request->get['faqsearch'])) {
				$url .= '&faqsearch=' . urlencode(html_entity_decode($this->request->get['faqsearch'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

		
			$pagination = new Pagination();
			$pagination->total = $faq_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('extension/search', $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($faq_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($faq_total - $limit)) ? $faq_total : ((($page - 1) * $limit) + $limit), $faq_total, ceil($faq_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
			if ($page == 1) {
			    $this->document->addLink($this->url->link('extension/search', '', 'SSL'), 'canonical');
			} elseif ($page == 2) {
			    $this->document->addLink($this->url->link('extension/search', '', 'SSL'), 'prev');
			} else {
			    $this->document->addLink($this->url->link('extension/search', $url . '&page='. ($page - 1), 'SSL'), 'prev');
			}

			if ($limit && ceil($faq_total / $limit) > $page) {
			    $this->document->addLink($this->url->link('extension/search', $url . '&page='. ($page + 1), 'SSL'), 'next');
			}
		}
		$data['faqsearch'] = $faqsearch;

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		
			$this->response->setOutput($this->load->view('extension/search', $data));
		
	}
}