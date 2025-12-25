<?php
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: Logincheck.php');
    }
?>

<html>
<head>
    <title>Report Lost Item Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        img {
            margin-top: 175px;
            margin-left: 900px;
        }
        label{
            display: inline-block;
            width: 150px;
        }
        a{
            margin-left: 220px;
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
            margin-left: 160px;
            font-size: 14px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img src="AIUB Logo.png" width="100">
    <h3>Please fill out the form below to report info about a lost item:</h3>
    <form action="Reportlostitemcheck.php" method="post" onsubmit="return validateForm()">
        <div class="box">
            <label><b>Student ID: </b></label>
            <input type="text" id="studentid" name="studentid" oninput="e1.innerHTML=''">
            <p id="e1" class="error"></p>
            <br>
            <label><b>Item Name: </b></label>
            <input type="text" id="itemname" name="itemname" oninput="e2.innerHTML=''">
            <p id="e2" class="error"></p>
            <br>
            <label><b>Item Description: </b></label>
            <textarea id="itemdescription" name="itemdescription" rows="4" cols="50" oninput="e3.innerHTML=''"></textarea>
            <p id="e3" class="error"></p>
            <br>
            <label><b>Date Found: </b></label>
            <input type="date" id="datefound" name="datefound" onchange="e4.innerHTML=''">
            <p id="e4" class="error"></p>
            <br>
            <label><b>Location Found: </b></label>
            <input type="text" id="locationfound" name="locationfound" oninput="e5.innerHTML=''">
            <p id="e5" class="error"></p>
            <br>
            <label><b>Upload Picture: </b></label>
            <input type="file" id="upldpic" name="upldpic" onchange="e6.innerHTML=''">
            <p id="e6" class="error"></p>
            <br>
            <input type="submit" name="submit" value="Submit Report">
            <br><br>
            <a href="Lost and Found.php">Back</a>
        </div>
    </form>

<script>
function validateForm(){
    var studentid = document.getElementById("studentid").value;
    var itemname = document.getElementById("itemname").value;
    var itemdescription = document.getElementById("itemdescription").value;
    var datefound = document.getElementById("datefound").value;
    var locationfound = document.getElementById("locationfound").value;
    var upldpic = document.getElementById("upldpic").value;

    if(studentid == ""){
        e1.innerHTML = "Student ID is required";
        return false;
    }
    if(itemname == ""){
        e2.innerHTML = "Item name is required";
        return false;
    }
    if(itemdescription == ""){
        e3.innerHTML = "Item description is required";
        return false;
    }
    if(datefound == ""){
        e4.innerHTML = "Date found is required";
        return false;
    }
    if(locationfound == ""){
        e5.innerHTML = "Location found is required";
        return false;
    }
    if(upldpic == ""){
        e6.innerHTML = "Please upload a picture";
        return false;
    }
    alert("The item has been reported successfully!");
    location.reload();
    return false;
}
</script>
</body>
</html>
