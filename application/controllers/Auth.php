<?php 
 
class Auth extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('AuthModel');
 
	}
 
	function index(){
		$this->load->view('auth/login');
	}
 
	function login_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->AuthModel->cek_login("username",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Home"));
 
		}else{
            redirect(base_url('Home'));
			//echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Auth'));
	}
}