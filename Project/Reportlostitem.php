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
            form {
                text-align: center;
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
            </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <img src="AIUB Logo.png" width="100">
    <h3>Please fill out the form below to report info about a lost item:</h3>
    <form onsubmit="return submitForm()">
        <div class="box">
        <label><b>Student ID: </b></label>
        <input type="text" id="studentid"name="studentid">  
        <br>
        <br>  
        <label><b>Item Name: </b></label>
        <input type="text" id="itemname"name="itemname">
        <br>
        <br>
        <label><b>Item Description: </b></label>
        <textarea name="itemdescription" id="itemdescription" rows="4" cols="50"></textarea>
        <br>
        <br>
        <label><b>Date Found: </b></label>
        <input type="date" id="datefound" name="datefound">
        <br>
        <br>
        <label><b>Location Found: </b></label>
        <input type="text" id="locationfound" name="locationfound">
        <br>
        <br>
        <label><b>Upload Picture: </b></label>
        <input type="file" id="upldpic" name="uploadpic">
        <br>
        <br>
        <input type="submit" value="Submit Report">
        <br>
        <br>
        <a href="Lost and Found.php">Back</a>
        </div>
</form>
<script>
    function submitForm() {
        alert("Report submitted successfully!");
        location.reload();
        return false;
    }
</script>
</body>
</html>