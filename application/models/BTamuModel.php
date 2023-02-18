<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BTamuModel extends CI_Model
{

    private $tabel = "btamu";

    public function get_btamu()
    {
        $q = "select btamu.*, kelas.nama_kelas from btamu inner join kelas on btamu.kelas_id = kelas.id_kelas";
        return $this->db->query($q)->result();
        //return $this->db->get($this->tabel)->result();
    }

    public function get_btamu_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id_btamu' => $id])->row();
    }

    public function insert_btamu()
    {
        $data = [
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'kelas_id' => $this->input->post('kelas_id'),
            'keperluan' => $this->input->post('keperluan')
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function update_btamu()
    {
        $data = [
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'kelas_id' => $this->input->post('kelas_id'),
            'keperluan' => $this->input->post('keperluan')
        ];
        $this->db->where('id_btamu', $this->input->post('id_btamu'));
        $this->db->update($this->tabel, $data);
    }


    public function delete_btamu($id)
    {
        $this->db->where('id_btamu', $id);
        $this->db->delete($this->tabel);
    }
    public function filterData($search, $startDate, $endDate)
    {
        $this->db->select('btamu.*, kelas.nama_kelas');
        $this->db->from('btamu');
        $this->db->join('kelas', 'btamu.kelas_id = kelas.id_kelas');
        
        if (!empty($startDate) && !empty($endDate)) {
            $this->db->where('tanggal_kunjungan >=', $startDate);
            $this->db->where('tanggal_kunjungan <=', $endDate);
        }
        $query = $this->db->get();
        return $query->result();
    }
}