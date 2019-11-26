<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
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
            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {

                  $this->load->model('Supplier_model');
                  $supplier['list'] = $this->Supplier_model->getList();
                  $this->load->view('template/header');
                  $this->load->view('template/sidebar');
                  $this->load->view('supplier/index',$supplier);

                  $this->load->view('template/footer');
            }
	}

	public function create()
	{

            if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
            }
            else {
                  $this->load->view('supplier/create');
                  if($this->input->post('save'))
                  {
                        //get form's data and store in local varable
                        $name=$this->input->post('supplier_name');
                        $contact=$this->input->post('supplier_contact');
                        $address=$this->input->post('supplier_address');

                        $this->load->model('supplier_model');
                        //call saverecords method of Hello_Model and pass variables as parameter
                        $this->supplier_model->saverecords($name,$contact,$address);	
                        redirect(base_url('Supplier/index'));
                  }
            }
      }
      public function update($id)
      {
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('supplier_model');
                  $row = $this->supplier_model->getById($id);
                  if ($row) {
                        $data = array(
                              'id' => set_value('id', $row->id),
                              'name' => set_value('name', $row->name),
                              'contact' => set_value('contact', $row->contact),
                              'address' => set_value('address', $row->address),
                        );
                        $this->load->view('supllier/update', $data);
                        if ($this->input->post('save')) {
                              //get form's data and store in local varable
                              $name = $this->input->post('name');
                              $contact = $this->input->post('contact');
                              $address = $this->input->post('address');
                              //call saverecords method of Hello_Model and pass variables as parameter
                              $this->supplier_model->updaterecords($id, $name, $contact, $address);
                              redirect(base_url('Supplier/index'));
                        }
                  }
                  else {
                        $this->session->set_flashdata('message', 'Record Not Found');
                        redirect(base_url('Supplier/index'));
                  }
            }
      }

      public function delete($id){
            if ($this->session->userdata('status') != "login") {
                  $this->load->view('login_page');
            } else {
                  $this->load->model('supplier_model');

                  $this->supplier_model->deleterecords($id);
                  redirect(base_url('Supplier/index'));
            }
      }
}
