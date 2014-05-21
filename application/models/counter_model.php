<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Counter_model extends CI_Model {

	public function counter($data){
		$this->db->select('*');
		$this->db->from('counter');
		$this->db->where('code', $data['code']);
		$this->db->where('bulan', $data['bulan']);
		$this->db->where('tahun', $data['tahun']);
		$counter = $this->db->get();
		$num_counter = $counter->row()->counter;
		$num_counter = $num_counter+1;
		if ($counter->num_rows()==0) {
			$this->db->insert('counter', 
				array('code' 	=> $data['code'], 
					'bulan' 	=> $data['bulan'], 
					'tahun' 	=> $data['tahun'], 
					'counter' 	=> '1')
				);
		}else{
			$this->db->update('counter', 
				array('counter' => $num_counter), 
				array('code' 	=> $data['code'],
					'bulan' 	=> $data['bulan'],
					'tahun' 	=> $data['tahun'])
				);
		}
		$counter_final = $counter->row()->code.$counter->row()->bulan.$counter->row()->tahun.str_pad($num_counter, 5, "0", STR_PAD_LEFT);
		return $counter_final;
	}

}

/* End of file counter_model.php */
/* Location: ./application/models/counter_model.php */