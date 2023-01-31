<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenerbitModel extends CI_Model {

    private $tabel = "penerbit";

    public function get_penerbit()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_penerbit_byid($id){
        return $this->db->get_where($this->tabel, ['kd_penerbit' => $id]) ->row();
    }
    public function CreateCode(){
        $this->db->select('RIGHT(penerbit.kd_penerbit,5) as kd_penerbit', FALSE);
        $this->db->order_by('kd_penerbit','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('penerbit');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_penerbit) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KP".$batas;
        return $kodetampil;  
    }
    public function insert_penerbit(){
        $data = [
            'kd_penerbit' => $this->input->post('kd_penerbit'),
            'penerbit' => $this->input->post('penerbit')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_penerbit(){
        $data = [
            'kd_penerbit' => $this->input->post('kd_penerbit'),
            'penerbit' => $this->input->post('penerbit')
        ];
        $this->db->where('kd_penerbit', $this->input->post('kd_penerbit'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_penerbit($id){
        $this->db->where('kd_penerbit', $id);
        $this->db->delete($this->tabel);
    }
    
}