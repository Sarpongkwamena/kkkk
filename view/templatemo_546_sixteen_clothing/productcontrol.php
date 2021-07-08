<?php
    //require for the model
    require('../templatemo_546_sixteen_clothing/productmodel.php');

    function product_add($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimage,$pkeywords) {
        //create an instance of the product model class
        $productmodel = new Product_class(); 
        //run insert product model method
        $run_product = $productmodel->product_insert($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimage,$pkeywords);

        if ($run_product) {
            return true;
           //return $run_car;
        }else{
            return false;
        }
    }

    function product_select() {
        //model class instance
        $brandmodels = new Product_class();
        //run select product model method
        $run_products = $productmodels->product_select();
        //craete array
        if ($run_products) {
            $see_all = Array();
            //loop through fetch array
            while ($onebrand=$productmodels->db_fetch()) {
                //append record to array
                $see_all[]=$onebrand;
            }
            return $see_all;
        }
        else{
            return false;
        }
    }
    function brand_delete($bname) {
        //model class instance 
        $brandmodel = new Brand_class();
        //run delete brand method
        $run_delete = $brandmodel->brand_delete($bname);
        if ($run_delete) {
            return true;
        }
        else{
            return false;
        }
    }
    function pro_view(){
        
        $newproduct = new Product_class();
        $viewproduct = $newproduct->product_view();
        
        if($viewproduct){
            $productname=array();
            
            while($record=$newproduct->db_fetch()){
                $productname[] = $record; 
            }
            return $productname;
        }else{
            return false;
        }
    }
?>