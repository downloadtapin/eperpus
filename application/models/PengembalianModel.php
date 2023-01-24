<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengembalianModel extends CI_Model {

    private $tabel = "pengembalian";

    public function get_pengembalian()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_pengembalian_byid($id){
        return $this->db->get_where($this->tabel, ['id_kembali' => $id]) ->row();
    }

    public function insert_pengembalian(){
        $data = [
            'buku_id' => $this->input->post('buku_id'),
            'anggota_id' => $this->input->post('anggota_id'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'total_buku' => $this->input->post('total_buku'),
            'denda' => $this->input->post('denda')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_pengembalian(){
        $data = [
            'buku_id' => $this->input->post('buku_id'),
            'anggota_id' => $this->input->post('anggota_id'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'total_buku' => $this->input->post('total_buku'),
            'denda' => $this->input->post('denda')
        ];
        $this->db->where('id_kembali', $this->input->post('id_kembali'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_pengembalian($id){
        $this->db->where('id_kembali', $id);
        $this->db->delete($this->tabel);
    }
    
}