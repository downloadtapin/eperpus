<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetugasModel extends CI_Model {

    private $tabel = "petugas";

    public function get_petugas()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_admin_byid($id){
        return $this->db->get_where($this->tabel, ['id_admin' => $id]) ->row();
    }

    public function insert_admin(){
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            //'tempat_lahir' => $this->input->post('tempat_lahir'),
            //'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_admin(){
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            //'tempat_lahir' => $this->input->post('tempat_lahir'),
            //'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];
        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_admin($id){
        $this->db->where('id_admin', $id);
        $this->db->delete($this->tabel);
    }
    
}