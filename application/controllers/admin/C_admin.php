<?php
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
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

		// var_dump($this->session->userdata('level'));
		// die;
		
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/home', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
