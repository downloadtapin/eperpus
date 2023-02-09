<?php

class AuthModel extends CI_Model
{
    function cek_login($username, $password){     
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('anggota');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'id_anggota' => $row->id_anggota,
                'username' => $row->username,
                'role_id' => $row->role_id,
                'nisn' => $row->nisn,
                'nama_anggota' => $row->nama_anggota,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    function cek_loginAdmin($username, $password){     
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                'id_user' => $row->id_user,
                'username' => $row->username,
                'role_id' => $row->role_id,
                'nisn' => $row->nisn,
                'nama_anggota' => $row->nama_anggota,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    } 
}