<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->model('app_model');
		if ($this->session->userdata('token')!='') {
			$data['session'] = $this->user_model->get_session($this->session->userdata('token'));
			$data['get_user'] = $this->app_model->get_user($this->session->userdata($data['session']->username));
		}
		$data['judul'] = "Order | WareHouse Application BETA (Delevoper)";
		require_once 'ajax.php';
		$this->breadcrumbs->add("Home",base_url());
		$this->breadcrumbs->add('Order',base_url('forum'));
		$this->breadcrumbs->add('Barang Masuk',base_url(''));
		$data['breadcrumb'] = $this->breadcrumbs->show();
		$ajax = ajax();		
		$this->load->view('main/head', $data);
		$this->load->view('main/header');
		$this->load->view('page/order');
		$this->load->view('main/footer');
	}
	public function view(){
		$this->index();
	}
	public function modal_order(){
		$this->load->view('modal/modal_order');
	}
	public function save_order(){
		//print_r($this->input->post());
		$this->load->model('app_model');
		$cek_so = $this->app_model->cek_so($this->input->post('so_number'));
		if ($cek_so->num_rows() != 0) {
			echo json_encode(array('status' => 'ERROR', 'message' => 'SO Number <b>' . $this->input->post('so_number') . '</b> is not available. Please choose another one.'));
			return false;
		}
		$this->load->model('order_model');
		$this->order_model->save_order($this->input->post());
	}
	public function cek_so(){
		$this->load->model('app_model');
		$cek_so = $this->app_model->cek_so($this->input->post('so_number'));
		//print_r($this->input->post());
		if ($cek_so->num_rows() == 0) {
			echo json_encode(array('status' => 'OK', 'message' => 'SO Number <b>' . $this->input->post('so_number') . '</b> is available. You can just pick it up!'));
		} else {
			echo json_encode(array('status' => 'ERROR', 'message' => 'SoO Number <b>' . $this->input->post('so_number') . '</b> is not available. Please choose another one.'));
		}
	}
	
}

/* End of file order.php */
/* Location: ./application/controllers/order.php */