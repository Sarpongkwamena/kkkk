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
           //print_r('hi');
        }  
        else { 
        echo 'update failed';  
        }  
    } 
?> 

<!--<html>
    <form>
        <td>
            <input type='number' name='id' value='<?= $all['cat_id'] ?>'> 
        </td>
        <td>
            <input type= 'text' name='cat_name' value='<?= $all['cat_name'] ?>'></input> 
        </td>
        <td>
            <input type='submit' name='updates' value='update' href="updatecat.php">
        </td>
    </form>
</html>