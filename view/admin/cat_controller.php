<?php
    //require for the model
    require('../admin/catmodel.php');

    function cat_add($cname) {
        //create an instance of the model class
        $brandmodel = new Cat_class(); 
        //run insert car model method
        $run_brand = $brandmodel->cat_insert($cname);

        if ($run_brand) {
            return true;
           //return $run_car;
        }else{
            return false;
        }
    }

    function cat_select() {
        //model class instance
        $brandmodels = new Cat_class();
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
    function cat_delete($cname) {
        //model class instance 
        $brandmodel = new Cat_class();
        //run delete brand method
        $run_delete = $brandmodel->cat_delete($cname);
        if ($run_delete) {
            return true;
        }
        else{
            return false;
        }
    }
    function cat_update($cname, $cid) {
        //model class instance
        $bmodel = new Cat_class();
        //run update categories method
        $run_update = $bmodel->cat_update($cname, $cid);
        if ($run_update) {
            return true;
        }
        else{
            return false;
        }
    }
?>