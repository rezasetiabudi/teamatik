<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {
    public function getList(){
        $data = $this->db->query("SELECT * FROM department");
        return $data->result_array();
    }

    public function saverecords($name){
        $query="insert into department(name) values('$name')";
        $this->db->query($query);
    }
}