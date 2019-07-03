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
		$hasil = $this->db->get('pewakaf')->result();
		return $hasil;
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
	        public function get_data()
        {
                // $query = $this->db->get('barang');
                // return $query->result();

                $this->db->select('*');
                 $this->db->from('wakaf');
                 // $this->db->join('barang','barang.id_barang=belanja.barang_id');
                 $query = $this->db->get();
                 return $query->result();
        }
        public function get_barang()
        {
                 $this->db->from('wakaf');
                 $query = $this->db->get();
                 return $query->result();
        }
}
?>