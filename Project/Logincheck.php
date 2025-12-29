<?php
    session_start();
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $password = $_REQUEST['password'];

        if($studentid == "" || $password == ""){
            echo "Please insert a Student ID and Password!";
        }else{
            $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech project test database');
            $sql = "select * from users where studentid='{$studentid}' and password='{$password}'";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);

            if($count == 1){
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