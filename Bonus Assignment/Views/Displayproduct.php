<?php
    session_start();
    require_once('../Models/AddproductModel.php');
    $products = getAllDisplayedProducts();
?>

<html>
<head>
    <title>Display Products Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        .box {
            width: 600px;
            margin-top: 150px;
            margin-left: 500px;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        fieldset {
            border: 2px solid black;
            padding: 20px;
            background-color: white;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }
        th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: white;
        }
        a{
            text-decoration: none;
            text-align: center;
            display: block;
        }
    </style>
</head>

<body>
    <div class="box">
        <fieldset style="border:2px solid black">
            <legend><b>Display</b></legend>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Profit</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($products)){ ?>
                <tr>
                    <td><?php echo $row['Product_Name']; ?></td>
                    <td>
                        <?php
                            echo $row['Selling_Price'] - $row['Buying_Price'];
                        ?>
                    </td>
                    <td>
                        <a href="EditProduct.php?id=<?php echo $row['ID']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="DeleteProduct.php?id=<?php echo $row['ID']; ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>

            <br>
            <a href="Dashboard.php">Back to Dashboard</a>
        </fieldset>
    </div>
</body>
</html>
