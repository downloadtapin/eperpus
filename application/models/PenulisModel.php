<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenulisModel extends CI_Model {

    private $tabel = "penulis";

    public function get_penulis()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_penulis_byid($id){
        return $this->db->get_where($this->tabel, ['id_penulis' => $id]) ->row();
    }
    public function CreateCode(){
        $this->db->select('RIGHT(penulis.kd_penulis,5) as kd_penulis', FALSE);
        $this->db->order_by('kd_penulis','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('penulis');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_penulis) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KP".$batas;
        return $kodetampil;  
    }
    public function insert_penulis(){
        $data = [
            'kd_penulis' => $this->input->post('kd_penulis'),
            'penulis' => $this->input->post('penulis')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_penulis(){
        $data = [
            'kd_penulis' => $this->input->post('kd_penulis'),
            'penulis' => $this->input->post('penulis')
        ];
        $this->db->where('id_penulis', $this->input->post('id_penulis'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_penulis($id){
        $this->db->where('kd_penulis', $id);
        $this->db->delete($this->tabel);
    }
    
}