<?php
    session_start();
?>

<html>
<head>
    <title>Add Product Page</title>
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
        <form action="../Controllers/AddProductCheck.php" method="post">
            <fieldset style="border:2px solid black">
                <legend><b>ADD PRODUCT</b></legend>

                <label>Name</label>
                <br>
                <input type="text" name="name">
                <br>

                <label>Buying Price</label>
                <br>
                <input type="text" name="buying_price">
                <br>

                <label>Selling Price</label>
                <br>
                <input type="text" name="selling_price">
                <br>
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
