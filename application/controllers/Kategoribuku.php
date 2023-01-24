<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoribuku extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('KategoriBukuModel');
    }
	
	public function index()
	{
        $data['title'] = "Data Kategori Buku | PERPUSTAKAAN";
        $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('kategoribuku/kategoribuku_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->KategoriBukuModel->insert_kategoribuku();
            redirect('kategoribuku');
        }else{
            $data['title'] = "Tambah Data Kategori Buku | PERPUSTAKAAN";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kategoribuku/kategoribuku_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->KategoriBukuModel->update_kategoribuku($id);
            redirect('kategoribuku');
        }else{
            $data['title'] = "Perbaharui Data Kategori Buku | PERPUSTAKAAN";
            $data['kategoribuku'] = $this->KategoriBukuModel->get_kategoribuku_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kategoribuku/kategoribuku_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->KategoriBukuModel->delete_kategoribuku($id);
            redirect('kategoribuku');
        }
    }
}
