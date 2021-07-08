<?php
//connect to the controller
require("../controller/usercontroller.php");
$errors = array();
function getRealIpAddr(){
 if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
  // Check IP from internet.
  $ip = $_SERVER['HTTP_CLIENT_IP'];
 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
  // Check IP is passed from proxy.
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 } else {
  // Get IP address from remote address.
  $ip = $_SERVER['REMOTE_ADDR'];
 }
 return $ip;
}

$ip_add = getRealIpAddr();

//check if submit button was clicked
if(isset($_POST['submit'])){
    //get user data
    $loginEmail = $_POST['mail'];
    $loginPassword = $_POST['password'];

    //check if fields are empty
    if(empty($loginEmail)){
        array_push($errors, "Email is Required");
    }
    if(empty($loginPassword)){
        array_push($errors, "Password is Required");
    }
    //check if email is valid
    if (!filter_var($loginEmail, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Email is invalid");
    }

    //if there are errors in form
    if(count($errors) == 0){
   
        //return login info
        $loginInfo = returnCustomerLoginInfo($loginEmail);

        //check if email is in the db
        if($loginInfo){
        //check if they are equal:
        $hash = $loginInfo[0]['customer_pass'];

        if(password_verify($loginPassword, $hash)){

          session_start();
          $_SESSION['customer_id'] = $loginInfo['customer_id'];
          $_SESSION['user_role'] = $loginInfo['user_role'];
          header("location: ../view/templatemo_546_sixteen_clothing/home.php");

        }else{

            echo ("Email or Password is wrong");

        }
        }
    }

}
?>

<!--styling the work-->
<!--css-->
<style>
body{
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(view/admin/assets/imag/about-us.jpg);
    background-size: cover;
    background-position: center;
}
</style>
<!--html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>   

  <!--contents-->   
    <br>
    <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
            <div class="page-header">
                <h1 style="text-align: center; color:white">Welcome, Please Login</h1>      
          </div> 
          <!--forms-->
            <form class="form-horizontal animated bounce" method="POST"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="email" type="email" class="form-control" name="mail" placeholder="E-Mail Address">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>
                </div>
              </form>  
              <br> 
        </div> 
        <div class="col-md-3"></div>    
     </div>
    </div> 
</body>
</html>