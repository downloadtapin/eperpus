<?php

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    function index()
    {
        $this->load->view('auth/login');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->AuthModel->cek_login($username, $password);
        if (!$result) {
            $data['error'] = 'Username or Password is invalid';
            $this->load->view('auth/login', $data);
        } else {
            if ($this->session->userdata('role_id') == '1') {
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
