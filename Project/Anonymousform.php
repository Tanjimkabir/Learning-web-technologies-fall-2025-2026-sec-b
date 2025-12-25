<?php
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: Logincheck.php');
    }
?>

<html>
<head>
    <title>Lost and Found Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h1 {
            text-align: center;
        }
        p{
            text-align: center;
        }
        img {
            margin-top: 250px;
            margin-left: 895px;
        }
        label {
            display: inline-block;
            width: 120px;
        }
        .box {
            width: 500px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            text-align: left;
        }
        .error{
            color: red;
            margin-left: 130px;
            font-size: 14px;
        }
        a{
            margin-left: 230px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img src="AIUB Logo.png" width="100">
    <h1>Welcome to Anonymous Complaint Form</h1>
    <p>If you have any <b>Advice</b> or <b>Complaint</b></p>
    <p>Please fill up the form below</p>

    <form action="Anonymouscomplaintcheck.php" method="post" onsubmit="return validateForm()">
        <div class="box">

            <label><b>Student ID: </b></label>
            <input type="text" id="studentid" name="studentid" oninput="e1.innerHTML=''">
            <p id="e1" class="error"></p>
            <br>

            <label><b>Complaint: </b></label>
            <textarea id="complaint" name="complaint" rows="4" cols="50" oninput="e2.innerHTML=''"></textarea>
            <p id="e2" class="error"></p>
            <br>

            <input type="submit" name="submit" value="Submit Complaint">
            <br>
            <br>
            <a href="Dashboard.php">Back</a>

        </div>
    </form>
<script>
function validateForm(){
    var studentid = document.getElementById("studentid").value;
    var complaint = document.getElementById("complaint").value;

    if(studentid === ""){
        e1.innerHTML = "Student ID is required";
        return false;
    }
    if(complaint === ""){
        e2.innerHTML = "Complaint field cannot be empty";
        return false;
    }
    alert("Your complaint has been successfully submitted anonymously");
    location.reload();
    return false;
}
</script>
</body>
</html>
