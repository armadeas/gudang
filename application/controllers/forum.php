<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function index(){
		$this->load->model('app_model');
		if ($this->session->userdata('token')!='') {
			$data['session'] = $this->user_model->get_session($this->session->userdata('token'));
			$data['get_user'] = $this->app_model->get_user($this->session->userdata($data['session']->username));
		}
		$data['judul'] = "Forum List | SMK Taruna Bhakti - Welcome to here";
		require_once 'ajax.php';
		$ajax = ajax();
		$this->breadcrumbs->add("Home",base_url());
		$this->breadcrumbs->add('Forum',base_url('forum'));
		$data['breadcrumb'] = $this->breadcrumbs->show();
		$this->load->view('main/head', $data);
		$this->load->view('main/header');
		$this->load->view('page/forum');
		$this->load->view('main/footer');	
	}
}