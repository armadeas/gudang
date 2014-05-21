<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$this->load->model('app_model');
		if ($this->session->userdata('token')!='') {
			$data['session'] = $this->user_model->get_session($this->session->userdata('token'));
			$data['get_user'] = $this->app_model->get_user($this->session->userdata($data['session']->username));
		}*/
		$data['judul'] = "Dashboard WareHouse Application BETA (Delevoper)";
		require_once 'ajax.php';
		$this->breadcrumbs->add("Home",base_url());
		$this->breadcrumbs->add('Dashboard',base_url('forum'));
		$data['breadcrumb'] = $this->breadcrumbs->show();
		$ajax = ajax();		
		$this->load->view('main/head', $data);
		$this->load->view('main/header');
		$this->load->view('main/content');
		$this->load->view('main/footer');

	}
}