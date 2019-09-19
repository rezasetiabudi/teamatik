<?php
    class Product_model extends CI_Model
    {
        public function getProduct(){
            $data = $this->db->query("SELECT * FROM product");
            return $data->result_array();
        }

        public function saverecords($name, $category_id, $prefix, $product, $purchase, $price) {
            $query = "insert into product(name, category_id, prefix_code, product_code, purchase_year, price) values('$name', '$category_id', '$prefix', '$product', '$purchase', '$price')";

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
    }
?>