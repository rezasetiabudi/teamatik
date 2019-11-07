<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    function __construct() {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
    }

    public function index() {
        if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
        }
        else {
            $this->load->model('Product_model');
            $product['list'] = $this->Product_model->getProduct();
            $this->load->view('product/index',$product);
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('product/index',$product);

            $this->load->view('template/footer');
        }   
    }

    public function create() {
        if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
        }
        else{
            $this->load->model('category_model');
            $category['kategori'] = $this->category_model->getList();
            $this->load->view('product/create',$category);

            if($this->input->post('save')) {
                $this->load->model('product_model');
                $name = $this->input->post('name');
                $category_id = $this->input->post('category_id');
                $prefix_code = $this->product_model->generatePrefix($category_id);
                $product_code = $this->product_model->generateCode($prefix_code);
                $purchase_year = $this->input->post('purchase');
                $price = $this->input->post('price');
                $qty = $this->input->post('qty');
                $total_price = $this->product_model->getTotalprice($price, $qty);

                $this->product_model->saverecords($name, $category_id, $prefix_code, $product_code, $purchase_year, $price, $qty, $total_price);	
                echo "Records Saved Successfully";
            }
        }
    }

    public function update($id){
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('category_model');
            $this->load->model('product_model');
            $row = $this->product_model->getById($id);
            $category['category_id'] = $this->category_model->getList();
            
            if ($row) {
                $data = array(
                    'name' => set_value('name', $row->name),
                    'category_id' => set_value('category_id', $row->category_id),
                    'purchase_year' => set_value('purchase_year', $row->purchase_year),
                    'price' => set_value('price', $row->price),
                    'qty' => set_value('qty', $row->qty),
                    'total_price' => set_value('total_price', $row->total_price),
                );
                $this->load->view('product/update', $data, $category);
                if ($this->input->post('save')) {
                    //get form's data and store in local varable
                    $name = $this->input->post('name');
                    $category_id = $this->input->post('category_id');
                    $purchase_year = $this->input->post('purchase_year');
                    $price = $this->input->post('price');
                    $qty = $this->input->post('qty');
                    $total_price = $this->input->post('total_price');

                    //call saverecords method of Hello_Model and pass variables as parameter
                    $this->product_model->updaterecords($name, $category_id, $purchase_year, $price, $qty, $total_price);
                    redirect(base_url('Product/index'));
                }
            }
            else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(base_url('Product/index'));
            }
        }
    }
}
?>