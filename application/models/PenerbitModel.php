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