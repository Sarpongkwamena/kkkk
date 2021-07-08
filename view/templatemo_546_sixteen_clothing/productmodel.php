<?php
//database credentials
//ask for db_class.php
require('../admin/db_class.php');

class Product_class extends db_connection {
    //method for insert
    public function product_insert($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimage,$pkeywords) {
        //formulate insert query
        $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$pcat','$pbrand', '$ptitle', '$pprice' ,'$pdesc, '$pimage' ,'$pkeywords')";
        //execute query
        return $this->db_query($sql);
        //return $sql;
    }

    //method for select. Create a function for select
    public function product_select() {
        //formulate select query
        $sql = "SELECT * FROM products"; 
        //execute query 
        return $this->db_query($sql);
    }

    public function product_view(){
        $sql = "SELECT categories.cat_name, products.product_id,
        products.product_title, products.product_price, products.product_desc, products.product_image, product_keywords
        FROM `products`
        JOIN categories ON (products.product_cat = categories.cat_id)";
        return $this->db_query($sql);
    
    }

    //Delete model. crete a function for delete
    public function product_delete($pname) {
        //formulate delete query
        $sql = "DELETE FROM products WHERE product_brand='$pbrand'";
        //execute query
        return $this->db_query($sql);
    }

    //update model. Create a function for update
    public function peoduct_update($productbrand, $productid){
        //formulate update query
        $sql = "UPDATE `brands` SET `product_name`='$productbrand' WHERE `product_id`='$productid'";
        //execute query
        return $this->db_query($sql);
        //return $sql;
    }
}
?>