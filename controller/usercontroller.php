<?php
    //model
    require('../model/signup.php');

    //add a new user
    //applies the insert method 
    function user_add($cname,$cmail,$cpass,$ccountry,$ccity,$ccontact,$image,$urole) {
        //create an instance of the model class
        $usermodel = new Lab_class(); 

        //run an insert user model method
        $run_user = $usermodel->user_insert($cname,$cmail,$cpass,$ccountry,$ccity,$ccontact,$image,$urole);

        if ($run_user) {
            return true;
           //return $run_car;
        }else{
            return false;
        }
    }

    //return customer login details
    //takes email
    function returnCustomerLoginInfo($cmail){
        $login_array = array();
        $login_object = new Lab_class();
        $login_record = $login_object->returnCustomerLoginInfo($cmail);
        if ($login_record) {
            $one_record = $login_object->db_fetch();
            $login_array[] = $one_record;
        }
        return $login_array;
    }

    function returnEmail($email){
        //create an instance
        $newCustomerObject = new Lab_class();
    
        //run the return email method
        $returnEmail = $newCustomerObject->ExistingCustomer($email);
    
        if ($returnEmail){
            $existingEmail = $newCustomerObject->db_fetch();
            return $existingEmail;
        }else{
            return false;
        }
    }

    function CustomerLoginInfo($email){
        //create an instance
        $newCustomerObject = new Lab_class();
    
        //run the return customer login details method
        $returnLoginInfo = $newCustomerObject->CustomerLogin($email);
    
        //check if query run successful
        if ($returnLoginInfo){
    
            //create an array
            $credentials = array();
            $credentials = $newCustomerObject->db_fetch();
    
            if (empty($credentials)){
                return false;
            }else{
                return $credentials;
            }
    
        }else{
            return false;
        }
    }
    
?>
