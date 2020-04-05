<?php
class Loan_model extends CI_Model
{
    public $table = 'transaction';
    public $id = 'id_transaction';
    public function getList()
    {
        $data = $this->db->query("SELECT transaction.id_transaction, transaction.id_product,transaction.id_employee,transaction.borrow_date,transaction.exp_return_date,transaction.return_date,product.product_name,employee.employees_name FROM transaction LEFT JOIN product ON product.id_product = transaction.id_product LEFT JOIN employee ON employee.id_employees = transaction.id_employee ORDER BY transaction.id_transaction");
        return $data->result_array();
    }
    public function saverecords($product, $employee, $borrow, $exp)
    {
        $this->db->query("INSERT INTO transaction(id_product,id_employee,borrow_date,exp_return_date) VALUES ('$product','$employee','$borrow','$exp') ");
    }

    public function getById($id)
    {
        return $this->db->query("SELECT * FROM transaction WHERE id_transaction = '$id'")->row();
    }

    public function updaterecords($id, $namaproduk, $namaemployee, $pinjamtanggal, $exppinjamtanggal, $tanggalkembali)
    {
        $query = "UPDATE " . $this->table . " SET id_product = '" . $namaproduk . "' , id_employee = '" . $namaemployee . "', borrow_date = '" . $pinjamtanggal . "',exp_return_date = '" . $exppinjamtanggal . "',return_date  = '" . $tanggalkembali . "' where id_transaction = " . $id;
        $this->db->query($query);
    }


    public function deleterecords($id_transaction)
    {
        $this->db->query("SET FOREIGN_KEY_CHECKS=0");
        $this->db->where($this->id, $id_transaction);
        $this->db->delete($this->table);
        $this->db->query("SET FOREIGN_KEY_CHECKS=1");
    }
    public function updateReturnDate($id_transaction, $date)
    {
        echo $id_transaction . $date;
        $this->db->query("UPDATE transaction SET return_date = '$date' WHERE id_transaction = $id_transaction");
    }
}
