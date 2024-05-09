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
		

		$sqldel = "DELETE FROM ProductInformation WHERE ProductID='$ProductID' or ProductCode='$ProductCode' or ProductName='$ProductName' or Description='$Description' or BarCode='$BarCode' or ColorID='$ColorID' or BrandID='$BrandID' or CategoryID='$CategoryID' or UnitID='$UnitID' or DepartmentID='$DepartmentID' or OpeningQty='$OpeningQty' or SalePrice='$SalePrice' or PurchasePrice='$PurchasePrice' or MaxQty='$MaxQty' or MinQty='$MinQty' or Status='$Status' ";
		

		$result = sqlsrv_query($conn, $sqldel) or die(print_r( sqlsrv_errors()));
		
		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>