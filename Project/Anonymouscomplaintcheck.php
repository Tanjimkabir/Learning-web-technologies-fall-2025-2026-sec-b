<?php
    session_start();
    require_once('AnonymouscomplaintModel.php');
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $complaint = $_REQUEST['complaint'];
        
        if($studentid == "" || $complaint == ""){
            echo "Please fill out all the boxes";
        }
        else{
            $complaintandadvice = ['studentid' => $studentid,'complaint' => $complaint];
            $status = submitcomplaint($complaintandadvice);
            if($status){
                header('location: Dashboard.php');
            }else{
                echo "Failed to submit report";
            }
        }
    }else{
        header('location: Anonymousform.php');
    }
?>
