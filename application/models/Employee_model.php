<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
    public function getEmployee(){
        $data = $this->db->query("SELECT * FROM employee");
        return $data->result_array();
    }
}