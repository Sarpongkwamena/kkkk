<?php
    require('../admin/productcontrol.php');
?>
<html>
<body>
    <h1>Add a brand </h1>
    <form>
        <input name= 'product_brand'> </input>
        <!--<input type='submit' name='summit' value = 'sumit'></input>-->
        <input type='submit' name='delete' value ='delete'></input>
    </form>

</body>   
 <div> 
        <table>
            <Thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Brand Name
                    </th>                
                </tr>
            </Thead>
            <Tbody>
            <?php
                $all_brands = product_select();
                foreach($all_brands as $all)
                    {
            ?>
                    <tr>
                         <td>
                            <?= $all['product_id'] ?>
                        </td>

                        <td>
                            <?= $all['product_brand'] ?>
                        </td>
                    </tr>
            <?php
                }
            ?> 
            </Tbody>
        </table>
    </div>                    
</html>
<?php

    if (isset($_GET['delete'])) {
        $input = $_GET['product_name'];
        //make view aware of controller
        //run controller responsible for insert
        $deletebrand = product_delete($input);

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