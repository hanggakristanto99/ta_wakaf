<?php
// session_start();
class C_home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/m_berita');
		$this->load->helper('text');
	}
	public function index() {
		// if ($this->session->userdata('level')=="") {
		// 	redirect('auth');
		// }
		$data['berita']=$this->m_berita->tampil_data();
		$data['wakaf']=$this->m_berita->tampil_wakaf();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/home', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}

