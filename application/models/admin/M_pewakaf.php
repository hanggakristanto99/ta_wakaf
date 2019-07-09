<?php 
/**
* 
*/
class M_pewakaf extends CI_Model
{
	function tambah_data($data_pewakaf){
		$this->db->insert('pewakaf',$data_pewakaf);
	}
	//======================================
	function tampil_data(){
		$hasil = $this->db->select("*")
				 ->from('pewakaf')
				 ->order_by('id', 'DESC')
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

    public function get_jenis()
    {
             $this->db->from('wakaf');
             $query = $this->db->get();
             return $query->result();
    }
}
?>
