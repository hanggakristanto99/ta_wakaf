<?php 
/**
* 
*/
class M_upload_foto extends CI_Model
{
	function tambah_data($data_pewakaf){
		$this->db->insert('pewakaf',$data_pewakaf);
	}
	//======================================
	function tampil_data(){
		$this->db->limit(1);
		$hasil = $this->db->select("*")
				 ->from('pewakaf')
				 ->order_by('id', 'ASC')
				 ->get();
		return $hasil->result();
	}
	//======================================
	function cari_data($data_kode){
		$this->db->where($data_kode);
		$hasil=$this->db->get('pewakaf')->result();
		return $hasil;
	}
	//===========edit_data($data_kode,$data_buku)
	function edit_data($data_kode,$data_pewakaf){
		$this->db->where($data_kode);
		$this->db->update('pewakaf',$data_pewakaf);
	}
	//=======================================
	function hapus_data($data_kode){
		$this->db->where($data_kode);
		$this->db->delete('pewakaf');
	}
}
?>