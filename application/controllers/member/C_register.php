
<?php
// session_start();
class C_register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('user/m_register'); 
		
		$this->load->helper('text');
	}
	public function index() {
		// if ($this->session->userdata('level')=="") {
		// 	redirect('auth');
		// }

		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/register', $data);
	}
		public function simpan()
	{
		$data = array(

			'username' 			=> $this->input->post("username"),
			'email' 			=> $this->input->post("email"),
			'password' 			=> md5($this->input->post('password')),
			'level' 		=> $this->input->post("level")
			
		);
		// var_dump($data); exit();

		$this->m_register->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('member/c_halaman_login');

	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('c_home');
	}
}
?>
