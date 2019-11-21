<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public $table = 'employee';
    public $id = 'id_employees';

    public function getEmployee(){
        $data = $this->db->query("SELECT id_employees, employees_name, employees_department, employees_address, employess_contact FROM employee");
        return $data->result_array();
    }

    public function saverecords($employees_name, $employees_department, $employees_address, $employess_contact){
        $query="insert into employee(employees_name, employees_department, employees_address, employess_contact) values('$employees_name','$employees_department','$employees_address','$employess_contact')";
	    $this->db->query($query);
    }

    public function getById($id){ 
        $this->db->where($this->id_employees, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($employees_name, $employees_department, $employees_address, $employess_contact){
        $query = "UPDATE ".$this->table." SET name = '".$employees_name."', employees_department = '".$employees_department."', employees_address = '".$employees_address."', employess_contact = ".$employess_contact." where ".$this->id." = ".$id_employees;
        $this->db->query($query);
    }
    
    public function deleterecords($id){
        $this->db->where($this->id_employees, $id);
        $this->db->delete($this->table);
    }
}