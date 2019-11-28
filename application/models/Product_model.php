<?php
class Product_model extends CI_Model
{

    public $table = 'product';
    public $id = 'id_product';

    public function getProduct()
    {
        $data = $this->db->query("SELECT product.id_product, product.product_name, category.category_name, product.date_encode, product.date_expired, product.product_qty, product.price, supplier.supplier_name FROM product LEFT JOIN product_category category ON product.id_category = category.id_category LEFT JOIN supplier ON product.id_supplier = supplier.id_supplier");
        return $data->result_array();
    }

    public function saverecords($name, $category_id, $purchase_date, $expired_year, $quantity, $Price, $supplier)
    {
        $query = "insert into product(product_name, id_category, date_encode, date_expired, product_qty, price, id_supplier) values('$name','$category_id','$purchase_date','$expired_year','$quantity','$Price','$supplier')";

        $this->db->query($query);
    }

    public function getById($id)
    {
        // $this->db->where($this->id_product, $id_product);
        // return $this->db->get($this->table)->row();
        return $this->db->query("SELECT * FROM product")->row();
    }

    public function updaterecords($id, $name, $category_id, $purchase_date, $expired_year, $quantity, $Price, $supplier)
    {
        $query = "UPDATE " . $this->table . " SET product_name = '" . $name . "' , id_category = '" . $category_id . "', date_encode = '" . $purchase_date . "',date_expired = '" . $expired_year . "',product_qty  = '" . $quantity . "', price = '" . $Price . "' , id_supplier = '" . $supplier . "' where id_product = " . $id;
        $this->db->query($query);
    }

    public function deleterecords($id_product)
    {
        $this->db->where($this->id, $id_product);
        $this->db->delete($this->table);
    }
}
