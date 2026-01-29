<?php
    session_start();
    require_once('../Models/AddproductModel.php');

    if(isset($_POST['submit'])){

        $name = $_REQUEST['name'];
        $buying_price = $_REQUEST['buying_price'];
        $selling_price = $_REQUEST['selling_price'];

        if(isset($_REQUEST['display'])){
            $display = "Yes";
        }else{
            $display = "No";
        }

        if($name == "" || $buying_price == "" || $selling_price == ""){
            echo "Please fill out all the boxes";
        }else{
            $product = ['name' => $name,'buying_price' => $buying_price,'selling_price' => $selling_price,'display' => $display];
            $status = addProduct($product);
            if($status){
                header('location: ../Views/AddProduct.php');
            }else{
                echo "Failed to add product";
            }
        }
        
    }else{
        header('location: ../Views/AddProduct.php');
    }
?>
