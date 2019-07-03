<?php
// session_start();
class C_berita extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('user/m_berita');
		// $this->load->helper('text');
	}
	public function index() {
		// if ($this->session->userdata('level')=="") {
		// 	redirect('auth');
		// }

		$data['username'] = $this->session->userdata('username');
		$data['berita']=$this->m_berita->tampil_data();
		$this->load->view('user/berita', $data);
	}
		function e($kode){
		$data_kode = array('id'=>$kode);
		$data['berita']=$this->m_berita->cari_data($data_kode);
		$this->load->view('user/detail_berita',$data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>
