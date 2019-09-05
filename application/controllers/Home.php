<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home_page');
	}

	public function homepage()
	{
		if ($this->form_validation->run() == true) {
			$this->load->view('home_page');
		}
	}

	private function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		$password = $this->db->get_where('user', ['password' => $password])->row_array();

		if ($user && $password) {
			//berhasil login
			$this->homepage();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong username or password!</div>');
			redirect('');
		}
	}
}
