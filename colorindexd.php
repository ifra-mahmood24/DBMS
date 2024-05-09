<html lang="en">
<head>
	<title>PPP Color Delete</title>
    <link href="overall.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="left">
            <a href="si.php"><img id="logo" src="logo.jpg" alt="PPP LOGO"></a>
        </div>
        <div class="right">
            <h2>Product Producing Production</h2>
        </div>
    </div>
    <div class="center">
        <center>
            <br>
            <b><h1 style="font-size: 50px;">Brand Schema Delete</h1></b>
            <br><br><br><br>
            <form action="colordelete.php" method="post">
                
                <b><p>
                <label for="ColorID" style="font-size: 40px;">Color ID:</label>
                <input type="text" name="ColorID" id="ColorID" style="margin-left: 5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="ColorName" style="font-size: 40px;">Color Name:</label>
                <input type="text" name="ColorName" id="ColorName" style="margin-left: 1%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="Status" style="font-size: 40px;">Status:</label>
                <input type="text" name="Status" id="Status" style="margin-left: 8%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%; ">
                </p>

                <br><br>
                <input type="submit" value="DELETE" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;"></b>
                
            </form>
            <br><br>
            <b><p style="font-size: 50px;text-align: center;">***Enter value of any column to Delete Record***</p></b>
        </center>
</body>
</html>
