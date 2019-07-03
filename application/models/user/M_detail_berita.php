<?php 
/**
* 
*/
class M_detail_berita extends CI_Model
{
	function tambah_data($data_wakaf){
		$this->db->insert('berita',$data_wakaf);
	}
	//======================================
	function tampil_data(){
		$this->db->limit(1);
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
	function edit_data($data_kode,$data_wakaf){
		$this->db->where($data_kode);
		$this->db->update('berita',$data_wakaf);
	}
	//=======================================
	function hapus_data($data_kode){
		$this->db->where($data_kode);
		$this->db->delete('berita');
	}
}
?>