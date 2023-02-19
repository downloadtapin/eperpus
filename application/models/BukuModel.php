<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuModel extends CI_Model
{

    private $tabel = "buku";

    public function get_buku()
    {
        $q = "select buku.*, kategoribuku.nama_kategori, penulis.penulis, penerbit.penerbit, rak.nama_rak from buku inner join kategoribuku on buku.kategori_id = kategoribuku.id_kb inner join penerbit on penerbit.id_penerbit = buku.id_penerbit inner join penulis on penulis.id_penulis = buku.id_penulis  inner join rak on rak.id_rak = buku.id_rak";
        return $this->db->query($q)->result();
        //return $this->db->get($this->tabel)->result();
    }

    public function get_buku_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id_buku' => $id])->row();
    }
    public function CreateCode()
    {
        $this->db->select('RIGHT(buku.kd_buku,5) as kd_buku', FALSE);
        $this->db->order_by('kd_buku', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('buku');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_buku) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "KDB" . $batas;
        return $kodetampil;
    }
    public function insert_buku()
    {
        $data = [
            'kd_buku' => $this->input->post('kd_buku'),
            'kategori_id' => $this->input->post('kategori_id'),
            'isbn' => $this->input->post('isbn'),
            'judul_buku' => $this->input->post('judul_buku'),
            'id_penulis' => $this->input->post('id_penulis'),
            'id_penerbit' => $this->input->post('id_penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'stok_buku' => $this->input->post('stok_buku'),
            'harga_buku' => $this->input->post('harga_buku'),
            'id_rak' => $this->input->post('id_rak')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_buku()
    {
        $data = [
            'kd_buku' => $this->input->post('kd_buku'),
            'kategori_id' => $this->input->post('kategori_id'),
            'isbn' => $this->input->post('isbn'),
            'judul_buku' => $this->input->post('judul_buku'),
            'id_penulis' => $this->input->post('id_penulis'),
            'id_penerbit' => $this->input->post('id_penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'stok_buku' => $this->input->post('stok_buku'),
            'harga_buku' => $this->input->post('harga_buku'),
            'id_rak' => $this->input->post('id_rak')
        ];
        $this->db->where('id_buku', $this->input->post('id_buku'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_buku($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete($this->tabel);
    }
    public function filterData($search)
    {

        $this->db->select('buku.*, kategoribuku.nama_kategori,
        penulis.penulis, penerbit.penerbit, 
        rak.nama_rak');
        $this->db->from('buku');
        $this->db->join('kategoribuku', 'buku.kategori_id = kategoribuku.id_kb');
        $this->db->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit');
        $this->db->join('penulis', 'penulis.id_penulis = buku.id_penulis');
        $this->db->join('rak', 'rak.id_rak = buku.id_rak');
        $this->db->where('buku.id_penerbit ', $search);
        $query = $this->db->get();
        return $query->result();
    }

}