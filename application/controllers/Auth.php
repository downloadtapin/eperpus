<?php

class Auth extends CI_Controller
{

	public function __construct() {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function index() {
        if ($this->session->userdata('validated')) {
            if ($this->session->userdata('role') == 1) {
                redirect('Home');
            } else {
                redirect('HomeAnggota');
            }
        } else {
            $this->load->view('auth/login');
        }
    }

    public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->AuthModel->cek_login($username, $password);
        if (!$result) {
            $data['error'] = 'Username or Password is invalid';
            $this->load->view('auth/login', $data);
        } else {
            if ($this->session->userdata('role') == 1) {
                redirect('Home');
            } else {
                redirect('HomeAnggota');
            }
        }
    }
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Auth'));
	}
}
