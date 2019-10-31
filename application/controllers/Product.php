<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
            $this->load->model('product_model');
            $product['list'] = $this->product_model->getProduct();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('product/index', $product);

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
            $this->load->model('category_model');
            $category['kategori'] = $this->category_model->getList();
            $this->load->view('product/create', $category);

            if ($this->input->post('save')) {
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
