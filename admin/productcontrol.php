<?php 
    //model
    require('../Admin/productmodel.php');

    function insert_product($cat, $brand, $title, $price, $desc, $image, $keywords) {
        //model class instance
        $product_add = new Product_class();

        //run insert phone model method
        $run_product = $product_add->product_insert($cat, $brand, $title, $price, $desc, $image, $keywords);

        if ($run_product) {
            return true;
        }
        else{
            return false;
        }
    }

    function select_product() {
        //model class instance
        $productview = new Product_class();

        //run select phone model method
        $run_product = $productview->product_select();
        //create array
        if ($run_product) {
            $view_all = array();
            //loop through fetch array
            while ($oneproduct=$productview->db_fetch()) {
                //append record to array
                $view_all[]=$oneproduct;
            }
            return $view_all;
        }
        else{
            return false;
        }
    }
    function delete_product($productid) {
        //model class instance
        $prodel = new Product_class();

        //run select phone model method
        $run_delete = $prodel->product_delete($productid);
        if ($run_delete) {
            
            return true;
        }
        else{
            return false;
        }
    }

    function update_product($productcat, $productbrand, $producttitle, $productprice, $productdesc,
    $productimage, $productkeywords, $prodid) {
        //model class instance 
        $proupdate = new Product_class();

        //run select phone model method
        $run_update = $proupdate->product_update($productcat, $productbrand, $producttitle, $productprice, 
        $productdesc, $productimage, $productkeywords, $prodid);
        if ($run_update) {
            return true;
        }
        else {
            return false;
        }
    }

    function cat_select() {
        //model class instance
        $brandmodels = new Product_class();
        //run select brand model method
        $run_brands = $brandmodels->cat_select();
        //craete array
        if ($run_brands) {
            $see_all = Array();
            //loop through fetch array
            while ($onebrand=$brandmodels->db_fetch()) {
                //append record to array
                $see_all[]=$onebrand;
            }
            return $see_all;
        }
        else{
            return false;
        }
    }

    function brand_select() {
        //model class instance
        $brandmodels = new Product_class();
        //run select brand model method
        $run_brands = $brandmodels->brand_select();
        //craete array
        if ($run_brands) {
            $see_all = Array();
            //loop through fetch array
            while ($onebrand=$brandmodels->db_fetch()) {
                //append record to array
                $see_all[]=$onebrand;
            }
            return $see_all;
        }
        else{
            return false;
        }
    }
?>