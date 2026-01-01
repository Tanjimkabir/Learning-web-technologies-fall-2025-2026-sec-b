<?php
    session_start();
    require_once('LoginandregistrationModel.php');
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $password = $_REQUEST['password'];

        if($studentid == "" || $password == ""){
            echo "Please provide Student ID and Password";
        }
        else{
            $user = ['studentid'=>$studentid, 'password'=>$password];
            $status = addUser($user);
            if($status){
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
