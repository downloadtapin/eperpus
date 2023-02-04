<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rak extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('rakModel');
    }
	
	public function index()
	{
        $data['title'] = "Data rak Buku | PERPUSTAKAAN";
        $data['rak'] = $this->rakModel->get_rak();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('rak/rak_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->rakModel->insert_rak();
            redirect('rak');
        }else{
            $data['title'] = "Tambah Data Rak Buku | PERPUSTAKAAN";
            $data['kode'] = $this->rakModel->CreateCode();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('rak/rak_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->rakModel->update_rak($id);
            redirect('rak');
        }else{
            $data['title'] = "Perbaharui Data Kategori Buku | PERPUSTAKAAN";
            $data['rak'] = $this->rakModel->get_rak_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('rak/rak_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->rakModel->delete_rak($id);
            redirect('rak');
        }
    }
}
