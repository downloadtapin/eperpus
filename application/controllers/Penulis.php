<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('PenulisModel');
    }
	
	public function index()
	{
        $data['title'] = "Data Penulis | PERPUSTAKAAN";
        $data['penulis'] = $this->PenulisModel->get_penulis();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('penulis/penulis_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->PenulisModel->insert_penulis();
            redirect('penulis');
        }else{
            $data['title'] = "Tambah Data Penulis| PERPUSTAKAAN";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('penulis/penulis_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->PenulisModel->update_penulis($id);
            redirect('penulis');
        }else{
            $data['title'] = "Perbaharui Data Penulis | PERPUSTAKAAN";
            $data['penulis'] = $this->PenulisModel->get_penulis_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('penulis/penulis_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->PenulisModel->delete_penulis($id);
            redirect('penulis');
        }
    }
}
