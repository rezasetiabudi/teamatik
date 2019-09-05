<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
    public function getEmployee(){
        $data = $this->db->query("SELECT * FROM employee");
        return $data->result_array();
    }

    public function saverecords($name,$email,$phone,$position){
        $query="insert into employee(name,email,phone,position_id) values('$name','$email','$phone','$position')";
	    $this->db->query($query);
    }
}