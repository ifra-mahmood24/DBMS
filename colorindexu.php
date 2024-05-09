<html lang="en">
<head>
	<title>PPP Color Update</title>
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
            <b><h1 style="font-size: 50px;">Color Schema Update</h1></b>
            <br><br><br><br>
			<form action="colorupdate.php" method="post">
			
			<b><div id="select">
			<select name='Column' style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;">
				<option value="ColorID">ColorID</option>
				<option value="ColorName">ColorName</option>
				<option value="Status">Status</option>
			</select>
				<p>
				<label for="Update" style="font-size: 40px;">Enter updated value:</label>
				<input type="text" name="Update" id="Update"  style="margin-left: 14%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
				</p>

			<select name="Where" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;">
				<option value="ColorID">ColorID</option>
				<option value="ColorName">ColorName</option>
				<option value="Status">Status</option>
			</select>
			</div>
				<p>
				<label for="Condition" style="font-size: 40px;">Value of WHERE condition:</label>
				<input type="text" name="Condition" id="Condition"  style="margin-left: 5%;background-color: rgb(78, 80, 77);color:rgb(146,208,80);height: 5%;">
				</p>

                <br><br>
				<input type="submit" value="UPDATE" style="background-color: rgb(78, 80, 77);color: rgb(146,208,80);height: 7%;width: 10%;"></b>
			</form>
			<br><br>
            <b><p style="font-size: 50px;text-align: center;">***Enter value of any column to Update Record***</p></b>
		</center>
</body>
</html>
