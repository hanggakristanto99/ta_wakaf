<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pop extends CI_Model {
	

	public function proses_tampil(){

		$sql = $this->db->get('berita');

		return $sql;

		
	}

	public function get_detail($id = NULL){
		
		$query = $this->db->get_where('berita', array('id' => $id))->row();
		return $query;

	}

}