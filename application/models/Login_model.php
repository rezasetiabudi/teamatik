<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login($username,$password)
    {
        $user = $this->db->get_where('admin_system', ['admin_name' => $username])->row_array();
        $password = $this->db->get_where('admin_system', ['admin_pass' => $password])->row_array();
        if ($user && $password) {
            return 1;
        } else {
            return 0;
        }
    }
}