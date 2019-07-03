<?php 
/**
* 
*/
class C_coba extends CI_Controller
{

	public function __construct() {
		parent::__construct();

		$this->load->helper('text');
	}
	public function index() {
		
		if ($this->session->userdata('level') =="") {
			 // var_dump($this->session->userdata('level')); exit();
			redirect('auth');
		}
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

