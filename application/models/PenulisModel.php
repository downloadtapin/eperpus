<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenulisModel extends CI_Model {

    private $tabel = "penulis";

    public function get_penulis()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_penulis_byid($id){
        return $this->db->get_where($this->tabel, ['id_penulis' => $id]) ->row();
    }

    public function insert_penulis(){
        $data = [
            'kd_penulis' => $this->input->post('kd_kelas'),
            'penulis' => $this->input->post('penulis')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_penulis(){
        $data = [
            'kd_penulis' => $this->input->post('kd_kelas'),
            'penulis' => $this->input->post('penulis')
        ];
        $this->db->where('id_penulis', $this->input->post('id_penulis'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_penulis($id){
        $this->db->where('id_penulis', $id);
        $this->db->delete($this->tabel);
    }
    
}