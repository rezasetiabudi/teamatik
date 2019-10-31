<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
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
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('employee_model');
                  $employee['list'] = $this->employee_model->getEmployee();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('employee/index',$employee);

                  $this->load->view('template/footer');


                  // echo "<pre>";
                  // print_r($output);
                  // echo "</pre>";
                  // die();
            }
      }

      public function create()
      {

            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('position_model');
                  $position['posisi'] = $this->position_model->getList();
                  $this->load->view('employee/create', $position);
                  if ($this->input->post('save')) {
                        //get form's data and store in local varable
                        $name = $this->input->post('name');
                        $email = $this->input->post('email');
                        $phone = $this->input->post('phone');
                        $position = $this->input->post('position');
                        $status = $this->input->post('status');

                        $this->load->model('employee_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->employee_model->saverecords($name, $email, $phone, $position, $status);
                        redirect(base_url('Employee/index'));
                  }
            }
      }
      public function update()
      {

            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('position_model');
                  $position['posisi'] = $this->position_model->getList();
                  $this->load->view('employee/create', $position);
                  if ($this->input->post('save')) {
                        //get form's data and store in local varable
                        $name = $this->input->post('name');
                        $email = $this->input->post('email');
                        $phone = $this->input->post('phone');
                        $position = $this->input->post('position');
                        $status = $this->input->post('status');

                        $this->load->model('employee_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->employee_model->saverecords($name, $email, $phone, $position, $status);
                  }
                  else{
                  }
            }
      }
}
