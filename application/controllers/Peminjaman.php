<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model(array('AnggotaModel','BukuModel','PeminjamanModel'));
    }
	
	public function index()
	{
        $data['title'] = "Data Peminjaman Perpustakaan | PERPUSTAKAAN";
        $data['peminjaman'] = $this->PeminjamanModel->get_peminjaman();
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['buku'] = $this->BukuModel->get_buku();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('peminjaman/peminjaman_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->PeminjamanModel->insert_peminjaman();
            redirect('peminjaman');
        }else{
            $data['title'] = "Data Peminjaman Perpustakaan | PERPUSTAKAAN";
            $data['peminjaman'] = $this->PeminjamanModel->get_peminjaman();
            $data['anggota'] = $this->AnggotaModel->get_anggota();
            $data['buku'] = $this->BukuModel->get_buku();
            $data['kode'] = $this->PeminjamanModel->CreateCode();
            
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('peminjaman/peminjaman_create', $data);
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->PeminjamanModel->update_peminjaman($id);
            redirect('peminjaman');
        }else{
            $data['title'] = "Perbaharui Data Peminjaman Perpustakaan | E-PERPUS";
            $data['anggota'] = $this->AnggotaModel->get_anggota();
            $data['peminjaman'] = $this->PeminjamanModel->get_peminjaman_byid($id);
            $data['buku'] = $this->BukuModel->get_buku();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('peminjaman/peminjaman_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->PeminjamanModel->delete_peminjaman($id);
            redirect('peminjaman');
        }
    }
}
