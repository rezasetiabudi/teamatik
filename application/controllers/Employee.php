<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function index()
	{
            $this->load->helper('url'); 
            $this->load->library('Grocery_CRUD');   
            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {
                  $crud = new Grocery_CRUD();  
                  $crud->set_theme('datatables');    
                  $crud->set_table('employee');
                  $output = $crud->render();
                  $this->load->view('employee/index',$output);
                  // $this->_example_output(output);
                  // $this->load->view('template/sidenavbar.php',$output);
            }
      }
      
      // public function _example_output($output){
      //       $this->load->view('template/sidenavbar.php',$output);
      // }

	public function create()
	{

            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {
                  $this->load->model('position_model');
                  $position['posisi'] = $this->position_model->getList();
                  $this->load->view('employee/create',$position);
                  if($this->input->post('save'))
                  {
                        //get form's data and store in local varable
                        $name=$this->input->post('name');
                        $email=$this->input->post('email');
                        $phone=$this->input->post('phone');
                        $position=$this->input->post('position');
                        $status=$this->input->post('status');

                        $this->load->model('employee_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->employee_model->saverecords($name,$email,$phone,$position,$status);	
                        echo "Records Saved Successfully";
                  }
            }
	}
}
