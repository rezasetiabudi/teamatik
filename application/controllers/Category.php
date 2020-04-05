<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
      function __construct()
      {
            parent::__construct();

            /* Standard Libraries of codeigniter are required */
            $this->load->database();
            $this->load->helper('url');
            /* ------------------ */
      }
      public function index()
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {

                  $this->load->model('category_model');
                  $category['list'] = $this->category_model->getList();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('category/index', $category);

                  $this->load->view('template/footer');
            }
      }

      public function create()
      {

            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->view('category/create');
                  if ($this->input->post('save')) {
                        //get form's data and store in local varable
                        $name = $this->input->post('name');
                        $depreciation = $this->input->post('depreciation');

                        $this->load->model('category_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->category_model->saverecords($name, $depreciation);
                        redirect(base_url('Category/index'));
                  }
            }
      }
      public function update($id)
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('category_model');
                  $row = $this->category_model->getById($id);
                  if ($row) {
                        $data = array(
                              'id' => set_value('id', $row[0]["id_category"]),
                              'name' => set_value('name', $row[0]["category_name"]),
                              'depreciation' => set_value('depreciation', $row[0]["depreciation"]),
                        );
                        // echo var_dump($row[0]);
                        $this->load->view('category/update', $data);
                        if ($this->input->post('save')) {
                              //get form's data and store in local varable
                              $name = $this->input->post('name');
                              $depreciation = $this->input->post('depreciation');
                              //call saverecords method of Hello_Model and pass variables as parameter
                              $this->category_model->updaterecords($id, $name, $depreciation);
                              redirect(base_url('Category/index'));
                        }
                  } else {
                        $this->session->set_flashdata('message', 'Record Not Found');
                        redirect(base_url('Category/index'));
                  }
            }
      }

      public function delete($id)
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('category_model');

                  $this->category_model->deleterecords($id);
                  redirect(base_url('Category/index'));
            }
      }
}
