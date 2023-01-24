<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('PengembalianModel');
    }
	
	public function index()
	{
        $data['title'] = "Data Pengembalian Buku Perpustakaan | PERPUSTAKAAN";
        $data['pengembalian'] = $this->PengembalianModel->get_pengembalian();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pengembalian/pengembalian_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->PengembalianModel->insert_pengembalian();
            redirect('pengembalian');
        }else{
            $data['title'] = "Tambah Data Pengembalian Buku Perpustakaan | PERPUSTAKAAN";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengembalian/pengembalian_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->PengembalianModel->update_pengembalian($id);
            redirect('pengembalian');
        }else{
            $data['title'] = "Perbaharui Data Pengembalian Buku Perpustakaan | PERPUSTAKAAN";
            $data['pengembalian'] = $this->PengembalianModel->get_pengembalian_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengembalian/pengembalian_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->PengembalianModel->delete_pengembalian($id);
            redirect('pengembalian');
        }
    }
}