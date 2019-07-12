

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_halaman_login extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('user/m_halaman_login');
		// if ($this->session->userdata('level')=="") {
		// 	redirect('member/c_jenis_wakaf');
		// }
		if ($this->session->userdata('level') =="member") {
			redirect('member/c_jenis_wakaf');
		}
		
	}

	public function index() {
		$this->load->view('user/halaman_login');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);

		// print_r($data);
		// exit();

		$this->load->model('m_halaman_login'); // load model_user
		$hasil = $this->m_halaman_login->cek_user($data);
		$count=count($hasil);
		// echo $count;

		if ($count > 0 ) {
			// var_dump("berhasil");
			// exit();
			// die('masuk');
			foreach ($hasil as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['email'] = $sess->email;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			$this->session->set_userdata($sess_data);
			if ($this->session->userdata('level')=='admin') {
				
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')=='member') {
				
				redirect('member/c_jenis_wakaf');
			}		
		}
		else {
			// die('sese');
			// die;
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>