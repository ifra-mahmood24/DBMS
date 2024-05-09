<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$serverName = "SHEZZA\MSSQLSERVER02";
		$connectionInfo = array( "Database"=>"assign1");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. sqlsrv_errors());
		}
		
		// Taking all 5 values from the form data(input)
		$ProductID = $_REQUEST['ProductID'];
		$ProductCode = $_REQUEST['ProductCode'];
		$ProductName = $_REQUEST['ProductName'];
		$Description = $_REQUEST['Description'];
		$BarCode = $_REQUEST['BarCode'];
		$ColorID = $_REQUEST['ColorID'];
		$BrandID = $_REQUEST['BrandID'];
		$CategoryID = $_REQUEST['CategoryID'];
		$UnitID = $_REQUEST['UnitID'];
		$DepartmentID = $_REQUEST['DepartmentID'];
		$OpeningQty = $_REQUEST['OpeningQty'];
		$SalePrice = $_REQUEST['SalePrice'];
		$PurchasePrice = $_REQUEST['PurchasePrice'];
		$MaxQty = $_REQUEST['MaxQty'];
		$MinQty = $_REQUEST['MinQty'];
		$Status = $_REQUEST['Status'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO ProductInformation VALUES ('$ProductID','$ProductCode','$ProductName','$Description','$BarCode','$ColorID',
'$BrandID','$CategoryID','$UnitID','$DepartmentID','$OpeningQty','$SalePrice',
'$PurchasePrice','$MaxQty','$MinQty','$Status')";
		
		if(sqlsrv_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$ProductID \n$ProductCode\n$ProductName\n$Description\n$BarCode\n$ColorID\n$BrandID\n $CategoryID\n$UnitID \n$DepartmentID\n$OpeningQty\n$SalePrice \n$PurchasePrice\n$MaxQty\n$MinQty\n$Status");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. sqlsrv_errors(SQLSRV_ERR_ERRORS);
		}
		
		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>
