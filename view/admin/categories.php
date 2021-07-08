<?php
    require('../admin/cat_controller.php');
?>

<?php
    if (isset($_GET['submit'])){
        $brandname = $_GET['cat_name'];
        //make view aware of controller
        //run controller responsible for insert
        $brand = cat_add($brandname); 
        if ($brand) {
            header('location:categories.php');
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
        $input = $_GET['cat_name'];
        //make view aware of controller
        //run controller responsible for insert
        $deletebrand = cat_delete($input);

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
    <h1>Add a Category </h1>
    <form>
        <input name= 'cat_name'> </input>
        <input type='submit' name='submit' value = 'sumit'></input>
        <input type='submit' name='delete' value = 'delete'></input>
    </form>
    <div> 
        <table>
            <Thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Update
                    </th>                  
                </tr>
            </Thead>
            <Tbody>
            <?php
                $all_brand = cat_select();
                foreach($all_brand as $all)
                    {
                $brand_id =$all['cat_id'];
                $brand_name= $all['cat_name'];
            ?>
                <tr>
                <form action="updatecat.php" method="POST">
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

