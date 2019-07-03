<?php

 
class pop extends CI_Controller {
	public function __construct(){
 
		parent::__construct();
 
		$this->load->model('pop');
 
	}
	public function index(){
		
		$data['proses'] = $this->pop->proses_tampil();
		$data['content'] = "page/index";
		$this->load->view('pop', $data);
	}
 
	public function detail($id){
 
		$this->load->model('pop');
 
		$detail = $this->pop->get_detail($id);
		$data['detail'] = $detail;
		$this->load->view('pop', $data);
 
	}
 
}