<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position_model extends CI_Model {
    public function getList(){
        $data = $this->db->query("SELECT p.name , d.name as department_id FROM position p LEFT JOIN department d ON p.department_id = d.id");
        return $data->result_array();
    }

    public function saverecords($name,$departmentid){
        $query="insert into position (name,department_id) values ('$name',$departmentid)";
	    $this->db->query($query);
    }
}