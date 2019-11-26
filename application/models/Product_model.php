<?php
class Product_model extends CI_Model
{
    
    public $table = 'product';
    public $id = 'id';

    public function getProduct()
    {
        $data = $this->db->query("SELECT * FROM product");
        return $data->result_array();
    }

    public function saverecords($name, $category_id, $purchase, $expired, $qty, $supplier)
    {
        $query = "insert into product(product_name, id_category, date_encode, date_expired, product_qty, id_supplier) values('$name', '$category_id', '$purchase', '$expired', '$qty', '$supplier')";

        $this->db->query($query);
    }

    public function getById($id){ 
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id,$name,$category_id,$prefix_code,$product_code,$purchase_date,$price,$status){
        $query = "UPDATE ".$this->table." SET name = '".$name."' , category_id = '".$category_id."', prefix_code = '".$prefix_code."' , product_code = '".$product_code."' , purchase_year = '".$purchase_date."' , price = '".$price."', status = '".$status."' where ".$this->id." = ".$id;
        $this->db->query($query);
    }
    
    public function deleterecords($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
