<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		// var_dump($hasil);
		$count=count($hasil);
		// echo $count;

		if ($count > 0 ) {

			// die('masuk');
			foreach ($hasil as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			$this->session->set_userdata($sess_data);
			if ($this->session->userdata('level')=='admin') {
				
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')=='member') {
				
				redirect('c_home');
			}		
		}
		else {
			// die('tidak masuk');

			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>