<?php
    session_start();
    if(isset($_POST['submit'])){
        $description = $_REQUEST['description'];
        if($description == ""){
            echo "Please provide a description";
        }
        else{
            header('location: Lost and Found.php');
        }
    }else{
        header('location: Searchlostitem.php');
    }
?>
