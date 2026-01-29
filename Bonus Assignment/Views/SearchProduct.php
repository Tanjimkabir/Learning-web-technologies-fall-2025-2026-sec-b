<?php
    session_start();
?>

<html>
<head>
    <title>Search Product Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        .box {
            width: 500px;
            margin-top: 150px;
            margin-left: 600px;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            padding: 5px;
            text-align: left;
        }
        a{
            text-decoration: none;
            text-align: center;
            display: block;
        }
    </style>
</head>

<body onload="loadAllProducts()">
    <div class="box">
        <fieldset style="border:2px solid black">
            <legend><b>SEARCH</b></legend>

            <input type="text" id="search">
            <input type="button" value="Search By Name" onclick="searchProduct()">
            <hr>

            <div id="result"></div>
        </fieldset>
        <br>
        <a href="Dashboard.php">Back to Dashboard</a>
    </div>

<script>
function loadAllProducts(){
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controllers/SearchProductCheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('name=');

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
}

function searchProduct(){
    let name = document.getElementById('search').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controllers/SearchProductCheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('name='+name);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
}
</script>

</body>
</html>
