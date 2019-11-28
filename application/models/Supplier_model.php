<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{

    public $table = 'supplier';
    public $id = 'id_supplier';

    public function getList()
    {
        $data = $this->db->query("SELECT * FROM $this->table");

        $x = $data->result_array();
        return $data->result_array();
    }

    public function saverecords($supplier_name, $supplier_contact, $supplier_address)
    {
        $query = "insert into supplier(supplier_name,supplier_contact,supplier_address) values ('$supplier_name','$supplier_contact','$supplier_address')";
        $this->db->query($query);
    }

    public function getById($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id, $supplier_name, $supplier_contact, $supplier_address)
    {
        $query = "UPDATE " . $this->table . " SET supplier_name = '" . $supplier_name . "' where " . $this->id . " = " . $id;
        $this->db->query($query);
        $query = "UPDATE " . $this->table . " SET supplier_contact = '" . $supplier_contact . "' where " . $this->id . " = " . $id;
        $this->db->query($query);
        $query = "UPDATE " . $this->table . " SET supplier_address = '" . $supplier_address . "' where " . $this->id . " = " . $id;
        $this->db->query($query);
    }

    public function deleterecords($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
