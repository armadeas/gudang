<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Model untuk forum
* Menambahkan nilai-nilai kedalam database ataupun mengedit dan menghapus
* Pembuat Armadeas Wijaya September 2013
* SMK Taruna Bhakti
*/
class App_model extends CI_Model
{
	public function get_user($username){
		$this->db->where('username', $username);
		$this->db->from('f_user');
		return end($this->db->get()->result());
	}
	public function cek_so($so_number, $search=''){
		$this->db->select('so_number');
		$this->db->from('order');
		if($search == ''){
			$this->db->where('so_number', $so_number);
		}else{
			$this->db->like('so_number', $so_number);
		}
		return $this->db->get();
	}	
}