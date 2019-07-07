<?php 
class C_pewakaf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_pewakaf');
		//cek login
		if ($this->session->userdata('level')=="") {
			redirect('auth');
		}
		if ($this->session->userdata('level') =="member") {
			redirect('auth');
		}
		$this->load->helper('text');
	}

	public function index() {
		//login
		if ($this->session->userdata('level') =="") {
			
			redirect('auth');
		}
		$data['username'] = $this->session->userdata('username');
		// crud
		$data['pewakaf']=$this->m_pewakaf->tampil_data();
		$this->load->view('admin/pewakaf/main',$data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}

	function i(){
		$this->load->view('admin/pewakaf/input');
	}
	//==============================================
	function input(){
		$config = array(
						'upload_path'=>'./uploads',
						'allowed_types'=>'jpg|png|jpeg',
						'max_size'=>2086
						);
		$this->load->library('upload',$config);
		$this->upload->do_upload('gambar');

		$finfo = $this->upload->data(
		);
		$nama_foto = $finfo['file_name'];

		$nama = $this->input->post('nama');
		$jenis_wakaf = $this->input->post('jenis_wakaf');
		$nominal = $this->input->post('nominal');
		$bank = $this->input->post('bank');
		
		//------------------------------------------

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
				'width'=>150,
				'height'=>200
			);
		$this->load->library('image_lib',$config2);
		$this->image_lib->resize();
		$this->m_pewakaf->tambah_data($data_pewakaf);

		redirect('admin/C_pewakaf');
	}
	//===============================================
	function e($kode){
		$data_kode = array('id'=>$kode);
		$data['data_pewakaf']=$this->m_pewakaf->cari_data($data_kode);
		$this->load->view('admin/pewakaf/edit',$data);
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
		
		$this->m_pewakaf->edit_data($data_kode,$data_pewakaf);
		redirect('admin/c_pewakaf');
	}
	//=================================================
	function hapus($kode){
		$data_kode = array('id'=>$kode);
		$this->m_pewakaf->hapus_data($data_kode);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Berhasil! data berhasil Hapus.
			                                    </div>');
		redirect('admin/c_pewakaf');
	}
}?>