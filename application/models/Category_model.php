<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public $table = 'category';
    public $id = 'id';

    public function getList(){
        $data = $this->db->query("SELECT * FROM category");

        $x = $data->result_array();
        return $data->result_array();
    }

    public function saverecords($name,$code){
        $query="insert into category(name,code) values ('$name','$code')";
        $this->db->query($query);
    }

    public function getById($id){ 
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id,$name){
        $query = "UPDATE ".$this->table." SET name = '".$name."' where ".$this->id." = ".$id;
        $this->db->query($query);
    }

    public function deleterecords($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}