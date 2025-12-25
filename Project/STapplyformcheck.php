<?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        $degree = $_REQUEST['degree'];
        $cgpa = $_REQUEST['cgpa'];
        $semester = $_REQUEST['semester'];
        $credits = $_REQUEST['credits'];
        $reference = $_REQUEST['reference'];

        if($name == "" || $degree == "" || $cgpa == "" || $semester == "" || $credits == "" || $reference == "")
        {
            echo "Please fill out all the boxes";
        }
        else if($cgpa < 3.50){
            echo "CGPA must be at least 3.50";
        }
        else if($credits < 90){
            echo "Minimum 90 credits required";
        }
        else{
            header('location: Dashboard.php');
        }
    }else{
        header('location: STapplyform.php');
    }
?>
