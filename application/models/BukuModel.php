<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuModel extends CI_Model {

    private $tabel = "buku";

    public function get_buku()
    {
        $q = "select buku.*, kategoribuku.nama_kategori from buku inner join kategoribuku on buku.kategori_id = kategoribuku.id_kb";
        return $this->db->query($q)->result();
        //return $this->db->get($this->tabel)->result();
    }

    public function get_buku_byid($id){
        return $this->db->get_where($this->tabel, ['id_buku' => $id]) ->row();
    }

    public function insert_buku(){
        $data = [
            'kd_buku' => $this->input->post('kd_buku'),
            'kategori_id' => $this->input->post('kategori_id'),
            'isbn' => $this->input->post('isbn'),
            'judul_buku' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'stok_buku' => $this->input->post('stok_buku'),
            'harga_buku' => $this->input->post('harga_buku')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_buku(){
        $data = [
            'kd_buku' => $this->input->post('kd_buku'),
            'kategori_id' => $this->input->post('kategori_id'),
            'isbn' => $this->input->post('isbn'),
            'judul_buku' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'stok_buku' => $this->input->post('stok_buku'),
            'harga_buku' => $this->input->post('harga_buku')
        ];
        $this->db->where('id_buku', $this->input->post('id_buku'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_buku($id){
        $this->db->where('id_buku', $id);
        $this->db->delete($this->tabel);
    }
    
}