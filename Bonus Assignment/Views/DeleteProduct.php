<?php
    session_start();
    require_once('../Models/AddproductModel.php');

    if(!isset($_GET['id'])){
        header('location: DisplayProducts.php');
        exit();
    }

    $id = $_GET['id'];
    $product = getProductById($id);

    if($product == null){
        header('location: DisplayProducts.php');
        exit();
    }
?>

<html>
<head>
    <title>Delete Product Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        .box {
            width: 350px;
            margin-top: 150px;
            margin-left: 700px;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
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
        <form action="../Controllers/DeleteProductCheck.php" method="post">
            <fieldset style="border:2px solid black">
                <legend><b>DELETE PRODUCT</b></legend>

                <input type="hidden" name="id" value="<?php echo $product['ID']; ?>">

                Name: <?php echo $product['Product_Name']; ?><br>
                Buying Price: <?php echo $product['Buying_Price']; ?><br>
                Selling Price: <?php echo $product['Selling_Price']; ?><br>
                Displayable: <?php echo $product['Display']; ?><br><br>

                <input type="submit" name="submit" value="Delete">
            </fieldset>
            <br>
            <a href="Dashboard.php">Back to Dashboard</a>
        </form>
    </div>
</body>
</html>
