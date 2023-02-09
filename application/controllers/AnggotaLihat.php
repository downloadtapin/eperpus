<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnggotaLihat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('rakModel', 'KategoriBukuModel', 'BukuModel', 'PenerbitModel', 'PenulisModel', 'KelasModel', 'AnggotaModel', 'PeminjamanModel'));
    }

    public function DataBuku()
    {
        $data['buku'] = $this->BukuModel->get_buku();
        $data['penerbit'] = $this->PenerbitModel->get_penerbit();
        $data['penulisbuku'] = $this->PenulisModel->get_penulis();
        $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
        $this->load->view('template/header', $data);
        $this->load->view('buku/anggota_lihatbuku', $data);
        $this->load->view('template/footer');
    }
    public function ProfilAnggota($id)
    {
        $data['title'] = "Perbaharui Data Anggota Perpustakaan | PERPUSTAKAAN";
        $data['anggota'] = $this->AnggotaModel->get_anggota_byid($id);
        $data['kelas'] = $this->KelasModel->get_kelas();

        $this->load->view('template/header', $data);

        $this->load->view('anggota/anggota_profil', $data);
        $this->load->view('template/footer');
    }

    public function DataPeminjaman($id)
    {

        $id = $this->session->userdata('nisn');
        $data['peminjaman'] = $this->PeminjamanModel->DataPeminjaman($id);

        $this->load->view('template/header', $data);
        $this->load->view('peminjaman/peminjaman_lihat', $data);
        $this->load->view('template/footer');
    }
}
