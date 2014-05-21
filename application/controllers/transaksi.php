<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function barangmasuk()
	{
		$this->load->model('app_model');
		if ($this->session->userdata('token')!='') {
			$data['session'] = $this->user_model->get_session($this->session->userdata('token'));
			$data['get_user'] = $this->app_model->get_user($this->session->userdata($data['session']->username));
		}
		$data['judul'] = "Transaksi Masuk WareHouse Application BETA (Delevoper)";
		require_once 'ajax.php';
		$this->breadcrumbs->add("Home",base_url());
		$this->breadcrumbs->add('Transaksi',base_url('forum'));
		$this->breadcrumbs->add('Barang Masuk',base_url(''));
		$data['breadcrumb'] = $this->breadcrumbs->show();
		$data['ajax'] = ajax();		
		$this->load->view('main/head', $data);
		$this->load->view('main/header');
		$this->load->view('page/barangmasuk');
		$this->load->view('main/footer');
	}
	public function get_order(){
		$this->load->model('transaksi_model');
		$data['result'] = $this->transaksi_model->get_order($this->input->post('so_number'));
		//echo $this->db->last_query();
		echo json_encode($data['result']);

	}
	public function table(){
		//echo "wkwkwk deas mah emang ganteng coy :p";
		$this->load->model('transaksi_model');
		$data['result'] = $this->transaksi_model->get_order_barang($this->uri->segment(3));		
		//$this->load->model('transaksi_model');
		$this->load->view('ajax/table_barangmasuk');
	}
	public function data_table(){
		//echo "wkwkwk deas mah emang ganteng coy :p";
		$this->load->model('transaksi_model');
		$data['result'] = $this->transaksi_model->get_order_barang($this->uri->segment(3));		
		echo json_encode(array('data' => $data['result']));
		//$this->load->model('transaksi_model');
		//$this->load->view('ajax/table_barangmasuk',$data);
	}
	public function simpan_barang(){
		print_r($this->input->post());
		/*$this->load->model('transaksi_model');
		if ($this->uri->segment(3)=='new') {
			$data['insert'] = $this->transaksi_model->save_order_barang($this->uri->segment(3));
		}*/	
	}
	public function get_barang(){
		$this->load->model('system_model');
		$data['result'] = $this->system_model->get_barang($this->input->post());
		echo json_encode(end($data['result']));
	}
	public function add_barang(){
		//echo json_encode($this->input->post());
		$data = $this->input->post();
		if ($data['berat']=="unit" || $data['berat']=="lusin" || $data['berat']=="Unit" || $data['berat']=="Lusin") {
			$data['berat_value'] = $data['berat_size'];
			//echo "Deas";
		}else{
			//echo "luu";
			$data['berat_value'] = $data['berat_size']."_".htmlentities($data['berat']);
		}
		$this->load->model('transaksi_model');
		$insert = $this->transaksi_model->add_barang($data);
		if ($insert == FALSE) {
			echo json_encode(array("status" => "error", "msg" => "Ada yang Error Harap Muat ulang halaman atau hubungi Admin Developer"));
		}else echo json_encode(array("status" => "success", "msg" => "Berhasil"));
	}
}

/* End of file tr   ansaksi.php */
/* Location: ./application/controllers/transaksi.php */