<?php
require("../controller/productcontrol.php");
require_once("../settings/core.php");
session_start();
$ipadd = getRealIpAddr();
$cid = $_SESSION["customer_id"];

    
    $productDetails = pro_view();

?>

<style>
body{
  background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(/rayban.jpg);
  background-size: cover;
  background-position: center;
}
</style>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Product</title>
  </head>
  <body>
    
      
      <?php
      foreach ($productDetails as $key => $value){
          
          

      ?>
      
    <div class="container">
    <img src="<?='../'.$value['product_image'] ?>" width="300">
    <h3><?= $value['product_title'] ?></h3>
    <h6>Price: Ghc <?= $value['product_price'] ?></h6>

    <p>Description: <?= $value['product_desc'] ?></p>
    <p>Category: <?= $value['cat_name'] ?></p>
    
    <a href="<?= '../view/single_product.php?pid='.$value['product_id'] ?>" class="btn btn-secondary">Watch Product</a>
        
    <a href="<?php echo '../actions/cartadd_process.php?pid='.$value['product_id'].'&ipadd='.$ipadd.'&cid='.$cid.'&qty=1'; ?>" class="btn btn-primary">Add To Wishlist</a>
    </div>
      <?php } ?>

  </body>
</html>
