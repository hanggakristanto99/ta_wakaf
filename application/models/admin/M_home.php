<?php 
/**
* 
*/
class M_berita extends CI_Model
{
	function tambah_data($data_berita){
		$this->db->insert('berita',$data_berita);
	}
	//======================================
	function tampil_data(){
		$hasil = $this->db->get('berita')->result();
		return $hasil;
	}
	//======================================
	function cari_data($data_kode){
		$this->db->where($data_kode);
		$hasil=$this->db->get('berita')->result();
		return $hasil;
	}
	//===========edit_data($data_kode,$data_buku)
	function edit_data($data_kode,$data_berita){
		$this->db->where($data_kode);
		$this->db->update('berita',$data_berita);
	}
	//=======================================
	function hapus_data($data_kode){
		$this->db->where($data_kode);
		$this->db->delete('berita');
	}
}
?>