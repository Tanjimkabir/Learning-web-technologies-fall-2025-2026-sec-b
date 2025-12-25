<?php
    session_start();
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $password = $_REQUEST['password'];

        if($studentid == "" || $password == ""){
            echo "Please insert a Student ID and Password!";
        }
        else{
            if($studentid == $password){ 
                setcookie('status', 'true', time()+600, '/');
                $_SESSION['studentid'] = $studentid;
                header('location: Dashboard.php');
            }else{
                echo "User not found";
            }
        }
    }else{
        header('location: Loginpage.php');
    }
?>