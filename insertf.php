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

    // Create connection
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if ( $conn ) {
        echo "<h3>Data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
    } else {
        echo "Connection Failed <br>";
    }

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

		$sql = "INSERT INTO ProductInformation(ProductID,ProductCode,ProductName,Description,BarCode,ColorID,BrandID,CategoryID,UnitID,DepartmentID,OpeningQty,SalePrice,PurchasePrice,MaxQty,MinQty,Status) VALUES ('$ProductID','$ProductCode','$ProductName','$Description','$BarCode','$ColorID',
'$BrandID','$CategoryID','$UnitID','$DepartmentID','$OpeningQty','$SalePrice',
'$PurchasePrice','$MaxQty','$MinQty','$Status')";
		
		$result = sqlsrv_query($conn, $sql) or die(print_r( sqlsrv_errors()));
		?>
	</center>
</body>

</html>
