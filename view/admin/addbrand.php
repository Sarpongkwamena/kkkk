<?php
    require('../admin/brandcontrol.php');
?>

<?php
    if (isset($_GET['summit'])){
        $brandname = $_GET['brandname'];
        //make view aware of controller
        //run controller responsible for insert
        $brand = brand_add($brandname); 
        if ($brand) {
            header('location:addbrand.php');
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
        $input = $_GET['brandname'];
        //make view aware of controller
        //run controller responsible for insert
        $deletebrand = brand_delete($input);

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
    <h1>Add a brand </h1>
    <form class="form-inline">
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input type="text"  name= 'brandname' class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="brand">
        <button type="submit" name='summit' class="btn btn-primary mb-2">Submit</button>
        <button type="submit" name='delete' class="btn btn-primary mb-2">Delete</button>
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
                $all_brand = brand_select();
                foreach($all_brand as $all)
                    {
                $brand_id =$all['brand_id'];
                $brand_name= $all['brand_name'];
            ?>
                <tr>
                <form action="adupdate.php" method="POST">
                    <td>
                        <input type='number' name='id' value='<?= $all['brand_id'] ?>'> 
                    </td>
                    <td>
                        <input type= 'text' name='brandname' value='<?= $all['brand_name'] ?>'></input> 
                    </td>
                    <td>
                        <input type='submit' name='updates' value='update' href="adupdate.php">
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

