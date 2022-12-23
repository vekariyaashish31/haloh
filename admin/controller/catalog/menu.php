<?php
class ControllerCatalogMenu extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/menu');
		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/menu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')){
			$this->model_catalog_menu->addMenu($this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$url = '';
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/menu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')){
			$this->model_catalog_menu->editMenu($this->request->get['menu_id'], $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/menu');

		if (isset($this->request->post['selected'])){
			foreach ($this->request->post['selected'] as $menu_id) {
				$this->model_catalog_menu->deleteMenu($menu_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'id.menu_title';
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

		$url = '';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('catalog/menu/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('catalog/menu/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['menus'] = array();
		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$menu_total = $this->model_catalog_menu->getTotalMenus();
		$results = $this->model_catalog_menu->getMenus($filter_data);
		foreach ($results as $result) {
			$data['menus'][] = array(
				'menu_id'	=> $result['menu_id'],
				'menu_title'=> $result['menu_title'],
				'menu_url'	=> $result['menu_url'],
				'menu_type'	=> $result['menu_type'],
				'sort_order'=> $result['sort_order'],
				'status'	=> $result['status'],
				'edit'		=> $this->url->link('catalog/menu/edit', 'user_token='. $this->session->data['user_token'] .'&menu_id='. $result['menu_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';
		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_title'] = $this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . '&sort=id.title' . $url, true);
		$data['sort_sort_order'] = $this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . '&sort=i.sort_order' . $url, true);

		$url = '';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $menu_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($menu_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($menu_total - $this->config->get('config_limit_admin'))) ? $menu_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $menu_total, ceil($menu_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/menu_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['menu_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['menu_title'])) {
			$data['error_title'] = $this->error['menu_title'];
		} else {
			$data['error_title'] = array();
		}

		$url = '';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['menu_id'])) {
			$data['action'] = $this->url->link('catalog/menu/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/menu/edit', 'user_token=' . $this->session->data['user_token'] . '&menu_id=' . $this->request->get['menu_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/menu', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['menu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$menu_info = $this->model_catalog_menu->getMenu($this->request->get['menu_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		if (isset($this->request->post['title'])) {
			$data['menu_title'] = $this->request->post['title'];
		} elseif (isset($this->request->get['menu_id'])) {
			$data['menu_title'] = $this->model_catalog_menu->getMenuTitle($this->request->get['menu_id']);
		} else {
			$data['menu_title'] = array();
		}

		if (isset($this->request->post['menu_url'])) {
			$data['menu_url'] = $this->request->post['menu_url'];
		} elseif (!empty($menu_info)) {
			$data['menu_url'] = $menu_info['menu_url'];
		} else {
			$data['menu_url'] = '';
		}

		if (isset($this->request->post['menu_type'])) {
			$data['menu_type'] = $this->request->post['menu_type'];
		} elseif (!empty($menu_info)) {
			$data['menu_type'] = $menu_info['menu_type'];
		} else {
			$data['menu_type'] = true;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($menu_info)) {
			$data['status'] = $menu_info['status'];
		} else {
			$data['status'] = true;
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($menu_info)) {
			$data['sort_order'] = $menu_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/menu_form', $data));
	}

}