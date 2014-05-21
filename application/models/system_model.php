<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System_model extends CI_Model {

	public function save_barang($data){
		if($data['nama_gambar']=='') $data['nama_gambar'] = 'default.png';
		$data['insert'] = array('kode_barang' 	=> $data['kode_barang'], 
						'nama_barang' 	=> $data['nama'],
						'satuan' 		=> $data['satuan'],
						'merk' 			=> $data['merk'],
						'deskripsi'		=> $data['deskripsi'],
						'kategory'		=> $data['kategory'],
						'berat_size'	=> $data['berat_size'],
						'berat_barang'	=> $data['berat'],
						'gambar_barang'	=> $data['nama_gambar'],
						'tanggal_ditambah'=> mdate("%Y-%m-%d %h:%i:%s", time())
						);
		$data['tambah'] =  $this->db->insert('barang', $data['insert']);
		if ($data['tambah']) {
			$data['cek'] = 'berhasil';
		}else{ $data['cek'] = 'gagal';}
		return $data['cek'];
	}
	public function get_barang($data){
		//print_r($data);
		$this->db->select('*');
		if(isset($data['q'])) $this->db->like('nama_barang', $data['q']);
		if (isset($data['kode_barang'])) $this->db->where('kode_barang', $data['kode_barang']);
		$this->db->order_by('tanggal_ditambah', 'desc');
		return $this->db->get('barang')->result();
	}public function satuan(){
		return $this->db->get('satuan')->result();
	}
	public function edit_barang($data){
		$this->db->update('barang', array($data['name'] => $data['value']), array('kode_barang' => $data['pk']));
		//echo $this->db->last_query();
	}

}

/* End of file system_model.php */
/* Location: ./application/models/system_model.php */