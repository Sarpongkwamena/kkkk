<?php 
    require('../admin/productcontrol.php');
 
    if(isset($_POST['updates'])){ 
        $input = $_POST['id']; 
        $output = $_POST['brandname'];
        $xput = $_POST['price'];
        $rput = $_POST['describe'];
        $jput = $_POST['keys'];
        //run controller responsible for update 
        $updatestu = update_product($output,$xput,$rput,$jput,$input); 
 
        if ($updatestu) {
        echo 'update successful'; 
            header("location:addproduct.php"); 
        }  
        else { 
        echo 'update failed';  
        }  
    } 
?> 


<?php 
   // require('../admin/brandcontrol.php');
 
    //if(isset($_POST['updates'])){ 
      //  $input = $_POST['id']; 
        //$output = $_POST['brandname'];
        //run controller responsible for update 
        //$updatestu = brand_update($output,$input); 
 
        //if ($updatestu) {
        //echo 'update successful'; 
          //  header("location: addbrand.php"); 
        //}  
        //else { 
        //echo 'update failed';  
        //}  
    //} 
?> 
