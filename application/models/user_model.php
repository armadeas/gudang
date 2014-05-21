<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Model untuk forum
* Menambahkan nilai-nilai kedalam database ataupun mengedit dan menghapus
* Pembuat Armadeas Wijaya September 2013
* SMK Taruna Bhakti
*/
class User_model extends CI_Model
{
	public function login_auth($data){
		$this->db->select('token');
		$this->db->where('username', $data['username']);
		$this->db->where('password', $this->encrypt->sha1($data['password']));
		$this->db->from('f_akun');
		return $this->db->get();
	}
	public function set_session($data){
		$this->db->select('user_id, level');
		$this->db->where('username', $data['username']);
		$this->db->from('f_user');
		$result =  $this->db->get();
		$query 	= $this->db->get_where('f_session', array('token' => $data['token']));
		if ($query->num_rows()==0) {
			$this->db->insert('f_session',
			 					array('token' 	=> $data['token'], 
			 						'username' 	=> $data['username'],
			 						'user_id' 	=> $result->row()->user_id,
									'level' 	=> $result->row()->level)
			 					);
		}else{
			$this->db->update('f_session',
			 					array('token' 	=> $data['token'], 
			 						'username' 	=> $data['username'],
			 						'user_id' 	=> $result->row()->user_id,
									'level' 	=> $result->row()->level),
			 					array('username' => $data['username'])
			 					);
		}
		$this->db->update('f_user', array('tanggal_login' => mdate("%Y-%m-%d %h:%i:%s", time()), 
											'ip_login' 		=> $this->input->ip_address()),
									array('username' 		=> $data['username']));
	}
	public function get_session($token){
		$this->db->select('*');
		$this->db->where('token', $token);
		$this->db->from('f_session');
		return end($this->db->get()->result());
	}
}