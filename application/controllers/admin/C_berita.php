<?php 
class C_berita extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_berita');
		if ($this->session->userdata('level') =="") {
			redirect('auth');
		}
		if ($this->session->userdata('level') =="member") {
			redirect('auth');
		}
	}


	function index(){

		// $data['username'] = $this->session->userdata('username');
		$data['berita']=$this->m_berita->tampil_data();
		$this->load->view('admin/berita/main',$data);
	}

	function i(){
		$this->load->view('admin/berita/input');
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

		$judul = $this->input->post('judul');
		$artikel = $this->input->post('artikel');
		$tgl = $this->input->post('tgl');
		
		//------------------------------------------

		$data_berita = array(
					'judul'=>$judul,
					'artikel'=>$artikel,
					'tgl'=>$tgl,
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
		$this->m_berita->tambah_data($data_berita);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		redirect('admin/C_berita');
	}
	//===============================================
	function e($kode){
		$data_kode = array('id'=>$kode);
		$data['data_berita']=$this->m_berita->cari_data($data_kode);
		$this->load->view('admin/berita/edit',$data);
	}
	//===============================================
	function edit(){
		$config = array(
						'upload_path'=>'./uploads',
						'allowed_types'=>'jpg|png|jpeg',
						'max_size'=>2086
						);
		
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$artikel = $this->input->post('artikel');
		$tgl = $this->input->post('tgl');
		$data_kode = array('id'=>$id);
		$foto = $this->db->get_where('berita',$data_kode);
    
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

		$data_berita = array(
							'judul'=>$judul,
							'artikel'=>$artikel,
							'tgl'=>$tgl,
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
		$data_berita = array(
							'judul'=>$judul,
							'artikel'=>$artikel,
							'tgl'=>$tgl
							);

		}
		
		$this->m_berita->edit_data($data_kode,$data_berita);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		redirect('admin/c_berita');
	}
	//=================================================
	function hapus($kode){
		$data_kode = array('id'=>$kode);
		$this->m_berita->hapus_data($data_kode);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Berhasil! data berhasil Hapus.
			                                    </div>');
		redirect('admin/c_berita');
	}
}?>