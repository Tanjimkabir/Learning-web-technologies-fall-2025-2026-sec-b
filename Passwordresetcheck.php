<?php
    session_start();
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $newpassword = $_REQUEST['newpassword'];
        $confirmpassword = $_REQUEST['confirmpassword'];

        if($studentid == "" || $newpassword == "" || $confirmpassword == ""){
            echo "Please provide student ID and passwords";
        }
        else{
            if($newpassword != $confirmpassword){
                echo "Passwords do not match";
            }
            else{
                header('location: Loginpage.php');
            }
        }
    }else{
        header('location: Passwordreset.php');
    }
?>
