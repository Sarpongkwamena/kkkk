<?php
    //require for the model
    require('../model/brnd.php');

    function brand_add($bname) {
        //create an instance of the model class
        $brandmodel = new Brand_class(); 
        //run insert car model method
        $run_brand = $brandmodel->brand_insert($bname);

        if ($run_brand) {
            return true;
           //return $run_car;
        }else{
            return false;
        }
    }

    function brand_select() {
        //model class instance
        $brandmodels = new Brand_class();
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
?>