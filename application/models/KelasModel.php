<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasModel extends CI_Model {

    private $tabel = "kelas";

    public function get_kelas()
    {
        return $this->db->get($this->tabel)->result();
    }
    public function CreateCode(){
        $this->db->select('RIGHT(kelas.kd_kelas,5) as kd_kelas', FALSE);
        $this->db->order_by('kd_kelas','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('kelas');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_kelas) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KLS".$batas;
        return $kodetampil;  
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