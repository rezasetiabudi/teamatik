<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('login_model');
    }
    function index()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('loan_model');
            $data['list'] = $this->loan_model->getList();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('loan/index', $data);

            $this->load->view('template/footer');


            // echo "<pre>";
            // print_r($output);
            // echo "</pre>";
            // die();
        }
    }
    public function create()
    { }

    public function update()
    { }
}
