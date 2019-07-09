<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_donatur extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('login_session')
				 ->order_by('uid', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		// var_dump($data);exit();
		$query = $this->db->insert("login_session", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($uid)
	{
		
		$query = $this->db->where("uid", $uid)
				->get("login_session");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $uid)
	{
		
		$query = $this->db->update("login_session", $data, $uid);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("login_session", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}