<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class model_user extends CI_Model {

		// public function cek_user($data) {
		// 	print_r($this->db->get_where('login_session', $data)->result());
			// exit();

			// $query = $this->db->get_where('login_session', $data);
			public function cek_user($data) {
			$query = $this->db->get_where('login_session', $data)->result();
			
			// $query->result();
			return $query;
		}

	}

?>