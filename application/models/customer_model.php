<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function get_customer($data){
		$this->db->select('customerid, companyname');
		$this->db->from('customers');
		$this->db->like('companyname', $data['companyname']);
		return $this->db->get();
	}

}

/* End of file employee.php */
/* Location: ./application/models/employee.php */