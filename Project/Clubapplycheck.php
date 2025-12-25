<?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        $sid = $_REQUEST['sid'];
        $semester = $_REQUEST['semester'];
        $passion = $_REQUEST['passion'];
        $reason = $_REQUEST['reason'];
        if($name == "" || $sid == "" || $semester == "" || $passion == "" || $reason == "")
        {
            echo "Please fill out all the boxes";
        }
        else{
            header('location: Dashboard.php');
        }
    }else{
        header('location: Clubapplicationform.php');
    }
?>
