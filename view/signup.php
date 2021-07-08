<?php
  //require db_class.php
  require('..\controller\usercontroller.php');
  if (isset($_POST['submit'])) {
    $name = $_POST['customername'];
    $mail = $_POST['mail'];
    $pass = ($_POST['password']);
    $country = $_POST['nationality'];
    $city = $_POST['town'];
    $contact = $_POST['phone'];
    $image = $_POST['image'];
    $role = $_POST['Roles'];

    $hash= password_hash($pass, PASSWORD_DEFAULT);
    //run controller responsible for insert
    $insert = user_add($name,$mail,$hash,$country,$city,$contact,$image,$role);
  
    if ($insert) {
      echo 'insert successful';
      header("location:login.php");
      } 
    else {
      echo 'insert failed'; 
      } 
  } 
?>

<style>
body{
  background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/Know-About-Servicing-Your-Car.jpg);
  background-size: cover;
  background-position: center;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SIGN-UP</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50"> 
    <br>
  <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
            <div class="page-header">
                <h1 style="text-align: center; color:white">Sign Up</h1>      
          </div> 



  <form id="Add" method="POST">
    <div class="form-row">
        <div class="form-group">
          <label for="inputPassword4">Customername</label>
          <input id="cusname" type="text" class="form-control" name="customername" placeholder="Customername" required></input>
        </div>
        <div class="form-group">
          <label for="customername">Email</label>
          <input type="email" class="form-control" id="email" name="mail" placeholder="Email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Password</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Kindly enter your password">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Confirm Password</label>
        <input id="confirmpassword" type="text" class="form-control" placeholder="Kindly confirm your password">
      </div>
      <div class="form-row">
        <div class="form-group ">
          <label for="inputCity">Country</label>
          <input id="country" type="text" class="form-control" name="nationality" placeholder="Kindly enter your country" required>
        </div>
      <div class="form-group">
          <label for="inputZip">City</label>
          <input id="city" type="text" class="form-control" name="town" placeholder="Kindly enter your city" required>
      </div>
      <div class="form-group">
          <label for="inputZip">Telephone</label>
          <input id="contact" type="text" class="form-control" name="phone" placeholder="Kindly enter your contact" required></input>
      </div>
      <div class="custom-file">
      <input id="photo" type="file" name="image"></input> 
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
        <label for="inputState">Roles</label>
        <select class="form-control" id="inlineFormCustomSelectPref" name="Roles">
          <option selected>Choose...</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>
</div>
  <div>
  <input type="submit" name="submit" class="btn btn-success"></input>
  </div>
</form>
        </div> 
        <div class="col-md-3"></div>   
     </div> 
    </div>   
</body>
</html>


