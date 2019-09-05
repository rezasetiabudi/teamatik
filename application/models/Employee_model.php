<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
    public function getEmployee(){
        $data = $this->db->query("SELECT * FROM employee");
        return $data->result_array();
    }

    public function saverecords($name,$email,$phone,$position,$status){
        $query="insert into employee(name,email,phone,position_id,status) values('$name','$email','$phone','$position','$status')";
	    $this->db->query($query);
    }
}