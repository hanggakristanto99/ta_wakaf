<?php
// session_start();
class C_upload_foto extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/M_upload_foto');
		
		$this->load->helper('text');
	}
	public function index() {
		if ($this->session->userdata('level')=="") {
			redirect('auth');
		}

		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/upload_foto', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('c_home');
	}
function e($kode){
		$data_kode = array('id'=>$kode);
		$data['data_pewakaf']=$this->M_upload_foto->cari_data($data_kode);
		$this->load->view('user/upload_foto',$data);
	}
	//===============================================
	function edit(){
		$config = array(
						'upload_path'=>'./uploads',
						'allowed_types'=>'jpg|png|jpeg',
						'max_size'=>2086
						);
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis_wakaf = $this->input->post('jenis_wakaf');
		$nominal = $this->input->post('nominal');
		$bank = $this->input->post('bank');
		$data_kode = array('id'=>$id);
		$foto = $this->db->get_where('pewakaf',$data_kode);
    
    if($foto->num_rows()>0){
      $pros=$foto->row();
      $name=$pros->gambar;
      
      if(file_exists($lok=FCPATH.'/uploads/'.$name)){
        unlink($lok);
      }
      if(file_exists($lok=FCPATH.'/uploads/thumbnail/'.$name)){
        unlink($lok);
      }}

		$this->load->library('upload',$config);
		
		if($this->upload->do_upload('gambar')){

		$finfo = $this->upload->data();
		$nama_foto = $finfo['file_name'];

		$data_pewakaf = array(
							'nama'=>$nama,
							'jenis_wakaf'=>$jenis_wakaf,
							'nominal'=>$nominal,
							'bank'=>$bank,
							'gambar'=>$nama_foto
							);

		$config2 = array(
				'source_image'=>'uploads/'.$nama_foto,
				'image_library'=>'gd2',
				'new_image'=>'uploads/thumbnail',
				'maintain_ratio'=>true,
				'width'=>1050,
				'height'=>2000
			);
		
		$this->load->library('image_lib',$config2);
		$this->image_lib->resize();		
		
		}else{
		$data_pewakaf = array(
							'nama'=>$nama,
							'jenis_wakaf'=>$jenis_wakaf,
							'nominal'=>$nominal,
							'bank'=>$bank
							);

		}
		
		$this->M_upload_foto->edit_data($data_kode,$data_pewakaf);
		redirect('member/C_selamat');
	}
}
?>