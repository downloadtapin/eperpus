<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaModel extends CI_Model {

    private $tabel = "anggota";

    public function get_anggota()
    {
        $q = "select anggota.*, kelas.nama_kelas from anggota inner join kelas on anggota.kelas_id = kelas.id_kelas";
        return $this->db->query($q)->result();
        //return $this->db->get($this->tabel)->result();
    }
    public function CreateCode(){
        $this->db->select('RIGHT(anggota.kd_anggota,5) as kd_anggota', FALSE);
        $this->db->order_by('kd_anggota','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('anggota');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kd_anggota) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "KA".$batas;
        return $kodetampil;  
    }
    public function get_anggota_byid($id){
        return $this->db->get_where($this->tabel, ['id_anggota' => $id]) ->row();
    }

    public function insert_anggota(){
        $data = [
            'kd_anggota' => $this->input->post('kd_anggota'),
            'nisn' => $this->input->post('nisn'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kelas_id' => $this->input->post('kelas_id'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_anggota(){
        $data = [
            'kd_anggota' => $this->input->post('kd_anggota'),
            'nisn' => $this->input->post('nisn'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kelas_id' => $this->input->post('kelas_id'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];
        $this->db->where('id_anggota', $this->input->post('id_anggota'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_anggota($id){
        $this->db->where('id_anggota', $id);
        $this->db->delete($this->tabel);
    }
    
}