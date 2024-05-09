<html lang="en">
<head>
	<title>PPP Product Category Delete</title>
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
            <b><h1 style="font-size: 50px;">Product Category Schema Delete</h1></b>
            <br><br><br><br>
            <form action="ProductCategorydelete.php" method="post">
                
                <b><p>
                <label for="PCatID" style="font-size: 40px;">Product Category ID:</label>
                <input type="text" name="PCatID" id="PCatID" style="margin-left: 5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="CategoryName" style="font-size: 40px;">Category Name:</label>
                <input type="text" name="CategoryName" id="CategoryName" style="margin-left: 12%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="Status" style="font-size: 40px;">Status:</label>
                <input type="text" name="Status" id="Status" style="margin-left: 23.5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%; ">
                </p>

                <br><br>
                <input type="submit" value="INSERT" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;"></b>
            </form>
            <br><br>
            <b><p style="font-size: 50px;text-align: center;">***Enter value of any column to Delete Record***</p></b>
        </center>
    </div>
</body>
</html>
