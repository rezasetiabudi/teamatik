<?php
class Loan_model extends CI_Model
{
    public function getList()
    {
        $data = $this->db->query("SELECT transaction.id_transaction, transaction.id_product,transaction.id_employee,transaction.borrow_date,transaction.exp_return_date,transaction.return_date,product.product_name,employee.employees_name FROM transaction LEFT JOIN product ON product.id_product = transaction.id_product LEFT JOIN employee ON employee.id_employees = transaction.id_employee ORDER BY transaction.id_transaction");
        return $data->result_array();
    }
}
