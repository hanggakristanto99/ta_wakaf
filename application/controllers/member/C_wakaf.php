<?php
// session_start();
class C_wakaf extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/m_wakaf');
		$this->load->helper('text');
	}
	public function index() {
		// if ($this->session->userdata('level')=="") {
		// 	redirect('auth');
		// }

		$data['username'] = $this->session->userdata('username');
		$data['wakaf']=$this->m_wakaf->tampil_data();
		$this->load->view('user/wakaf', $data);
	}
		function e($kode){
		$data_kode = array('id'=>$kode);
		$data['wakaf']=$this->m_wakaf->cari_data($data_kode);
		$this->load->view('user/detail_wakaf',$data);
	}
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>
