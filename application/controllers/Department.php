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
                  $department['list'] = $this->department_model->getList();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('department/index',$department);

                  $this->load->view('template/footer');
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
      public function update($id)
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('department_model');
                  $row = $this->department_model->getById($id);
                  if ($row) {
                        $data = array(
                              'id' => set_value('id', $row->id_department),
                              'name' => set_value('name', $row->department_name),
                        );
                        $this->load->view('department/update', $data);
                        if ($this->input->post('save')) {
                              //get form's data and store in local varable
                              $name = $this->input->post('name');
                              //call saverecords method of Hello_Model and pass variables as parameter
                              $this->department_model->updaterecords($id, $name);
                              redirect(base_url('department/index'));
                        }
                  }
                  else {
                        $this->session->set_flashdata('message', 'Record Not Found');
                        redirect(base_url('department/index'));
                  }
            }
      }

      public function delete($id){
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('department_model');

                  $this->department_model->deleterecords($id);
                  redirect(base_url('Department/index'));
            }
      }
}
