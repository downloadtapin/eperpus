<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model(array('KelasModel','AnggotaModel'));
    }
	
	public function index()
	{
        $data['title'] = "Data Anggota Perpustakaan | PERPUSTAKAAN";
        $data['anggota'] = $this->AnggotaModel->get_anggota();
        $data['kelas'] = $this->KelasModel->get_kelas();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('anggota/anggota_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->AnggotaModel->insert_anggota();
            redirect('anggota');
        }else{
            $data['title'] = "Tambah Data Anggota Perpustakaan | PERPUSTAKAAN";
            $data['kelas'] = $this->KelasModel->get_kelas();
            $data['kode'] = $this->AnggotaModel->CreateCode();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('anggota/anggota_create', $data);
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->AnggotaModel->update_anggota($id);
            redirect('anggota');
        }else{
            $data['title'] = "Perbaharui Data Anggota Perpustakaan | PERPUSTAKAAN";
            $data['anggota'] = $this->AnggotaModel->get_anggota_byid($id);
            $data['kelas'] = $this->KelasModel->get_kelas();
            
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('anggota/anggota_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->AnggotaModel->delete_anggota($id);
            redirect('anggota');
        }
    }
}
