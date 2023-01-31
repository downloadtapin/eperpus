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
    public function CreateCode(){
        $this->db->select('RIGHT(kategoribuku.kd_kategori,5) as kd_kategori', FALSE);
        $this->db->order_by('kd_kategori','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('kategoribuku');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_kategori) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KB".$batas;
        return $kodetampil;  
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