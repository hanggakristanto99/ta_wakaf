<?php
// session_start();
class C_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/m_berita');
		$this->load->helper('text');
	}
	public function index() {
		// if ($this->session->userdata('level')=="") {
		// 	redirect('auth');
		// }
		$data['wakaf']=$this->m_berita->tampil_wakaf();
		$data['berita']=$this->m_berita->tampil_data();
		// $data['username'] = $this->session->userdata('username');
		// $data['username'] = $this->session->userdata('username');
		$this->load->view('user/home',$data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('c_user');
	}
}

