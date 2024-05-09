<html lang="en">
<head>
	<title>PPP Department Insert</title>
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
            <b><h1 style="font-size: 50px;">Department Schema Insert</h1></b>
            <br><br><br><br>
            <form action="Departmentinsert.php" method="post">
                
                <b><p>
                <label for="DepartmentID" style="font-size: 40px;">Department ID:</label>
                <input type="text" name="DepartmentID" id="DepartmentID" style="margin-left: 5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="DepartmentName" style="font-size: 40px;">Department Name:</label>
                <input type="text" name="DepartmentName" id="DepartmentName" style="margin-left: 1%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
                </p>

                
                <p>
                <label for="Status" style="font-size: 40px;">Status:</label>
                <input type="text" name="Status" id="Status" style="margin-left: 16.5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%; ">
                </p>

                <br><br>
                <input type="submit" value="INSERT" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;"></b>
            </form>
        </center>
    </div>
</body>
</html>
