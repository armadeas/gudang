<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function barang_masuk()
	{
		$this->load->model('transaksi_model');
		$data['result'] = $this->transaksi_model->get_order_barang($this->uri->segment(3));
		$this->load->view('cetak/barang_masuk', $data);
	}

}

/* End of file print.php */
/* Location: ./application/controllers/print.php */