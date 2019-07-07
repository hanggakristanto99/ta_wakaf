<?php
// session_start();
class C_selamat_transfer extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/m_selamat_transfer');
		
		$this->load->helper('text');
	}
	public function index() {
		if ($this->session->userdata('level')=="") {
			redirect('auth');
		}

		$data['username'] = $this->session->userdata('username');
		$data['wakaf']=$this->m_selamat_transfer->tampil_data();
		$this->load->view('user/selamat_transfer', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('c_home');
	}
}
?>