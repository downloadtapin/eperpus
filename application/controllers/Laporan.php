<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model(array('PenerbitModel', 'BTamuModel', 'KategoriBukuModel', 'PengembalianModel', 'KelasModel', 'AnggotaModel', 'BukuModel', 'PeminjamanModel'));
    }

    public function index()
    {
        $data['title'] = "Data Anggota Perpustakaan | PERPUSTAKAAN";
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['kelas'] = $this->KelasModel->get_kelas();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/filter_anggota', $data);
        $this->load->view('template/footer');
    }
    public function LaporanPeminjamBuku()
    {
        $data['title'] = "Data Peminjaman Perpustakaan | PERPUSTAKAAN";
        $data['peminjaman'] = $this->PeminjamanModel->get_peminjaman();
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['buku'] = $this->BukuModel->get_buku();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/filter_peminjaman', $data);
        $this->load->view('template/footer');

    }
    public function LaporanPengembalianBuku()
    {
        $data['title'] = "Data Pengembalian Buku Perpustakaan | PERPUSTAKAAN";
        $data['pengembalian'] = $this->PengembalianModel->get_pengembalian();
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['buku'] = $this->BukuModel->get_buku();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/filter_pengembalian', $data);
        $this->load->view('template/footer');

    }

    public function LaporanBuku()
    {
        $data['title'] = "Data Buku Perpustakaan | PERPUSTAKAAN";
        $data['buku'] = $this->BukuModel->get_buku();
        $data['penerbit'] = $this->PenerbitModel->get_penerbit();
        $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/filter_buku', $data);
        $this->load->view('template/footer');

    }
    public function LaporanBTamu()
    {
        $data['title'] = "Buku Kunjungan Tamu Perpustakaan | PERPUSTAKAAN";
        $data['btamu'] = $this->BTamuModel->get_btamu();
        $data['kelas'] = $this->KelasModel->get_kelas();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/filter_btamu', $data);
        $this->load->view('template/footer');

    }

    public function printData()
    {

        $search = $this->input->post('search');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $data['start'] = $startDate;
        $data['end'] = $endDate;
        $data['data'] = $this->BTamuModel->filterData($search, $startDate, $endDate);
        $this->load->view('laporan/laporan_btamu', $data);
    }
    public function printDataAnggota()
    {

        $search = $this->input->post('search');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $data['start'] = $startDate;
        $data['end'] = $endDate;
        $data['result'] = $this->AnggotaModel->filterData($search, $startDate, $endDate);
        $this->load->view('laporan/laporan_anggota', $data);
    }
    public function printDataPeminjaman()
    {

        $search = $this->input->post('search');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $data['start'] = $startDate;
        $data['end'] = $endDate;
        $data['data'] = $this->PeminjamanModel->filterData($search, $startDate, $endDate);
        $this->load->view('laporan/laporan_peminjamanbuku', $data);
    }
    public function printDataPengembalian()
    {

        $search = $this->input->post('search');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $data['start'] = $startDate;
        $data['end'] = $endDate;
        $data['data'] = $this->PengembalianModel->filterData($search, $startDate, $endDate);
        $this->load->view('laporan/laporan_pengembalianbuku', $data);
    }
    public function printDataBuku()
    {

        $search = $this->input->post('id_penerbit');
        $data['search'] = $search;
        $data['nama_penerbit'] = $this->db->where('id_penerbit', $search)
            ->get('penerbit')
            ->row()
            ->penerbit;
        $data['data'] = $this->BukuModel->filterData($search);
        $this->load->view('laporan/laporan_buku', $data);
    }


}