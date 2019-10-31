<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public $table = 'employee';
    public $id = 'id';

    public function getEmployee(){
        $data = $this->db->query("SELECT e.id, e.name, e.email, e.phone, e.status, p.name as position_id FROM employee e LEFT JOIN position p ON e.position_id = p.id");
        return $data->result_array();
    }

    public function saverecords($name,$email,$phone,$position,$status){
        $query="insert into employee(name,email,phone,position_id,status) values('$name','$email','$phone','$position','$status')";
	    $this->db->query($query);
    }

    public function getById($id){ 
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id,$name,$email,$phone,$position,$status){
        $query = "UPDATE ".$this->table." SET name = '".$name."', email = '".$email."', phone = '".$phone."', status = ".$status." where ".$this->id." = ".$id;
        $this->db->query($query);
    }
}