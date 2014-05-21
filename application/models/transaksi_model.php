<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function get_order($so_number){
		$this->db->select('o.*, 
						e1.full_name as sales_name, 
						e2.full_name as sale_product, 
						e3.full_name as expediter_name, 
						e4.full_name as app_eng_name,
						c.companyname');
		$this->db->from('order o');
		$this->db->join('employee e1', 'e1.employee_id = o.Sales', 'left'); //harusnya inner, tapi karna banyak yang ngga isi di employeenya untuk sementara left dulu
		$this->db->join('employee e2', 'e2.employee_id = o.Product_Sales', 'left'); //harusnya inner, tapi karna banyak yang ngga isi di employeenya untuk sementara left dulu
		$this->db->join('employee e3', 'e3.employee_id = o.expediter', 'left'); //harusnya inner, tapi karna banyak yang ngga isi di employeenya untuk sementara left dulu
		$this->db->join('employee e4', 'e4.employee_id = o.application_eng', 'left'); //harusnya inner, tapi karna banyak yang ngga isi di employeenya untuk sementara left dulu
		$this->db->join('customers c', 'c.customerid = o.customer', 'left'); //harusnya inner, tapi karna banyak yang ngga isi di employeenya untuk sementara left dulu
		$this->db->where('o.so_number', $so_number);
		return $this->db->get()->row();
	}
	public function get_order_barang($so_number){
		$this->db->select("tb.*, 
							SUBSTRING_INDEX(tb.jumlah_satuan, '_', 1) AS no_satuan,							 
							IF(SUBSTRING_INDEX(SUBSTRING_INDEX(tb.jumlah_satuan, '_', 2 ),'_',-1)=SUBSTRING_INDEX(tb.jumlah_satuan, '_', 1), '', SUBSTRING_INDEX(SUBSTRING_INDEX(tb.jumlah_satuan, '_', 2 ),'_',-1)) AS val_satuan,
							REPLACE(jumlah_satuan,'_',' ') as jumlah,
							b.nama_barang,
							b.satuan, 
							b.deskripsi, 
							b.merk, 
							b.berat_size, 
							b.berat_barang", false);
		$this->db->join('barang b', 'b.kode_barang = tb.kode_barang', 'inner');
		$this->db->from('transaksi_barang tb');
		$this->db->where('kode_so', $so_number);
		$this->db->group_by('kode_so, kode_barang, jumlah_satuan');
		return $this->db->get()->result();
	}
	public function add_barang($data){
		//print_r($data);
		if ($data['berat']=='Unit' || $data['berat']=='unit') {
			for ($i=0; $i < $data['berat_size']; $i++) {
				$this->db->set("barcode", "REPLACE(UUID(),'-','')", FALSE);
				$insert = $this->db->insert('transaksi_barang', array("kode_so" => $data['kode_so'],
													"kode_barang"			=> $data['nama_barang'],
													//"barcode"		=> "REPLACE(UUID(),'-','')",
													"jumlah_satuan"			=> $data['berat_value']), TRUE);
			}
		}
		else{
			$this->db->set("barcode", "REPLACE(UUID(),'-','')", FALSE);
			$insert = $this->db->insert('transaksi_barang', array("kode_so" => $data['kode_so'],
													"kode_barang"			=> $data['nama_barang'],
													//"barcode"		=> "REPLACE(UUID(),'-','')",
													"jumlah_satuan"			=> $data['berat_value']), TRUE);
		}
		return ($this->db->affected_rows() != 1) ? false : true;
		//echo $this->db->affected_rows();
		/*if (ins) {
			# code...
		}*/
	}
	//, 
							//SUBSTRING_INDEX(SUBSTRING_INDEX(tb.jumlah_satuan, '_', 2 ),'_',-1) AS value_satuan
	/*public function save_order_barang($data){
		$insert = array('kode_barang' => 'BR-001',
						'kode_so' => $data[''], );
	}*/

}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */