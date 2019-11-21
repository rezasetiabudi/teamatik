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

    public function saverecords($product_name, $product_category, $product_price, $date_encode, $date_recorded, $date_expired, $product_qty, $id_supplier)
    {
        $query = "insert into product(product_name, product_category, product_price, date_encode, date_recorded, date_expired, product_qty, id_supplier) values('$product_name', '$product_category', '$product_price', '$date_encode', '$date_recorded', '$date_expired', '$product_qty', '$id_supplier')";

        $this->db->query($query);
    }

    // public function generatePrefix($category_id)
    // {
    //     $query = "select code from category where id = ".$category_id;
    //     $this->db->query($query);
    // }

    // public function generateCode($prefix_code)
    // {
    //     $query = "SELECT MAX(product_code) AS 'max' FROM product WHERE prefix_code ='" . $prefix_code . "'";
    //     $data = $this->db->query($query);
    //     $data = $data->result_array();
    //     $newnumber = $data[0]['max'] + 1;
    //     return $newnumber;
    // }

    public function getById($id_product){ 
        $this->db->where($this->id_product, $id_product);
        return $this->db->get($this->table)->row();
    }

    public function updaterecords($id_product, $product_name, $product_category, $product_price, $date_encode, $date_recorded, $date_expired, $product_qty, $id_supplier){
        $query = "UPDATE ".$this->table." SET product_name = '".$product_name."' , product_category = '".$product_category."', product_price = '".$product_price."' , date_encode = '".$date_encode."' , date_recorded = '".$date_recorded."' , date_expired = '".$date_expired."', product_qty = '".$product_qty."', id_supplier = '".$id_supplier."' where ".$this->id_product." = ".$id_product;
        $this->db->query($query);
    }
    
    public function deleterecords($id_product){
        $this->db->where($this->id_product, $id_product);
        $this->db->delete($this->table);
    }
}
