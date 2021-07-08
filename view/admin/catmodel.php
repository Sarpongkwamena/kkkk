<?php
//database credentials
//ask for db_class.php
require('../admin/db_class.php');

class Cat_class extends db_connection {
    //method for insert
    public function cat_insert($cname) {
        //formulate insert query
        $sql = "INSERT INTO categories(cat_name) VALUES('$cname')";
        //execute query
        return $this->db_query($sql);
        //return $sql;
    }

    //method for select. Create a function for select
    public function cat_select() {
        //formulate select query
        $sql = "SELECT * FROM categories"; 
        //execute query 
        return $this->db_query($sql);
    }

    //Delete model. crete a function for delete
    public function cat_delete($cname) {
        //formulate delete query
        $sql = "DELETE FROM categories WHERE cat_name='$cname'";
        //execute query
        return $this->db_query($sql);
    }

    //update model. Create a function for update
    public function cat_update($cname, $cid){
        //formulate update query
        $sql = "UPDATE `categories` SET `cat_name`='$cname' WHERE `cat_id`='$cid'";
        //execute query
        return $this->db_query($sql);
        //return $sql;
    }
}
?>