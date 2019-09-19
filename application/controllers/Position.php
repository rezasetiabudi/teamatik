<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {
	public function index()
	{
            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {
                  $this->load->model('position_model');
                  $position['list'] = $this->position_model->getList();
                  $this->load->view('position/index',$position);
            }
	}

	public function create()
	{

            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {
                  $this->load->model('department_model');
                  $department['department'] = $this->department_model->getDepartment();
                  $this->load->view('position/create',$department);
                  if($this->input->post('save'))
                  {
                        //get form's data and store in local varable
                        $name=$this->input->post('name');
                        $department_id=$this->input->post('department');

                        $this->load->model('position_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->position_model->saverecords($name,$department_id);	
                        echo "Records Saved Successfully";
                  }
            }
	}
}
