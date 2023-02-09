<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengembalianModel extends CI_Model {

    private $tabel = "pengembalian";

    public function get_pengembalian()
    {
        $q = "select pengembalian.*, anggota.nama_anggota, buku.judul_buku from pengembalian inner join anggota on pengembalian.nisn = anggota.nisn inner join buku
        on pengembalian.isbn = buku.isbn";
        return $this->db->query($q)->result();
        //return $this->db->get($this->tabel)->result();
    }

    public function get_pengembalian_byid($id){
        $q = "select pengembalian.*, anggota.nama_anggota, buku.judul_buku from pengembalian 
        inner join anggota on pengembalian.nisn = anggota.nisn 
        inner join buku on pengembalian.isbn = buku.isbn 
        where pengembalian.id_kembali = '$id'";
        return $this->db->query($q)->row();
        //return $this->db->get_where($this->tabel, ['id_kembali' => $id]) ->row();
    }
    public function CreateCode(){
        $this->db->select('RIGHT(pengembalian.kd_kembali,5) as kd_kembali', FALSE);
        $this->db->order_by('kd_kembali','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('pengembalian');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_kembali) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KDK".$batas;
        return $kodetampil;  
    }
    public function insert_pengembalian(){
        $data = [
            'kd_kembali' => $this->input->post('kd_kembali'),
            'kd_pinjam' => $this->input->post('kd_pinjam'),
            'isbn' => $this->input->post('isbn'),
            'nisn' => $this->input->post('nisn'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'total_buku' => $this->input->post('total_buku'),
            'denda' => $this->input->post('denda')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_pengembalian(){
        $data = [
            'kd_kembali' => $this->input->post('kd_kembali'),
            'kd_pinjam' => $this->input->post('kd_pinjam'),
            'isbn' => $this->input->post('isbn'),
            'nisn' => $this->input->post('nisn'),
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