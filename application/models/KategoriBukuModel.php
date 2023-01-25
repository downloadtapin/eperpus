<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriBukuModel extends CI_Model {

    private $tabel = "kategoribuku";

    public function get_kategoribuku()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_kategoribuku_byid($id){
        return $this->db->get_where($this->tabel, ['id_kb' => $id]) ->row();
    }

    public function insert_kategoribuku(){
        $data = [
            'kd_kategori' => $this->input->post('kd_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_kategoribuku(){
        $data = [
            'kd_kategori' => $this->input->post('kd_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori')
        ];
        $this->db->where('id_kb', $this->input->post('id_kb'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_kategoribuku($id){
        $this->db->where('id_kb', $id);
        $this->db->delete($this->tabel);
    }
    
}