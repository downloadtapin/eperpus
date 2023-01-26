<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model(array('PengembalianModel','KelasModel','AnggotaModel','BukuModel','PeminjamanModel' ));
    }

    public function index()
    {
        $data['title'] = "Data Anggota Perpustakaan | PERPUSTAKAAN";
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['kelas'] = $this->KelasModel->get_kelas();

        $this->load->view('laporan/laporan_anggota', $data);
    }
    public function LaporanPeminjamBuku()
    {
        $data['title'] = "Data Peminjaman Perpustakaan | PERPUSTAKAAN";
        $data['peminjaman'] = $this->PeminjamanModel->get_peminjaman();
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['buku'] = $this->BukuModel->get_buku();

        $this->load->view('laporan/laporan_peminjamanbuku', $data);
    }
    public function LaporanPeminjamBuku()
    {
        $data['title'] = "Data Pengembalian Buku Perpustakaan | PERPUSTAKAAN";
        $data['pengembalian'] = $this->PengembalianModel->get_pengembalian();

        $this->load->view('laporan/laporan_peminjamanbuku', $data);
    }
}
