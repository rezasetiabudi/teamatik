<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
      function __construct()
      {
            parent::__construct();

            /* Standard Libraries of codeigniter are required */
            $this->load->database();
            $this->load->helper('url');
            /* ------------------ */

            $this->load->library('grocery_CRUD');
      }
	public function index()
	{
            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {

                  $this->load->model('department_model');
                  $department['list'] = $this->department_model->getDepartment();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('department/index',$department);

                  $this->load->view('template/footer');

                  // echo "<pre>";
                  // print_r($output);
                  // echo "</pre>";
                  // die();
            }
	}

	public function create()
	{

            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {
                  $this->load->view('department/create');
                  if($this->input->post('save'))
                  {
                        //get form's data and store in local varable
                        $name=$this->input->post('name');

                        $this->load->model('department_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->department_model->saverecords($name);	
                        echo "Records Saved Successfully";
                  }
            }
	}
}
