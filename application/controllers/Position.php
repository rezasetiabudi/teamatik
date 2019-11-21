<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Position extends CI_Controller
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
                  $this->load->model('position_model');
                  $position['list'] = $this->position_model->getList();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('position/index', $position);

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
                  $this->load->model('department_model');
                  $department['department'] = $this->department_model->getList();
                  $this->load->view('position/create', $department);
                  $departments = [];
                  if ($this->input->post('save')) {
                        //get form's data and store in local varable
                        $name = $this->input->post('name');
                        $department_id = $this->input->post('penampung');
                        $penampung = explode(',', $department_id);
                        $i = 0;
                        foreach ($penampung as $depts) {
                              $departments[$i] = $depts;
                              $i++;
                        }
                        $this->load->model('position_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->position_model->saverecords($name, $departments);
                        redirect(base_url('Position/index'));
                  }
            }
      }
      public function update($id)
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('position_model');
                  $row = $this->position_model->getById($id);
                  if ($row) {
                        $data = array(
                              'id' => set_value('id', $row->id_position),
                              'name' => set_value('name', $row->position_name),
                              'department_name' => set_value('department_name', $row->department_name),
                              'id_department' => set_value('id_department', $row->id_department)
                        );
                        // echo var_dump($row);
                        $this->load->view('position/update', $data);
                        if ($this->input->post('save')) {
                              //get form's data and store in local varable
                              $name = $this->input->post('name');
                              $department_id = $this->input->post('department');
                              //call saverecords method of Hello_Model and pass variables as parameter
                              $this->position_model->updaterecords($id, $name, $department_id);
                              redirect(base_url('position/index'));
                        }
                  } else {
                        $this->session->set_flashdata('message', 'Record Not Found');
                        redirect(base_url('position/index'));
                  }
            }
      }

      public function delete($id)
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('position_model');

                  $this->position_model->deleterecords($id);
                  redirect(base_url('Position/index'));
            }
      }
}
