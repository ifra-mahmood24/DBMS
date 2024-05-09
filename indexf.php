<html lang="en">
<head>
	<title>PPP Product Information Insert</title>
	<link href="prodinfooverall.css" rel="stylesheet">
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
        <b><h1 style="font-size: 50px;">Product Information Schema Insert</h1></b>
        <br><br><br><br>
		<form action="insertf.php" method="post">
			
			<b><p>
			<label for="ProductID" style="font-size: 40px;">ProductID:</label>
			<input type="text" name="ProductID" id="ProductID" style="margin-left: 14%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			
			<p>
			<label for="ProductCode" style="font-size: 40px;">Product Code:</label>
			<input type="text" name="ProductCode" id="ProductCode" style="margin-left: 10%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>

			<p>
			<label for="ProductName" style="font-size: 40px;">Product Name:</label>
			<input type="text" name="ProductName" id="ProductName" style="margin-left: 9%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>

			<p>
			<label for="Description" style="font-size: 40px;">Description:</label>
			<input type="text" name="Description" id="Description" style="margin-left: 12.5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>

			<p>
			<label for="BarCode" style="font-size: 40px;">Bar Code:</label>
			<input type="text" name="BarCode" id="BarCode" style="margin-left: 15%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="ColorID" style="font-size: 40px;">Color ID:</label>
			<input type="text" name="ColorID" id="ColorID" style="margin-left: 16%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="BrandID" style="font-size: 40px;">Brand ID:</label>
			<input type="text" name="BrandID" id="BrandID" style="margin-left: 15.5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="CategoryID" style="font-size: 40px;">Category ID:</label>
			<input type="text" name="CategoryID" id="CategoryID" style="margin-left: 12%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="UnitID" style="font-size: 40px;">Unit ID:</label>
			<input type="text" name="UnitID" id="UnitID" style="margin-left: 18%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="DepartmentID" style="font-size: 40px;">Department ID:</label>
			<input type="text" name="DepartmentID" id="DepartmentID" style="margin-left: 8.5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="OpeningQty" style="font-size: 40px;">Opening Quantity:</label>
			<input type="text" name="OpeningQty" id="OpeningQty" style="margin-left: 5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="SalePrice" style="font-size: 40px;">Sale Price:</label>
			<input type="text" name="SalePrice" id="SalePrice" style="margin-left: 15%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="PurchasePrice" style="font-size: 40px;">Purchase Price:</label>
			<input type="text" name="PurchasePrice" id="PurchasePrice" style="margin-left: 9%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			<p>
			<label for="MaxQty" style="font-size: 40px;">Max Quantity:</label>
			<input type="text" name="MaxQty" id="MaxQty" style="margin-left: 10%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>

			<p>
			<label for="MinQty" style="font-size: 40px;">Min Quantity:</label>
			<input type="text" name="MinQty" id="MinQty" style="margin-left: 10.5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>
			
			<p>
			<label for="Status" style="font-size: 40px;">Status:</label>
			<input type="text" name="Status" id="Status" style="margin-left: 20%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
			</p>

			<br><br>
			<input type="submit" value="INSERT" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;"></b>
			<br><br>
		</form>
	</center>
</body>
</html>
