<?php
class ControllerExtensionModuleCustomSearch extends Controller {
    protected $error;

    public function index() {
        $this->language->load('extension/module/custom_search');
        $this->load->model('setting/setting');

        $this->document->setTitle($this->language->get('heading_title'));
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_custom_search', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        // SET UP BREADCRUMB TRAIL. YOU WILL NOT NEED TO MODIFY THIS UNLESS YOU CHANGE YOUR MODULE NAME.
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], true)
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/custom_search', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/custom_search', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_custom_search_status'])) {
            $data['module_custom_search_status'] = $this->request->post['module_custom_search_status'];
        } else {
            $data['module_custom_search_status'] = $this->config->get('module_custom_search_status');
        }

        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/custom_search', $data));
    }

    public function install() {
        $this->load->model('extension/custom_search');
        $this->model_extension_custom_search->createTables();

        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting('module_custom_search', array( 'module_custom_search_status' => 0 ));
    }

    public function uninstall() {
        $this->load->model('extension/custom_search');
        $this->model_extension_custom_search->deleteTables();

        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting('module_custom_search', array('module_custom_search_status' => 0));
    }

    private function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/custom_search')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
