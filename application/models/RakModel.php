<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RakModel extends CI_Model {

    private $tabel = "rak";

    public function get_rak()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_rak_byid($id){
        return $this->db->get_where($this->tabel, ['id_rak' => $id]) ->row();
    }
    public function CreateCode(){
        $this->db->select('RIGHT(rak.kd_rak,5) as kd_rak', FALSE);
        $this->db->order_by('kd_rak','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('rak');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_rak) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KR".$batas;
        return $kodetampil;  
    }
    public function insert_rak(){
        $data = [
            'kd_rak' => $this->input->post('kd_rak'),
            'nama_rak' => $this->input->post('nama_rak')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_rak(){
        $data = [
            'kd_rak' => $this->input->post('kd_rak'),
            'nama_rak' => $this->input->post('nama_rak')
        ];
        $this->db->where('id_rak', $this->input->post('id_rak'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_rak($id){
        $this->db->where('id_rak', $id);
        $this->db->delete($this->tabel);
    }
    
}