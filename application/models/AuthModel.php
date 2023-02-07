<?php

class AuthModel extends CI_Model
{
	private $_table = "user";
	
	public function cek_login($username, $password){
		$this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'id_user' => $row->id,
                'username' => $row->username,
                'role_id' => $row->role,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
	}
}