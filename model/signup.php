<?php
    //database credentials
    //require db_class.php
    require('../settings/db_class.php');

    class Lab_class extends db_connection {

        //method for insert
        public function user_insert($cname,$cmail,$cpass,$ccountry,$ccity,$ccontact,$image,$urole) {
            //formulate insert query
            $sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES('$cname','$cmail','$cpass','$ccountry','$ccity','$ccontact','$image','$urole')";
            //execute query
            return $this->db_query($sql);
            //return $sql;
        }

        public function returnCustomerLoginInfo($cmail){
            //sql query
            $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$cmail'";
    
            //run the sql query
            return $this->db_query($sql);
        }

        public function CustomerLogin($email){
            //sql query
            $sql = "SELECT customer_id, user_role, customer_email, customer_pass FROM customer WHERE customer_email = '$email'";
    
            //run the sql query
            return $this->db_query($sql);
        }

        public function ExistingCustomer($email){
            //sql query
            $sql = "SELECT customer_email FROM customer WHERE customer_email = '$email'";
    
            //return the executed query
            return $this->db_query($sql);
        }

    }
?>     

