<?php
// session_start();
class C_admin extends CI_Controller {



		public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		
		// if ($this->session->userdata('level') =="") {
			
		// 	redirect('auth');
		// }
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/home', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('c_user');
	}
}
