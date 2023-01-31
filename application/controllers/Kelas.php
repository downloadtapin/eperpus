<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('KelasModel');
    }
	
	public function index()
	{
        $data['title'] = "Data Kelas | PERPUSTAKAAN";
        $data['kelas'] = $this->KelasModel->get_kelas();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('kelas/kelas_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->KelasModel->insert_kelas();
            redirect('kelas');
        }else{
            $data['title'] = "Tambah Data Kelas| PERPUSTAKAAN";
            $data['kode'] = $this->KelasModel->CreateCode();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kelas/kelas_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->KelasModel->update_kelas($id);
            redirect('kelas');
        }else{
            $data['title'] = "Perbaharui Data Kelas | PERPUSTAKAAN";
            $data['kelas'] = $this->KelasModel->get_kelas_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kelas/kelas_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->KelasModel->delete_kelas($id);
            redirect('kelas');
        }
    }
}
