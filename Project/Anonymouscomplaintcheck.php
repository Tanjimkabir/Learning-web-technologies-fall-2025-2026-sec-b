<?php
    session_start();
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $complaint = $_REQUEST['complaint'];
        
        if($studentid == "" || $complaint == ""){
            echo "Please fill out all the boxes";
        }
        else{
            header('location: Dashboard.php');
        }
    }else{
        header('location: Anonymousform.php');
    }
?>
