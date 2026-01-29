<?php
    session_start();
    require_once('../Models/AddproductModel.php');

    if(isset($_POST['submit'])){

        $id = $_REQUEST['id'];
        $status = deleteProduct($id);

        if($status){
            header('location: ../Views/DisplayProducts.php');
        }else{
            echo "Failed to delete product";
        }

    }else{
        header('location: ../Views/DisplayProducts.php');
    }
?>
