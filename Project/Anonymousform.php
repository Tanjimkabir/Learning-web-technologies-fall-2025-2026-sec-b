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
        form {
            text-align: center;
        }
        a{
            margin-left: 230px;
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
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <img src="AIUB Logo.png" width="100">
    <h1>Welcome to Anonymous Complaint Form</h1>
    <p>If you have any <b>Advice</b> or <b>Complaint</b></p>
    <p>Please fill up the form below</p>
    <form action="Anonymousform.php" method="post">
        <div class="box">
        <label><b>Student ID: </b></label>
        <input type="text" id="studentid"name="studentid">  
        <br>
        <br>  
        <label><b>Complaint: </b></label>
        <textarea name="complaint" id="complaint" rows="4" cols="50"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit Complaint">
        <br>
        <br>
        <a href="Dashboard.php">Back</a>
        </div>

</form>
</body>
</html>