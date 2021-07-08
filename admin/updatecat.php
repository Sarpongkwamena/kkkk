<?php 
    require('../admin/cat_controller.php');
 
    if(isset($_POST['updates'])){ 
        $input = $_POST['id']; 
        $output = $_POST['cat_name'];
        //run controller responsible for update 
        $updatestu = cat_update($output,$input); 
 
        if ($updatestu) {
        echo 'update successful'; 
            header("location: categories.php"); 
        }  
        else { 
        echo 'update failed';  
        }  
    } 
?> 
