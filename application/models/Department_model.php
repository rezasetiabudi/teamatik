<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {

    
    public $table = 'department';
    public $id = 'id_department';

    public function getList(){
        $data = $this->db->query("SELECT * FROM department");
        return $data->result_array();
    }

    public function saverecords($name){
        $query="insert into department(department_name) values ('$name')";
        $this->db->query($query);
    }

    public function getById($id_department){ 
        $this->db->where($this->id_department, $id_department);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id_department, $department_name){
        $query = "UPDATE ".$this->table." SET name = '".$department_name."' where ".$this->id_department." = ".$id_department;
        $this->db->query($query);
    }

    public function deleterecords($id_department){
        $this->db->where($this->id_department, $id_department);
        $this->db->delete($this->table);
    }
}