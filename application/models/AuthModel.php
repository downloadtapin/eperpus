<?php

class AuthModel extends CI_Model
{
	private $_table = "user";
	
	public function cek_login($where){
		return $this->db->get_where('user',$where);
	}
}