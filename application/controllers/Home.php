<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	function index()
	{
		if ($this->session->userdata('status') != "login") {
			$this->load->view('login_page');
		} else {
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('dashboard/index');

			$this->load->view('template/footer');
		}
		// echo "test";
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->login_model->login($username, $password);
		if ($cek > 0) {
			echo "Berhasil";
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('Home/index'));
		} else {
			$this->load->view('login_page');
			echo "Username atau password salah !";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
