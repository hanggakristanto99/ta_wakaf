<?php
// session_start();
class C_jenis_wakaf extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/m_pewakaf');
		$this->load->helper('text');
	}
	public function index() {
		if ($this->session->userdata('level')=="") {
			redirect('auth');
		}

		//drop
		$belanja = json_encode($this->m_pewakaf->get_data());
		$barang = json_encode($this->m_pewakaf->get_barang());

		$data = array(
						'barang' => $barang, 
		);

		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/jenis_wakaf', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
	function i(){
		$this->load->view('user/jenis_wakaf');
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

		redirect('member/C_selamat_transfer');
	}
}
?>
