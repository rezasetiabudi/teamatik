<?php
    class Product_model extends CI_Model
    {
        public function getProduct(){
            $data = $this->db->query("SELECT p.name, p.purchase_year, p.price, c.name as category_id FROM product p LEFT JOIN category c ON p.category_id = c.id");
            return $data->result_array();
        }

        public function saverecords($name, $category_id, $prefix, $product, $purchase, $price, $qty, $total_price) {
            $query = "insert into product(name, category_id, prefix_code, product_code, purchase_year, price) values('$name', '$category_id', '$prefix', '$product', '$purchase', '$price', '$qty', '$total_price')";

	        $this->db->query($query);

        }

        public function generatePrefix($category_id){
            if($category_id == 1){
                return 'E';
            }
            else if($category_id == 2){
                return 'F';
            }
        }
        
        public function generateCode($prefix_code){
            $query = "SELECT MAX(product_code) AS 'max' FROM product WHERE prefix_code ='".$prefix_code."'";
            $data = $this->db->query($query);
            $data = $data->result_array();
            $newnumber = $data[0]['max']+1;
            return $newnumber;
        }

        public function getTotalPrice($price, $qty){
            $query = "SELECT total_price FROM product WHERE qty * price";
            $data = $this->db->query($query);
            return $data->result_array();
        }
    }
?>