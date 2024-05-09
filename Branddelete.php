<!DOCTYPE html>
<html>

<head>
	<title>PPP Brand Delete</title>
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
		

		$BrandID = $_REQUEST['BrandID'];
		$BrandName = $_REQUEST['BrandName'];
		$Status = $_REQUEST['Status'];
		
		// Performing insert query execution

		$sqldel = "DELETE FROM Brand WHERE BrandID='$BrandID' or BrandName='$BrandName' or Status='$Status'";
		

		if(sqlsrv_query($conn, $sqldel)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$BrandID\n $BrandName\n$Status");
		} else{
			echo "ERROR: Hush! Sorry $sqldel. ";
				//. sqlsrv_errors();
		}
		
		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>