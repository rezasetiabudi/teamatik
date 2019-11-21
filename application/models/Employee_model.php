<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model
{

    public $table = 'employee';
    public $id = 'id';

    public function getEmployee()
    {
        $data = $this->db->query("SELECT e.id_employees, e.employees_name, e.employees_address, e.employees_contact, p.position_name as position_id, status FROM employee e LEFT JOIN position p ON e.id_position = p.id_position");
        return $data->result_array();
    }

    public function saverecords($name, $address, $phone, $position)
    {
        $query = "INSERT INTO employee(employees_name,employees_address,employees_contact,id_position) values('$name','$address','$phone','$position')";
        $this->db->query($query);
    }

    public function getById($id)
    {
        $data = $this->db->query("SELECT * FROM employee WHERE id_employees=  '$id'");
        // $this->db->where($this->id, $id);
        // return $this->db->get($this->table)->row();
        return $data->row();
    }

    public function updaterecords($id, $name, $email, $phone, $position, $status)
    {
        $query = "UPDATE " . $this->table . " SET employees_name = '" . $name . "', employees_address = '" . $email . "', employees_contact = '" . $phone . "', id_position = '" . $position . "', status = " . $status . " where  id_employees = " . $id;
        $this->db->query($query);
    }

    public function deleterecords($id)
    {
        $this->db->query("DELETE FROM employee WHERE id_employees = '$id'");
        if ($this->getEmployee() == NULL) {
            $this->db->query("ALTER TABLE employee AUTO_INCREMENT = 0");
        }
        // $this->db->where($this->id, $id);
        // $this->db->delete($this->table);
    }
}
