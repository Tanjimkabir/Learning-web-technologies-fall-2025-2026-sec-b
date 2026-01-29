<?php
    require_once('../Models/AddproductModel.php');

    $name = $_POST['name'];
    $products = searchProductByName($name);

    if(mysqli_num_rows($products) > 0){
        echo "<table>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                    <th></th>
                    <th></th>
                </tr>";

        while($row = mysqli_fetch_assoc($products)){
            $profit = $row['Selling_Price'] - $row['Buying_Price'];

            echo "<tr>
                    <td>{$row['Product_Name']}</td>
                    <td>{$profit}</td>
                    <td><a href='EditProduct.php?id={$row['ID']}'>edit</a></td>
                    <td><a href='DeleteProduct.php?id={$row['ID']}'>delete</a></td>
                  </tr>";
        }

        echo "</table>";
    }else{
        echo "No product found";
    }
?>
