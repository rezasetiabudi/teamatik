<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('home_page');
	}

	// public function tes()
	// {
	// 	$this->load->view('welcome_message');
	// }
}
