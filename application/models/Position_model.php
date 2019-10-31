<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position_model extends CI_Model {

    public $table = 'position';
    public $id = 'id';

    public function getList(){
        $data = $this->db->query("SELECT p.id, p.name , d.name as department_id FROM position p LEFT JOIN department d ON p.department_id = d.id");
        return $data->result_array();
    }

    public function saverecords($name,$departmentid){
        $query="insert into position (name,department_id) values ('$name',$departmentid)";
	    $this->db->query($query);
    }

    public function getById($id){ 
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id,$name,$department_id){
        $query = "UPDATE ".$this->table." SET name = '".$name."' , department_id = '".$department_id."' where ".$this->id." = ".$id;
        $this->db->query($query);
    }
}