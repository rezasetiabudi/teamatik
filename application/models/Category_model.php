<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
    public function getList(){
        $data = $this->db->query("SELECT * FROM category");

        $x = $data->result_array();
        return $data->result_array();
    }
}