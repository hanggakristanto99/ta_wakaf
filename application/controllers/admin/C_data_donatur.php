<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_data_donatur extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();

		//load model
		$this->load->model('admin/m_data_donatur'); 
		$this->load->helper('text');

	}

	

	public function index()
	{
		
		if ($this->session->userdata('level') =="") {
			
			redirect('auth');
		}
		$data['username'] = $this->session->userdata('username');
		$data = array(

			'title' 	=> 'Data Buku',
			'data_donatur'	=> $this->m_data_donatur->get_all(),

		);

		$this->load->view('admin/data_donatur/main', $data);
	}

	public function input()
	{
		$data = array(

			'title' 	=> 'Tambah Data Donatur'

		);

		$this->load->view('admin/data_donatur/input', $data);
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

		$this->m_data_donatur->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('admin/c_data_donatur');

	}

	public function edit($id_buku)
	{
		$id_buku = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Buku',
			'data_buku' => $this->m_data_donatur->edit($id_buku)

		);

		$this->load->view('edit_buku', $data);
	}

	public function update()
	{
		$id['id'] = $this->input->post("id");
		$data = array(

			'no_isbn' 			=> $this->input->post("no_isbn"),
			'nama_buku' 		=> $this->input->post("nama_buku"),
			'tanggal_terbit' 	=> $this->input->post("tanggal_terbit"),
			'pengarang' 		=> $this->input->post("pengarang"),
			
		);

		$this->m_data_donatur->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('buku/');

	}


		function hapus($uid){
		$data_kode = array('uid'=>$uid);
		$this->m_data_donatur->hapus($data_kode);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		redirect('admin/c_data_donatur');
	}



}
