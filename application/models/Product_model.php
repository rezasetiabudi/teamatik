<?php
class Product_model extends CI_Model
{

    public $table = 'product';
    public $id = 'id_product';

    public function getProduct()
    {
        $data = $this->db->query("SELECT product.id_product, product.product_name, category.category_name, product.date_encode, product.date_expired, product.product_qty, product.price,product.residu, supplier.supplier_name,product.id_category FROM product LEFT JOIN product_category category ON product.id_category = category.id_category LEFT JOIN supplier ON product.id_supplier = supplier.id_supplier ORDER BY product.id_product");
        return $data->result_array();
    }

    public function saverecords($name, $category_id, $purchase_date, $expired_year, $quantity, $Price, $residu, $supplier)
    {
        $query = "insert into product(product_name, id_category, date_encode, date_expired, product_qty, price,residu, id_supplier) values('$name','$category_id','$purchase_date','$expired_year','$quantity','$Price','$residu','$supplier')";

        $this->db->query($query);
    }

    public function getById($id)
    {
        // $this->db->where($this->id_product, $id_product);
        // return $this->db->get($this->table)->row();
        return $this->db->query("SELECT * FROM product WHERE id_product = '$id'")->row();
    }

    public function updaterecords($id, $name, $category_id, $purchase_date, $expired_year, $quantity, $Price, $residu, $supplier)
    {
        $query = "UPDATE " . $this->table . " SET product_name = '" . $name . "' , id_category = '" . $category_id . "', date_encode = '" . $purchase_date . "',date_expired = '" . $expired_year . "',product_qty  = '" . $quantity . "', price = '" . $Price . "', residu = '" . $residu . "' , id_supplier = '" . $supplier . "' where id_product = " . $id;
        $this->db->query($query);
    }

    public function deleterecords($id_product)
    {
        $this->db->query("SET FOREIGN_KEY_CHECKS=0");
        $this->db->where($this->id, $id_product);
        $this->db->delete($this->table);
        $this->db->query("SET FOREIGN_KEY_CHECKS=1");
    }
    public function getLastProduct()
    {
        $data = $this->db->query("SELECT * FROM product ORDER BY id_product DESC LIMIT 1");
        return $data->result_array();
    }
}
