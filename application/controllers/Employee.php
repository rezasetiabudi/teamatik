<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function index()
	{
            $this->load->view('employee/index');
	}

	public function create()
	{
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

                  $this->load->model('employee_model');
                  //call saverecords method of Hello_Model and pass variables as parameter
                  $this->employee_model->saverecords($name,$email,$phone,$position);	
                  echo "Records Saved Successfully";
            }
	}
}
