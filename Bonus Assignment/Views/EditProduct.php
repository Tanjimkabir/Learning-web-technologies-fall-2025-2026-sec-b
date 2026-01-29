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
    <title>Edit Product Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        label{
            display: inline-block;
            width: 120px;
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
        <form action="../Controllers/EditProductCheck.php" method="post">
            <fieldset style="border:2px solid black">
                <legend><b>EDIT PRODUCT</b></legend>

                <input type="hidden" name="id" value="<?php echo $product['ID']; ?>">

                <label>Name</label><br>
                <input type="text" name="name" value="<?php echo $product['Product_Name']; ?>"><br>

                <label>Buying Price</label><br>
                <input type="text" name="buying_price" value="<?php echo $product['Buying_Price']; ?>"><br>

                <label>Selling Price</label><br>
                <input type="text" name="selling_price" value="<?php echo $product['Selling_Price']; ?>"><br>

                <hr>
                <input type="checkbox" name="display" value="Yes">
                <label>Display</label>
                <hr>

                <input type="submit" name="submit" value="Save">
            </fieldset>
            <br>
            <a href="Dashboard.php">Back to Dashboard</a>
        </form>
    </div>
</body>
</html>
