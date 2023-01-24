<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('PenerbitModel');
    }
	
	public function index()
	{
        $data['title'] = "Data Penerbit | PERPUSTAKAAN";
        $data['penerbit'] = $this->PenerbitModel->get_penerbit();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('penerbit/penerbit_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->PenerbitModel->insert_penerbit();
            redirect('penerbit');
        }else{
            $data['title'] = "Tambah Data Penerbit| PERPUSTAKAAN";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('penerbit/penerbit_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->PenerbitModel->update_penerbit($id);
            redirect('penerbit');
        }else{
            $data['title'] = "Perbaharui Data Penerbit | PERPUSTAKAAN";
            $data['penerbit'] = $this->PenerbitModel->get_penerbit_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('penerbit/penerbit_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->PenerbitModel->delete_penerbit($id);
            redirect('penerbit');
        }
    }
}
