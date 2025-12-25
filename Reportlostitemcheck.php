<?php
    session_start();
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $itemname = $_REQUEST['itemname'];
        $itemdescription = $_REQUEST['itemdescription'];
        $datefound = $_REQUEST['datefound'];
        $locationfound = $_REQUEST['locationfound'];

        if($studentid == "" || $itemname == "" || $itemdescription == "" || $datefound == "" || $locationfound == ""){
            echo "Please fill up all the fields";
        }
        else{
            header('location: Lost and Found.php');
        }
    }else{
        header('location: Reportlostitem.php');
    }
?>
