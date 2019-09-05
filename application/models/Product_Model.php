<?php
    class Product_model extends CI_Model
    {
        function getProduct(){
            $data = $this->db->query("SELECT * FROM product");
            return $data->result_array();
        }

        function saverecords($name, $category_id, $prefix, $product, $purchase, $price) {
            $query = "insert into employee(name, category_id, prefix_code, product_code, purchase_year, price, status) values('$name', '$category_id', '$prefix_code', '$product', '$purchase', '$price')";

	        $this->db->query($query);

        }

        function generatePrefix($category_id){
            if($category_id == 1){
                return 'E';
            }
            else if($category_id == 2){
                return 'F';
            }
        }
        
        function generateCode($prefix_code){
            $query = "SELECT MAX(product_code) AS 'max' FROM product WHERE prefix LIKE ".$prefix_code;
            $data = $this->db->query($query);

            $newnumber = $data['max']+1;
            return $newnumber;
        }
    }
?>