<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {

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
            }else {
                  $this->load->model('position_model');
                  $position['list'] = $this->position_model->getPosition();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('employee/index',$position);

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
                  $this->load->model('department_model');
                  $department['department'] = $this->department_model->getList();
                  $this->load->view('position/create',$department);
                  if($this->input->post('save'))
                  {
                        //get form's data and store in local varable
                        $name = $this->input->post('name');
                        $department_id = $this->input->post('department');

                        $this->load->model('position_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->position_model->saverecords($name,$department_id);	
                        echo "Records Saved Successfully";
                  }
            }
      }
      public function update()
      {

            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('department_model');
                  $department['department'] = $this->department_model->getList();
                  $this->load->view('position/create',$department);
                  if($this->input->post('save'))
                  {
                        //get form's data and store in local varable
                        $name = $this->input->post('name');
                        $department_id = $this->input->post('department');

                        $this->load->model('position_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->position_model->saverecords($name,$department_id);	
                        echo "Records Saved Successfully";
                  }
            }
      }
}
