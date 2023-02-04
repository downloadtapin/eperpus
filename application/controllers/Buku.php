<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model(array('rakModel','KategoriBukuModel','BukuModel','PenerbitModel','PenulisModel'));
    }
	
	public function index()
	{
        $data['title'] = "Data Buku Perpustakaan | PERPUSTAKAAN";
        $data['buku'] = $this->BukuModel->get_buku();
        $data['penerbit'] = $this->PenerbitModel->get_penerbit();
        $data['penulisbuku'] = $this->PenulisModel->get_penulis();
        $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('buku/buku_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->BukuModel->insert_buku();
            redirect('buku');
        }else{
            $data['title'] = "Tambah Data Buku Perpustakaan | PERPUSTAKAAN";
            $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
            $data['kode'] = $this->BukuModel->CreateCode();
            $data['penerbit'] = $this->PenerbitModel->get_penerbit();
            $data['rak'] = $this->rakModel->get_rak();
            $data['penulisbuku'] = $this->PenulisModel->get_penulis();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('buku/buku_create', $data);
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->BukuModel->update_buku($id);
            redirect('buku');
        }else{
            $data['title'] = "Perbaharui Data Buku Perpustakaan | PERPUSTAKAAN";
            $data['buku'] = $this->BukuModel->get_buku_byid($id);
            $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
            $data['penerbit'] = $this->PenerbitModel->get_penerbit();
            $data['rak'] = $this->rakModel->get_rak();
            $data['penulisbuku'] = $this->PenulisModel->get_penulis();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('buku/buku_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->BukuModel->delete_buku($id);
            redirect('buku');
        }
    }
}
