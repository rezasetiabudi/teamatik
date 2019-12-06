<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public $table = 'product_category';
    public $id = 'id_category';

    public function getList()
    {
        $data = $this->db->query("SELECT * FROM $this->table");
        return $data->result_array();
    }

    public function saverecords($category_name, $depreciation)
    {
        $query = "insert into $this->table(category_name,depreciation) values ('$category_name','$depreciation')";
        $this->db->query($query);
    }

    public function getById($id)
    {
        $data = $this->db->query("SELECT * FROM $this->table WHERE id_category = $id");
        return $data->result_array();
    }

    public function updaterecords($id, $category_name, $depreciation)
    {
        $query = "UPDATE " . $this->table . " SET category_name = '" . $category_name . "' where " . $this->id . " = " . $id;
        $this->db->query($query);
        $query = "UPDATE " . $this->table . " SET depreciation = '" . $depreciation . "' where " . $this->id . " = " . $id;
        $this->db->query($query);
    }

    public function deleterecords($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    public function getExpired($id)
    {
        $data = $this->db->query("SELECT * FROM product_category WHERE id_category = '$id'");
        return $data->result_array();
    }
}
