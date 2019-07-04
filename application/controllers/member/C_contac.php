<?php
// session_start();
class C_contac extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->helper('text');
	}
	public function index() {
		// if ($this->session->userdata('level')=="") {
		// 	redirect('auth');
		// }

		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/header');
		$this->load->view('user/contac', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>
