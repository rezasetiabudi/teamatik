<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function index() {
        if($this->session->userdata('status') != "login"){
			$this->load->view('login_page');
        }
        else {
            //grocery_crud
            $this->load->library('Grocery_CRUD');
            $this->load->helper('url');
            $crud = new Grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('product');
            $crud->columns('name', 'category_id', 'purchase_year', 'price', 'total_price');
            $crud->display_as('category_id', 'Category');
            $crud->set_relation('category_id', 'category', 'name');
            $output = $crud->render();
            $this->load->view('product/index',$output);

            // $this->load->model('Product_model');
            // $product['product'] = $this->Product_model->getProduct();
            // $this->load->view('product/index',$product);
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
}
?>