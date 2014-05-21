
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){		
		$this->load->view('main/login');
	}
	public function cek_login(){
		header('Content-Type: application/json');
		//$this->load->model('user_model');
		$query 	= $this->user_model->login_auth($this->input->post());
		$token 	= '';
		if($query->num_rows()==1)
		{
			$token = $query->row()->token;
			if ($query->row()->token=='') {
				while (strlen($token) < 32)
				{
					$token .= mt_rand(0, mt_getrandmax());
				}
				$token .= $this->input->ip_address().time();
				$token = md5(uniqid($token, TRUE));		
				$this->db->update('f_akun', 
								array('token' => $token), 
								array('username' => $this->input->post('username'))
								);
			}
			$this->user_model->set_session(array('username' => $this->input->post('username'),
											'token' => $token));
			$this->session->set_userdata('token', $token);
			$json = array('status_login' => 'berhasil',
						'jenis_status' => '1');
			echo json_encode($json);
		}else{
			$json = array('status_login' => 'gagal',
						'jenis_status' => '1');
			echo json_encode($json);
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
	public function redirect(){
		$this->load->view('main/redirect');
	}
}