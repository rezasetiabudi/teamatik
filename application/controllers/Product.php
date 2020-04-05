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
            $data['category'] = $this->category_model->getList();
            $this->load->model('supplier_model');
            $data['supplier'] = $this->supplier_model->getList();
            $this->load->view('product/create', $data);

            if ($this->input->post('save')) {
                $this->load->model('product_model');
                $this->load->model('invoice_model');
                $name = $this->input->post('name');
                $price = $this->input->post('price');
                $qty = $this->input->post('qty');
                $category_id = $this->input->post('category_id');
                $purchase_date = $this->input->post('purchase_date');
                $kategori = $this->category_model->getById($category_id);
                $depreciation = $kategori[0]['depreciation'];
                $expired_year = date('Y', strtotime($purchase_date)) + $depreciation;
                $Price = $this->input->post('price');
                $residu = $this->input->post('residu');
                // $status = $this->input->post('status');
                $supplier = $this->input->post('supplier');
                $quantity = $this->input->post('quantity');
                // echo $expired_year;
                // echo $category_id;
                $this->product_model->saverecords($name, $category_id, $purchase_date, $expired_year, $quantity, $Price, $residu, $supplier);
                redirect(base_url('Product/index'));
            }
        }
    }

    public function update($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('product_model');
            $this->load->model('supplier_model');
            $this->load->model('category_model');
            $row = $this->product_model->getById($id);
            // echo var_dump($row);
            if ($row) {
                $data = array(
                    'id' => set_value($row->id_product),
                    'name' => set_value('name', $row->product_name),
                    'price' => set_value('price', $row->price),
                    'supplier' => $this->supplier_model->getList(),
                    'category' => $this->category_model->getList()
                );
                $this->load->view('product/update', $data);
                if ($this->input->post('save')) {
                    //get form's data and store in local varable
                    $name = $this->input->post('name');
                    $category_id = $this->input->post('category');
                    $purchase_date = $this->input->post('purchase_date');
                    $kategori = $this->category_model->getById($category_id);
                    $depreciation = $kategori[0]['depreciation'];
                    $expired_year = date('Y', strtotime($purchase_date)) + $depreciation;
                    $Price = $this->input->post('price');
                    // $status = $this->input->post('status');
                    $residu = $this->input->post('residu');
                    $supplier = $this->input->post('supplier');
                    $quantity = $this->input->post('quantity');
                    // $status = $this->input->post('status');  
                    $this->product_model->updaterecords($id, $name, $category_id, $purchase_date, $expired_year, $quantity, $Price, $residu, $supplier);
                    redirect(base_url('product/index'));
                }
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(base_url('product/index'));
            }
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('product_model');

            $this->product_model->deleterecords($id);
            redirect(base_url('Product/index'));
        }
    }
}
