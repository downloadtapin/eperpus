<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('validated')){
            redirect(base_url("Auth"));
        }
    }
	public function index()
	{
        $data['title'] = "Dashboard | PERPUSTAKAAN";
		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('home_view');
        //$this->load->view('dashboard/dashboard');
        $this->load->view('template/footer');
	}
}