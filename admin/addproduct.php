<?php
    require('../admin/productcontrol.php');
?>

<?php
    if (isset($_POST['summit'])){
        $category= $_POST['category'];
        $brand= $_POST['brand'];
        $title= $_POST['title'];
        $price= $_POST['price'];
        $describe= $_POST['describe'];
        $image =$_POST['image'];
        $skey=$_POST['keywords'];
        //make view aware of controller
        //run controller responsible for insert
        $insert = insert_product($category,$brand,$title,$price,$describe,$image,$skey);
        if ($insert) {
        echo 'insert successful';
        } else {
        echo 'insert failed'; 
        } 
        //echo $car;
        //$all_cars= car_select();
        //foreach($all_cars as $all){
           // print "<pre>";
            //echo implode(" ",$all);
            //print "</pre>";
        //}
    }
    if (isset($_GET['delete'])) {
        $input = $_GET['id'];
        //make view aware of controller
        //run controller responsible for insert
        $deletebrand = delete_product($input);

        if ($deletebrand) {
        echo 'successfully deleted';
        } 
        else {
        echo 'delete failed, try again senior'; 
        } 
        //$all_cars= car_select();
        //foreach($all_cars as $all){
            //print "<pre>";
            //echo implode(" ",$all);
            //print "</pre>";
        //} 
    }
?>

<html>
<body>
    <h1>Add a product</h1>
    <form method='POST'>
        <div class="form-group">
        <span> Category </span>
        <select name="category" style="width: 10%;">
            <option value="" selected disabled hidden>Select a Category</option>
            <?php
            $categorylist = cat_select();
            foreach($categorylist as $cats){
                echo "<option value=".$cats['cat_id'].">".$cats['cat_name']."</option>";
            }
            ?> 
        </select>
        </div>
        <br>
        <div class="container">
            <div class="jumbotron">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                        <span> Brand </span>
                        <select name="brand" style="width: 10%;">
                            <option value="" selected disabled hidden>Select a Brand</option>
                            <?php
                            $brandlist = brand_select();
                            foreach($brandlist as $brand){
                                echo "<option value=".$brand['brand_id'].">".$brand['brand_name']."</option>";
                            }
                            ?> 
                        </select>
                        </div>
                        <br>
                        <input id='ti' name= 'title' placeholder ='title'>
                        <br>
                        <br>
                        <div>
                        <input id= 'pr' name='price' placeholder='product price'>
                        </div>
                        <br>
                        <input id='desc' name='describe' placeholder='description'> 
                        <div>
                            <span><p class="text"> <strong>Upload Photo</strong></p></span>
                            <input id="photo" type="file" name="image"></input> 
                        </div>
                        <br>
                        <div>
                        <input id='key' name='keywords' placeholder='product keywords'>
                        </div>
                        <br>
                        <input type='submit' name='summit' value = 'sumit'></input>
                    </div>
                </div>        
            <div>
        </div>
        <!--<input type='submit' name='delete' value ='delete'></input>-->
    </form>
    <br>
    <form>
        <input type="text"  name= 'id' class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="enter id">
        <button type='submit' name='delete' class="btn btn-primary mb-2">Delete</button>
    </form>
    <div> 
        <table>
        <Thead>
            <tr>
                <th>
                   Product ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Price
                </th>
                <th>
                    Description
                </th>
                <th>
                    Keywords
                </th>
                <th>
                    Update
                </th>                  
            </tr>
        </Thead>
            </Thead>
            <Tbody>
            <?php
                $all_brand = select_product();
                foreach($all_brand as $all)
                    {
                $brand_id =$all['product_id'];
                $brand_name= $all['product_title'];
                $product_price= $all['product_price'];
                $product_desc= $all['product_desc'];
                $product_img=$all['product_image'];
                $product_keys=$all['product_keywords'];
            ?>
                    <tr>
                        <td>
                            <form action="adupdate.php" method="POST">
                            <input type='number' name='id' value='<?= $all['product_id'] ?>'> 
                            <input type= 'text' name='brandname' value='<?= $all['product_title'] ?>'></input>
                            <input type='text' name='price' value='<?= $all['product_price'] ?>'>
                            <input type='text' name='describe' value='<?= $all['product_desc'] ?>'>
                            <input type='text' name='keys' value='<?= $all['product_keywords'] ?>'>
                            <td>
                            <input type='submit' name='updates' value='update'>
                            </td>
                            </form>
                        </td>
                        <td>
                        </td>
                    </tr>
            <?php
                }
            ?> 
            </Tbody>
        </table>
    </div>                    
</body>
</html>


