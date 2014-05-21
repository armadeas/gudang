<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function get_employee($data){
		$this->db->select('employee_id, full_name');
		$this->db->from('employee');
		$this->db->like('full_name', $data['full_name']);
		return $this->db->get();
	}

}

/* End of file employee.php */
/* Location: ./application/models/employee.php */