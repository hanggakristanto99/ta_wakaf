<?php 
class C_wakaf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_wakaf');
		//cek login
		if ($this->session->userdata('level')=="") {
			redirect('auth');
		}
		if ($this->session->userdata('level') =="member") {
			redirect('auth');
		}
		$this->load->helper('text');
	}

	//crud
	function index(){
		if ($this->session->userdata('level') =="") {
			
			redirect('auth');
		}
		$data['username'] = $this->session->userdata('username');
		//crud
		$data['wakaf']=$this->m_wakaf->tampil_data();
		$this->load->view('admin/wakaf/main',$data);
	}

	function i(){
		$this->load->view('admin/wakaf/input');
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

		$data_wakaf = array(
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
				'width'=>150,
				'height'=>200
			);
		$this->load->library('image_lib',$config2);
		$this->image_lib->resize();
		$this->m_wakaf->tambah_data($data_wakaf);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		redirect('admin/c_wakaf');
	}
	//===============================================
	function e($kode){
		$data_kode = array('id'=>$kode);
		$data['data_wakaf']=$this->m_wakaf->cari_data($data_kode);
		$this->load->view('admin/wakaf/edit',$data);
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
		$foto = $this->db->get_where('wakaf',$data_kode);
    
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

		$data_wakaf = array(
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
				'width'=>1500,
				'height'=>2000
			);
		
		$this->load->library('image_lib',$config2);
		$this->image_lib->resize();		
		
		}else{
		$data_wakaf = array(
							'judul'=>$judul,
							'artikel'=>$artikel,
							'tgl'=>$tgl
							);

		}
		
		$this->m_wakaf->edit_data($data_kode,$data_wakaf);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		redirect('admin/c_wakaf');
	}
	//=================================================
	function hapus($kode){
		$data_kode = array('id'=>$kode);
		$this->m_wakaf->hapus_data($data_kode);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil Hapus.
			                                    </div>');
		redirect('admin/c_wakaf');
	}
}?>