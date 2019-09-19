<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position_model extends CI_Model {
    public function getList(){
        $data = $this->db->query("SELECT * FROM position");
        return $data->result_array();
    }

    public function saverecords($name,$departmentid){
        $query="insert into position (name,department_id) values ('$name',$departmentid)";
	    $this->db->query($query);
    }
}