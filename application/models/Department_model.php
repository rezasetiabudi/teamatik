<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {

    
    public $table = 'department';
    public $id = 'id';

    public function getList(){
        $data = $this->db->query("SELECT * FROM department");
        return $data->result_array();
    }

    public function saverecords($name){
        $query="insert into department(department_name) values ('$name')";
        $this->db->query($query);
    }

    public function getById($id){ 
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id,$name){
        $query = "UPDATE ".$this->table." SET name = '".$name."' where ".$this->id." = ".$id;
        $this->db->query($query);
    }

    public function deleterecords($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}