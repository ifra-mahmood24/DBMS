<html lang="en">
<head>
	<title>PPP Brand Insert</title>
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
            <b><h1 style="font-size: 50px;">Brand Schema Insert</h1></b>
            <br><br><br><br>
            <form action="brandinsert.php" method="post">
                
                <b><p>
                <label for="BrandID" style="font-size: 40px;">Brand ID:</label>
                <input type="text" name="BrandID" id="BrandID" style="margin-left: 5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="BrandName" style="font-size: 40px;">Brand Name:</label>
                <input type="text" name="BrandName" id="BrandName" style="margin-left: 1%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="Status" style="font-size: 40px;">Status:</label>
                <input type="text" name="Status" id="Status" style="margin-left: 8%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%; ">
                </p>

                <br><br>
                <input type="submit" value="INSERT" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;"></b>
            </form>
        </center>
    </div>
</body>
</html>
