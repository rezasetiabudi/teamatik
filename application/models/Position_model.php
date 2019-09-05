<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position_model extends CI_Model {
    public function getList(){
        $data = $this->db->query("SELECT * FROM position");

        $x = $data->result_array();
        return $data->result_array();
    }
}