<!DOCTYPE html>
<html>

<head>
	<title>PPP Color Insert</title>
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
	
		$sql = "INSERT INTO Brand(BrandID,BrandName,Status) VALUES ('$BrandID',
			'$BrandName','$Status')";
		
		if(sqlsrv_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$BrandID\n $BrandName\n$Status");
		} else{
			echo "ERROR: Hush! Sorry $sql. ";
				//. sqlsrv_errors()
		}
		
		
		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>
