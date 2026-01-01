<?php
    session_start();
    require_once('ClubapplyModel.php');
    if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];
    $studentid = $_REQUEST['studentid'];
    $semester = $_REQUEST['semester'];
    $passion = $_REQUEST['passion'];
    $reason = $_REQUEST['reason'];

    if($name == "" || $studentid == "" || $semester == "" || $passion == "" || $reason == "")
    {
        echo "Please fill out all the boxes";
    }
    $clubapplication = ['name' => $name,'studentid' => $studentid,'semester' => $semester,'passion' => $passion,'reason' => $reason];
    $status = Clubapply($clubapplication);
    if($status){
    header('location: clubinformation.php');
    }else{
         echo "Failed to submit Club application";
    }
    }else{
        header('location: Clubapplicationform.php');
}
?>
