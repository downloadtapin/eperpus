<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAnggota extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('validated')) {
            redirect('Auth');
        }
    }
	public function index()
	{
        $data['title'] = "Dashboard | PERPUSTAKAAN";
        $data['username'] = $this->session->userdata('username');
        $data['role'] = $this->session->userdata('role_id');
        $data['id_anggota'] = $this->session->userdata('id_anggota');
		$this->load->view('template/header', $data);
        $this->load->view('home_view');
        //$this->load->view('dashboard/dashboard');
        $this->load->view('template/footer');
	}
}