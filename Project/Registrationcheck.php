<?php
    session_start();
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $password = $_REQUEST['password'];

        if($studentid == "" || $password == ""){
            echo "Please provide Student ID and Password";
        }
        else{
            $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech project test database');
            $sql = "insert into users values('{$studentid}', '{$password}')";
            if(mysqli_query($con, $sql)){
                header('location: Loginpage.php');
            }else{
                header('location: Registration.php');
            }
        }
    }
    else{
        header('location: Registration.php');
    }
?>
