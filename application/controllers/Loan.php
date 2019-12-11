<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('login_model');
    }
    function index()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('loan_model');
            $data['list'] = $this->loan_model->getList();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('loan/index', $data);
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
            $this->load->model('employee_model');
            $this->load->model('product_model');
            $data['employee'] = $this->employee_model->getEmployee();
            $data['product'] = $this->product_model->getProduct();
            $this->load->view('loan/create', $data);
            if ($this->input->post('save')) {
                $product = $this->input->post('product');
                $employee = $this->input->post('employee');
                $borrow = $this->input->post('borrow_date');
                $exp = $this->input->post('expired_date');
                // echo $product . $employee . $borrow . $exp . $return;
                $quantity = $this->product_model->getById($product);
                $newquantity =  $quantity->product_qty - 1;
                // echo $newquantity;
                if ($newquantity < 0) {
                    $this->session->set_flashdata('stok', "stok barang tidak ada");
                    redirect(base_url('Loan/create'));
                } else {
                    $this->load->model('loan_model');
                    $this->loan_model->saverecords($product, $employee, $borrow, $exp);
                    $this->product_model->updateQuantity($product, $newquantity);
                    redirect(base_url('Loan/index'));
                }
            }
        }
    }

    public function update($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('loan_model');
            $this->load->model('product_model');
            $this->load->model('supplier_model');
            $this->load->model('category_model');
            $this->load->model('loan_model');
            $this->load->model('employee_model');
            // $row = $this->product_model->getById($id);
            $row = $this->loan_model->getById($id);
            // echo var_dump($row);
            if ($row) {
                $data = array(
                    'id' => set_value($row->id_transaction),
                    'productname' => set_value('productname', $row->id_product),
                    'product' => $this->product_model->getProduct(),
                    'employeename' => set_value('employeename', $row->id_employee),
                    'employee' => $this->employee_model->getEmployee()
                );
                $this->load->view('Loan/update', $data);
                if ($this->input->post('save')) {
                    //get form's data and store in local varable
                    $namaproduk = $this->input->post('product');
                    $namaemployee = $this->input->post('employee');
                    $pinjamtanggal = $this->input->post('borrowdate');
                    $exppinjamtanggal = $this->input->post('expreturndate');
                    $tanggalkembali = $this->input->post('returndate');
                    $this->loan_model->updaterecords($id, $namaproduk, $namaemployee, $pinjamtanggal, $exppinjamtanggal, $tanggalkembali);
                    redirect(base_url('Loan/index'));
                }
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(base_url('Loan/index'));
            }
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('login_page');
        } else {
            $this->load->model('loan_model');

            $this->loan_model->deleterecords($id);
            redirect(base_url('Loan/index'));
        }
    }
    public function UpdateReturn()
    {
        $this->load->model('product_model');
        $this->load->model('loan_model');
        $idproduct = $this->uri->segment(4);
        // echo $idproduct;
        $quantity = $this->product_model->getById($idproduct);
        $newquantity =  $quantity->product_qty + 1;
        // echo $id;
        $this->product_model->updateQuantity($idproduct, $newquantity);
        $idtransaction = $this->uri->segment(3);
        $returndate = date("Y-m-d");
        // echo $returndate;
        $this->loan_model->updateReturnDate($idtransaction, $returndate);
        redirect(base_url('Loan/index'));
    }
    public function CancelReturn()
    {
        $this->load->model('product_model');
        $this->load->model('loan_model');
        $idproduct = $this->uri->segment(4);
        // echo $idproduct;
        $quantity = $this->product_model->getById($idproduct);
        $newquantity =  $quantity->product_qty - 1;
        // echo $id;
        $this->product_model->updateQuantity($idproduct, $newquantity);
        $idtransaction = $this->uri->segment(3);
        $returndate = "0000-00-00";
        // echo $returndate;
        $this->loan_model->updateReturnDate($idtransaction, $returndate);
        redirect(base_url('Loan/index'));
    }
}
