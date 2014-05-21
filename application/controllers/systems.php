<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Systems extends CI_Controller {

	public function data_barang()
	{
		$this->load->model('app_model');
		if ($this->session->userdata('token')!='') {
			$data['session'] = $this->user_model->get_session($this->session->userdata('token'));
			$data['get_user'] = $this->app_model->get_user($this->session->userdata($data['session']->username));
		}
		$data['judul'] = "Order | WareHouse Application BETA (Delevoper)";
		require_once 'ajax.php';
		$this->breadcrumbs->add("Home",base_url());
		$this->breadcrumbs->add('System',base_url(''));
		$this->breadcrumbs->add('Data Barang',base_url(''));
		$data['breadcrumb'] = $this->breadcrumbs->show();
		$ajax = ajax();		
		$this->load->view('main/head', $data);
		$this->load->view('main/header');
		$this->load->view('page/data_barang');
		$this->load->view('main/footer');
	}
	public function table_barang(){
		$this->load->model('system_model');
		$data['result'] = $this->system_model->get_barang('');		
		$this->load->view('ajax/table_databarang', $data);
	}
	public function modal_addbarang(){
		$this->load->model('system_model');
		$data['satuan'] = $this->system_model->satuan();
		//print_r($data);
		$this->load->view('modal/add_barang', $data);
	}public function modal_viewbarang(){
		$this->load->model('system_model');
		$data['barang'] = end($this->system_model->get_barang(array('kode_barang' => $this->uri->segment(3))));
		$data['satuan'] = $this->system_model->satuan();
		$this->load->view('modal/view_barang', $data);
	}public function save_barang(){
		$status = 'error';
		$msg = '';
		$data = $this->input->post();
		$this->load->model('counter_model');
		$data['nama_gambar'] = '';
		$data['kode_barang'] = $this->counter_model->counter(array('code' => '', 'tahun' => date('y'), 'bulan' => date('m')));
		if ($this->input->post('gambar_barang')!='') {
			$config['upload_path'] = './assets/img/barang/';
			$config['allowed_types'] = 'gif|jpg|png';
			//$config['overwrite'] = false;
			$config['remove_spaces'] = true;
			$config['file_name'] = $data['kode_barang'];
			//$config['max_size']	= '100';// in KB

			$this->load->library('upload', $config);
			//print_r($_FILES);
			if ( ! $this->upload->do_upload('gambar_barang'))
			{
				//$this->session->set_flashdata('message', $this->upload->display_errors('', ''));
				//redirect('profile');
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
			}
			else
			{
				//Image Resizing
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = FALSE;
				$config['width'] 	= 640;
				$config['height'] 	= 480;

				$this->load->library('image_lib', $config);

				if ( ! $this->image_lib->resize()){
					unlink($data['full_path']);
					$status = "error";
					$msg = "Something went wrong when saving the file, please try again.";
				}else{

					$status = "success";
					$msg = "File successfully uploaded";
				}
				@unlink($_FILES[$file_element_name]);
				$data['nama_gambar'] = $this->upload->file_name;				
			}
		}
		//print_r($data);
		$this->load->model('system_model');
		$insert = $this->system_model->save_barang($this->db->escape_str($data));
		if ($status == 'success' && $insert == 'berhasil') {
			$status = "success";
			$msg = "Data successfully uploaded";
		}elseif ($status == 'error' && $insert == 'berhasil') {
			$status = "success";
			$msg = "Data successfully added yet Photo not Success uploaded";
		}elseif ($status == 'error' && $insert == 'gagal') {
			$status = "error";
			$msg = "Gagal Upload and Add Data";
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}public function edit_barang(){
		//print_r($this->input->post());
		$this->load->model('system_model');
		$this->system_model->edit_barang($this->input->post());
	}public function change_image(){
		$status = 'error';
		$msg = 'Cek';
		$data['kode_barang'] = $this->input->post('kode_barang');
		//print_r($this->input->post());
			$config['upload_path'] = './assets/img/barang/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = true;
			$config['remove_spaces'] = true;
			$config['file_name'] = $data['kode_barang'];
			//$config['max_size']	= '100';// in KB

			$this->load->library('upload', $config);
			//print_r($_FILES);
			if ( ! $this->upload->do_upload('gambar_barang'))
			{
				//$this->session->set_flashdata('message', $this->upload->display_errors('', ''));
				//redirect('profile');
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
			}
			else
			{
				//Image Resizing
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = FALSE;
				$config['width'] 	= 640;
				$config['height'] 	= 480;

				$this->load->library('image_lib', $config);

				if ( ! $this->image_lib->resize()){
					unlink($data['full_path']);
					$status = "error";
					$msg = "Something went wrong when saving the file, please try again.";
				}else{

					$status = "success";
					$msg = "File successfully uploaded";
				}
				@unlink($_FILES[$file_element_name]);
				$this->load->model('system_model');
				$this->system_model->edit_barang(array('name' => 'gambar_barang', 'value' => $this->upload->file_name, 'pk' => $data['kode_barang']));
			}
			echo json_encode(array('status' => $status, 'msg' => $msg));		
	}


}

/* End of file system.php */
/* Location: ./application/controllers/system.php */