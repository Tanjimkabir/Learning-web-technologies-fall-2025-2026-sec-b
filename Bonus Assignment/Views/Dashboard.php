<?php
    session_start();
?>

<html>
<head>
    <title>Dashboard Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        .box {
            width: 350px;
            margin-top: 200px;
            margin-left: 700px;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            text-align: center;
        }
        input[type=button]{
            width: 200px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="box">
        <fieldset style="border:2px solid black">
            <legend><b>DASHBOARD</b></legend>

            <h2>Welcome To Dashboard</h2>
            <h3>Please select what you want to do<h3>
            <hr>

            <input type="button" value="Add Product" onclick="location.href='Addproduct.php'">
            <br>
            <input type="button" value="Display Product" onclick="location.href='Displayproduct.php'">
            <br>
            <input type="button" value="Search Product" onclick="location.href='SearchProduct.php'">
        </fieldset>
    </div>
</body>
</html>
