<?php 
    require('../admin/brandcontrol.php');
 
    if(isset($_POST['updates'])){ 
        $input = $_POST['id']; 
        $output = $_POST['brandname'];
        //run controller responsible for update 
        $updatestu = brand_update($output,$input); 
 
        if ($updatestu) {
        echo 'update successful'; 
            header("location: addbrand.php"); 
        }  
        else { 
        echo 'update failed';  
        }  
    } 
?> 
