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
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form>
<img src="AIUB Logo.png" width="100">
<h3>Search for a Lost Item</h3>
<div class="box">
    <label><b>Item Name: </b></label>
    <input type="text" id="searchItem" oninput="document.getElementById('searchError').innerHTML=''">
    <br>
    <br>
    <input type="button" value="Search" onclick="searchItem()">
    <p id="searchError" class="error"></p>
</div>
<div class="box" id="resultBox" style="display:none;">
    <h4>Item Found</h4>
    <p><b>Item Name: </b><span id="itemName"></span></p>
    <p><b>Description: </b><span id="itemDesc"></span></p>
    <p><b>Location: </b><span id="itemLoc"></span></p>
</div>
<div class="box">
    <h4>Submit Proof of Ownership: </h4>
    <label><b>Upload Picture: </b></label>
    <input type="file">
    <br>
    <br>
    <label><b>Description: </b></label>
    <textarea rows="4" cols="50"></textarea>
    <br>
    <br>
    <input type="button" value="Submit Proof" onclick="submitProof()">
    <br>
    <br>
    <a href="Lost and Found.php">Back</a>
</div>
</form>
<script>
function searchItem() {
    var searchValue = document.getElementById("searchItem").value.toUpperCase();
    var error = document.getElementById("searchError");
    var resultBox = document.getElementById("resultBox");

    error.innerHTML = "";
    resultBox.style.display = "none";
    if (searchValue === "") {
        error.innerHTML = "Please enter an item name";
        return;
    }
    if (searchValue === item.name) {
        document.getElementById("itemName").innerHTML = item.name;
        document.getElementById("itemDesc").innerHTML = item.desc;
        document.getElementById("itemLoc").innerHTML = item.location;
        resultBox.style.display = "block";
    } else {
        error.innerHTML = "Item not found";
    }
}
function submitProof() {
    alert("Proof submitted successfully!");
    location.reload();
    return false;
}
</script>
</body>
</html>
