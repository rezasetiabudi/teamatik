<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function index() {
        $this->load->view('product/index');
    }

    public function create() {
        $this->load->model('Category_model');
        $category['kategori'] = $this->Category_model->getList();
        $this->load->view('product/create',$category);

        if($this->input->post('save')) {
            $name = $this->input->post('name');
            $category_id = $this->input->post('category_id');
            $prefix_code = $this->Product_model->generatePrefix($category_id);
            $product_code = $this->Product_model->generateCode($prefix_code);
            $purchase_year = $this->input->post('purchase_year');
            $price = $this->input->post('price');

            $this->Product_Model->saverecords($prefix_code, $product_code, $name, $category_id, $purchase_year, $price);	
            echo "Records Saved Successfully";
        }
    }
}
?>