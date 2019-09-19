<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('login_model');

	}
<<<<<<< HEAD

	public function index()
	{
		$this->load->view('home_page');
	}

	public function homepage()
	{
		if ($this->form_validation->run() == true) {
			$this->load->view('home_page');
=======
	function index(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
>>>>>>> 63c1bc1bffb7f19aaf756a3a265697828de41820
		}
		else $this->load->view('home_page');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->login_model->login($username,$password);
		echo '<script>console.log("true")</script>';
		if($cek > 0){
			echo "Berhasil";
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url());

		}else{
			echo "Username dan password salah !";
			die();
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
