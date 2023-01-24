<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasModel extends CI_Model {

    private $tabel = "kelas";

    public function get_kelas()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_kelas_byid($id){
        return $this->db->get_where($this->tabel, ['id_kelas' => $id]) ->row();
    }

    public function insert_kelas(){
        $data = [
            'kd_kelas' => $this->input->post('kd_kelas'),
            'nama_kelas' => $this->input->post('nama_kelas'),
            'jumlah_siswa' => $this->input->post('jumlah_siswa')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_kelas(){
        $data = [
            'kd_kelas' => $this->input->post('kd_kelas'),
            'nama_kelas' => $this->input->post('nama_kelas'),
            'jumlah_siswa' => $this->input->post('jumlah_siswa')
        ];
        $this->db->where('id_kelas', $this->input->post('id_kelas'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_kelas($id){
        $this->db->where('id_kelas', $id);
        $this->db->delete($this->tabel);
    }
    
}