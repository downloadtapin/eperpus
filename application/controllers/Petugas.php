<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('PetugasModel');
    }
	
	public function index()
	{
        $data['title'] = "Data Petugas Perpustakaan | PERPUSTAKAAN";
        $data['petugas'] = $this->PetugasModel->get_petugas();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/admin_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->PetugasModel->insert_admin();
            redirect('petugas');
        }else{
            $data['title'] = "Tambah Data Petugas Perpustakaan | PERPUSTAKAAN";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/admin_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->PetugasModel->update_admin($id);
            redirect('petugas');
        }else{
            $data['title'] = "Perbaharui Data Petugas Perpustakaan | PERPUSTAKAAN";
            $data['petugas'] = $this->PetugasModel->get_admin_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/admin_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->PetugasModel->delete_admin($id);
            redirect('petugas');
        }
    }
}
