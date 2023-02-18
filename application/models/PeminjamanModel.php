<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PeminjamanModel extends CI_Model
{

    private $tabel = "peminjaman";
    private $view = "tampil_pinjam";

    public function get_peminjaman()
    {
        $q = "select peminjaman.*, anggota.nisn, buku.isbn from peminjaman inner join anggota on peminjaman.nisn = anggota.nisn inner join buku
        on peminjaman.isbn = buku.isbn";
        return $this->db->query($q)->result();
        //return $this->db->get('tampil_pinjam')->result_array();
        //return $this->db->get($this->tabel)->result();
    }
    public function get_peminjaman2($id)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->where('nisn', $id);
        $query = $this->db->get();

        // mengembalikan hasil query
        return $query;
    }


    public function get_peminjaman_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id_pinjam' => $id])->row();
    }
    public function CreateCode()
    {
        $this->db->select('RIGHT(peminjaman.kd_pinjam,5) as kd_pinjam', FALSE);
        $this->db->order_by('kd_pinjam', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('peminjaman');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_pinjam) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "KDP" . $batas;
        return $kodetampil;
    }
    public function insert_peminjaman()
    {
        $data = [
            'kd_pinjam' => $this->input->post('kd_pinjam'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'nisn' => $this->input->post('nisn'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'judul_buku' => $this->input->post('judul_buku'),
            'isbn' => $this->input->post('isbn'),
            'lama_pinjam' => $this->input->post('lama_pinjam')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_peminjaman()
    {
        $data = [
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'judul_buku' => $this->input->post('judul_buku'),
            'nisn' => $this->input->post('nisn'),
            'isbn' => $this->input->post('isbn'),
            'lama_pinjam' => $this->input->post('lama_pinjam')
        ];
        $this->db->where('id_pinjam', $this->input->post('id_pinjam'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_peminjaman($id)
    {
        $this->db->where('id_pinjam', $id);
        $this->db->delete($this->tabel);
    }

    public function DataPeminjaman($id) {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->where('nisn', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function filterData($search, $startDate, $endDate)
    {
        $this->db->select('peminjaman.*, anggota.nisn, buku.isbn');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'peminjaman.nisn = anggota.nisn');
        $this->db->join('buku', 'peminjaman.isbn = buku.isbn');
        
        if (!empty($startDate) && !empty($endDate)) {
            $this->db->where('tanggal_pinjam >=', $startDate);
            $this->db->where('tanggal_pinjam <=', $endDate);
        }
        $query = $this->db->get();
        return $query->result();
    }
}
