<?php
    session_start();

    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $password = $_REQUEST['password'];