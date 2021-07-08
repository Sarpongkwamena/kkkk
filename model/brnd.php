<?php
//database credentials
//ask for db_class.php
require('../settings/db_class.php');

class Brand_class extends db_connection {
    //method for insert
    public function brand_insert($bname) {
        //formulate insert query
        $sql = "INSERT INTO brands(brand_name) VALUES('$bname')";
        //execute query
        return $this->db_query($sql);
        //return $sql;
    }

    //method for select. Create a function for select
    public function brand_select() {
        //formulate select query
        $sql = "SELECT * FROM brands"; 
        //execute query 
        return $this->db_query($sql);
    }

    //Delete model. crete a function for delete
    public function brand_delete($bname) {
        //formulate delete query
        $sql = "DELETE FROM brands WHERE brand_name='$bname'";
        //execute query
        return $this->db_query($sql);
    }
}
?>