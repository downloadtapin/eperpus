<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BTamu extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model(array('KelasModel','BTamuModel'));
    }
	
	public function index()
	{
        $data['title'] = "Buku Kunjungan Tamu Perpustakaan | PERPUSTAKAAN";
        $data['btamu'] = $this->BTamuModel->get_btamu();
        $data['kelas'] = $this->KelasModel->get_kelas();
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('btamu/btamu_read', $data);
        $this->load->view('template/footer');
	}

    public function tambah(){
        if(isset($_POST['create'])){
            $this->BTamuModel->insert_btamu();
            redirect('btamu');
        }else{
            $data['title'] = "Tambah Data Kunjungan Tamu Perpustakaan | PERPUSTAKAAN";
            $data['kelas'] = $this->KelasModel->get_kelas();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('btamu/btamu_create', $data);
            $this->load->view('template/footer');
        }
    }

    public function ubah($id){
        if(isset($_POST['update'])){
            $this->BTamuModel->update_btamu($id);
            redirect('btamu');
        }else{
            $data['title'] = "Perbaharui Data Kunjungan Tamu Perpustakaan | E-PERPUS";
            $data['btamu'] = $this->BTamuModel->get_btamu_byid($id);
            $data['kelas'] = $this->KelasModel->get_kelas();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('btamu/btamu_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->BTamuModel->delete_btamu($id);
            redirect('btamu');
        }
    }
}
