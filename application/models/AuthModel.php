<?php

class AuthModel extends CI_Model
{
    function cek_login($username, $password){     
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'id_user' => $row->id_user,
                'username' => $row->username,
                'role_id' => $row->role_id,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    } 
}