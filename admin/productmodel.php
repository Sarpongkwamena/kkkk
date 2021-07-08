<?php
    //database credentials
    require('../admin/db_class.php');

    class Product_class extends db_connection {

        //Insert method
        public function product_insert($cat, $brand, $title, $price, $desc, $image, $keywords) {

            //formulate insert query
            $sql = "INSERT INTO products(product_cat, product_brand, product_title, product_price, 
            product_desc, product_image, product_keywords) VALUES('$cat', '$brand','$title', '$price', 
            '$desc', '$image', '$keywords')";

            //execute query
            return $this->db_query($sql);
        }

        public function product_select()  {

            //formulate select query
            $sql = "SELECT * FROM products";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_query($sql);
        }

        public function product_delete($productdid) {

            //formulate delete query
            $sql = "DELETE FROM products WHERE product_id='$productdid'";

            //execute query
            return $this->db_query($sql);
        }

        //Update model
        public function product_update($productcat, $productbrand, $producttitle, $productprice, $productdesc,
        $productimage, $productkeywords, $prodid) {

            //formulate update query
            $sql = "UPDATE brands SET product_cat = '$productcat', product_brand = '$productbrand',
            product_title = '$producttitle', product_price = '$productprice', product_desc = '$productdesc', 
            product_image = '$productimage', product_keywords = '$productkeywords', WHERE brand_id = '$prodid'";

            //execute query
            return $this->db_query($sql);
        }

        //method for select. Create a function for select
        public function cat_select() {
            //formulate select query
            $sql = "SELECT * FROM categories"; 
            //execute query 
            return $this->db_query($sql);
        }


        //method for select. Create a function for select
        public function brand_select() {
            //formulate select query
            $sql = "SELECT * FROM brands"; 
            //execute query 
            return $this->db_query($sql);
        }

    }
    
?>