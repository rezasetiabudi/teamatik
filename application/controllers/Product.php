<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Product_Model');
    }

    function index(){
        $data['product'] = $this->Product_Model->tampilan_data()->result();
        $this->load->view('product/product_index', $data);
    }

    function create(){
        $this->load->view('product/product_create');
        if($this->input->post('save')){
            $product_code = $this->input->post('product_code');
            $name = $this->input->post('name');
            $category_id = $this->input->post('category_id');
            $purchase_year = $this->input->post('purchase_year');
            $price = $this->input->post('price');
            $status = $this->input->post('status');
        }

        $this->load->model('Product_Model');
        $this->Product_Model->saverecords($product_code, $name, $category_id, $purchase_year, $price, $status);	
        echo "Records Saved Successfully";
    }
}
?>