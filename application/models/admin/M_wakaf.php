<?php 
/**
* 
*/
class M_wakaf extends CI_Model
{
	function tambah_data($data_wakaf){
		$this->db->insert('wakaf',$data_wakaf);
	}
	//======================================
	function tampil_data(){
		$hasil = $this->db->select("*")
				 ->from('wakaf')
				 ->order_by('id', 'DESC')
				 ->get();
		return $hasil->result();
	}
	//======================================
	function cari_data($data_kode){
		$this->db->where($data_kode);
		$hasil=$this->db->get('wakaf')->result();
		return $hasil;
	}
	//===========edit_data($data_kode,$data_buku)
	function edit_data($data_kode,$data_wakaf){
		$this->db->where($data_kode);
		$this->db->update('wakaf',$data_wakaf);
	}
	//=======================================
	function hapus_data($data_kode){
		$this->db->where($data_kode);
		$this->db->delete('wakaf');
	}
}
?>