<?php
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: Logincheck.php');
    }
?>

<html>
<head>
    <title>Search Lost Item Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        img {
            margin-top: 150px;
            margin-left: 900px;
        }
        .box {
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        label {
            display: inline-block;
            width: 150px;
        }
        a {
            margin-left: 220px;
        }
        .error {
            color: red;
            text-align: center;
            font-size: 14px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
<img src="AIUB Logo.png" width="100">
<h3>Search for a Lost Item</h3>
<form action="Searchlostitemcheck.php" method="post">
<div class="box">
    <label><b>Item Name: </b></label>
    <input type="text" id="searchitem" oninput="e1.innerHTML=''">
    <br>
    <br>
    <input type="button" value="Search" onclick="validateSearch()">
    <p id="e1" class="error"></p>
</div>

<div class="box" id="resultbox" style="display:none;">
    <h4>Item Found</h4>
    <p><b>Item Name:</p>
    <p><b>Description:</p>
    <p><b>Location:</p>
</div>

<div class="box">
    <h4>Submit Proof of Ownership:</h4>
    <label><b>Upload Picture: </b></label>
    <input type="file" id="proofpic" name="proofpic" onchange="e2.innerHTML=''">
    <p id="e2" class="error"></p>
    <br>

    <label><b>Description: </b></label>
    <textarea id="description" name="description" rows="4" cols="50" oninput="e3.innerHTML=''"></textarea>
    <p id="e3" class="error"></p>
    <br>

    <input type="submit" value="Submit Proof" name="submit" onclick="validateProof()">
    <br><br>
    <a href="Lost and Found.php">Back</a>
</div>
</form>
<script>
function validateSearch(){
    var searchitem = document.getElementById("searchitem").value;

    document.getElementById("resultbox").style.display = "none";

    if(searchitem === ""){
        e1.innerHTML = "Please enter an item name";
        return false;
    }

    e1.innerHTML = "Item not found";
    return false;
}
function validateProof(){
    var proofpic = document.getElementById("proofpic").value;
    var description = document.getElementById("description").value;

    if(proofpic == ""){
        e2.innerHTML = "Please upload a picture";
        return false;
    }
    if(description == ""){
        e3.innerHTML = "Description is required";
        return false;
    }
    alert("Proof submitted successfully!");
    location.reload();
    return false;
}
</script>
</body>
</html>
