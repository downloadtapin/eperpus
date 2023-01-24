<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeminjamanModel extends CI_Model {

    private $tabel = "peminjaman";
    private $view = "tampil_pinjam";

    public function get_peminjaman()
    {
        $q = "select peminjaman.*, anggota.nisn, buku.isbn from peminjaman inner join anggota on peminjaman.anggota_id = anggota.id_anggota inner join buku
        on peminjaman.buku_id = buku.id_buku";
        return $this->db->query($q)->result();
        //return $this->db->get('tampil_pinjam')->result_array();
        //return $this->db->get($this->tabel)->result();
    }

    public function get_peminjaman_byid($id){
        return $this->db->get_where($this->tabel, ['id_pinjam' => $id]) ->row();
    }

    public function insert_peminjaman(){
        $data = [
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'nisn' => $this->input->post('nisn'),
            'isbn' => $this->input->post('isbn'),
            'total_buku' => $this->input->post('total_buku')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_peminjaman(){
        $data = [
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'anggota_id' => $this->input->post('anggota_id'),
            'buku_id' => $this->input->post('buku_id'),
            'total_buku' => $this->input->post('total_buku')
        ];
        $this->db->where('id_pinjam', $this->input->post('id_pinjam'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_peminjaman($id){
        $this->db->where('id_pinjam', $id);
        $this->db->delete($this->tabel);
    }
    
}