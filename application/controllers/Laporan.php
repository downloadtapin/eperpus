<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model(array('BTamuModel','KategoriBukuModel','PengembalianModel','KelasModel','AnggotaModel','BukuModel','PeminjamanModel' ));
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
    public function LaporanPengembalianBuku()
    {
        $data['title'] = "Data Pengembalian Buku Perpustakaan | PERPUSTAKAAN";
        $data['pengembalian'] = $this->PengembalianModel->get_pengembalian();
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['buku'] = $this->BukuModel->get_buku();

        $this->load->view('laporan/laporan_pengembalianbuku', $data);
    }

    public function LaporanBuku()
	{
        $data['title'] = "Data Buku Perpustakaan | PERPUSTAKAAN";
        $data['buku'] = $this->BukuModel->get_buku();
        $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
        $this->load->view('laporan/laporan_buku', $data);
	}
    public function LaporanBTamu()
	{
        $data['title'] = "Buku Kunjungan Tamu Perpustakaan | PERPUSTAKAAN";
        $data['btamu'] = $this->BTamuModel->get_btamu();
        $data['kelas'] = $this->KelasModel->get_kelas();
        $this->load->view('laporan/laporan_btamu', $data);

	}
}
