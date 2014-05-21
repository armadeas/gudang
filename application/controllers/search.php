<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		echo "test";
	}
	public function employee(){
		$this->load->model('employee_model');
		$result = $this->employee_model->get_employee(array('full_name' => $this->input->get('q')));
		// make sure there are some results else a null query will be returned
		if($result->num_rows() != 0) {
		    foreach ($result -> result_array() as $row) {	    
		        $answer[] = array("id"=>$row['employee_id'],"text"=>$row['full_name']);
		        // the text I want to show is in the form of option id - option
		    }
		} else {
		// 0 results send a message back to say so.
		    $answer[] = array("id"=>"0","text"=>"No Results Found..");
		}

		// finally encode the answer to json and send back the result.
		echo json_encode($answer);
	}
	public function customer(){
		$this->load->model('customer_model');
		$result = $this->customer_model->get_customer(array('companyname' => $this->input->get('q')));
		// make sure there are some results else a null query will be returned
		if($result->num_rows() != 0) {
		    foreach ($result -> result_array() as $row) {	    
		        $answer[] = array("id"=>$row['customerid'],"text"=>$row['companyname']);
		        // the text I want to show is in the form of option id - option
		    }
		} else {
		// 0 results send a message back to say so.
		    $answer[] = array("id"=>"0","text"=>"No Results Found..");
		}

		// finally encode the answer to json and send back the result.
		echo json_encode($answer);
	}
	public function so(){
		$this->load->model('app_model');
		$result = $this->app_model->cek_so($this->input->get('q'), 'true');
		// make sure there are some results else a null query will be returned
		if($result->num_rows() != 0) {
		    foreach ($result -> result_array() as $row) {	    
		        $answer[] = array("id"=>$row['so_number'],"text"=>$row['so_number']);
		        // the text I want to show is in the form of option id - option
		    }
		} else {
		// 0 results send a message back to say so.
		    $answer[] = array("id"=>"0","text"=>"No Results Found..");
		}

		// finally encode the answer to json and send back the result.
		echo json_encode($answer);
	}
	public function brand(){
		$this->db->select('merk');
		//if(!empty($this->input->post())){
			$this->db->like('merk', $this->input->post('query'));
		//}
		$this->db->group_by('merk');
		$result = $this->db->get('barang');
		foreach ($result -> result() as $row) {
			$data[] = $row->merk;
		}
		echo json_encode($data);
	}
	public function kategory(){
		$result = $this->db->get('kategory_barang');
		foreach ($result -> result() as $row) {
			$data[] = $row->kategory;
		}
		echo json_encode($data);
	}
	public function satuan(){
		$this->load->model('system_model');
		$rs = $this->system_model->satuan();
		foreach ($rs as $key => $value) {
			$data[] = array('value' => $value->satuan, 'text' => $value->satuan);
		}
		echo json_encode($data);
	}
	public function barang(){
		$this->load->model('system_model');
		$result = $this->system_model->get_barang($this->input->get());
		// make sure there are some results else a null query will be returned
		if(count($result) != 0) {
		    foreach ($result as $row) {	    
		        $answer[] = array("id"=>$row->kode_barang,"text"=>$row->nama_barang);
		        // the text I want to show is in the form of option id - option
		    }
		} else {
		// 0 results send a message back to say so.
		    $answer[] = array("id"=>"0","text"=>"No Results Found.. Click to add");
		}

		// finally encode the answer to json and send back the result.
		echo json_encode($answer);
	}


}

/* End of file search.php */
/* Location: ./application/controllers/search.php */