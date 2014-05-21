<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function save_order($data){
		$insert = array('so_number' 		=> $data['so_number'],
						'customer' 			=> $data['customer'],
						'po_number' 		=> $data['po_number'],
						'due_date' 			=> $data['due_date'],
						'due_date2' 		=> $data['due_date2'],
						'deliv_term' 		=> $data['delivery_term'],
						'deliv_point' 		=> $data['delivery_point'],
						'pay_term' 			=> $data['payment_term'],
						'sales'				=> $data['sales_name'],
						'orderdate' 		=> $data['order_date'],
						'product' 			=> $data['product'],
						'expediter' 		=> $data['expediter'],
						'application_eng' 	=> $data['appl_engineer'],
						'partial_delv' 		=> $data['partial_delv'],
						'partial_inv' 		=> $data['partial_inv'],
						'end_user' 			=> $data['end_user'],
						'product_sales' 	=> $data['product_sales'],
						'po_status' 		=> $data['so_status'],
						'total_order'		=> $data['po_amount'],
						'note' 				=> $data['sub_combine'] );
		$this->db->insert('order', $insert);
	}	

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */