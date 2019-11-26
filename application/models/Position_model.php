<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Position_model extends CI_Model
{

    public $table = 'position';
    public $id = 'id_position';

    public function getList()
    {
        $data = $this->db->query("SELECT p.id_position, p.position_name , d.department_name as department_id FROM position p LEFT JOIN department d ON p.id_department = d.id_department");
        return $data->result_array();
    }

    public function saverecords($name, $departmentid)
    {
        var_dump($departmentid);
        foreach ($departmentid as $depts) {
            $query = "INSERT INTO position (position_name,id_department) values ('$name',$depts)";
            $this->db->query($query);
        }
    }

    public function getById($id)
    {
        // $this->db->where($this->id, $id);
        // return $this->db->get($this->table)->row();
        $data = $this->db->query("SELECT position.id_position, position.position_name, position.id_department, department.department_name FROM position LEFT JOIN department ON position.id_department = department.id_department WHERE id_position = '$id'");
        return $data->row();
    }
    public function updaterecords($id, $name, $department_id)
    {
        $query = "UPDATE " . $this->table . " SET position_name = '" . $name . "' , id_department = '" . $department_id . "' where id_position = " . $id;
        $this->db->query($query);
    }

    public function deleterecords($id)
    {
        // $this->db->where($this->id, $id);
        // $this->db->delete($this->table);
        $this->db->query("DELETE FROM position WHERE id_position = '$id'");
        if ($this->getList() == NULL) {
            $this->db->query("ALTER TABLE position AUTO_INCREMENT = 0");
        }
    }
}