<!DOCTYPE html>
<html>

<head>
	<title>Product Category Insert</title>
</head>

<body>
	<center>
		<?php

		$serverName = "SHEZZA";
		$connectionInfo = array( "Database"=>"assign1");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. sqlsrv_errors());
		}
		

		$PCatID = $_REQUEST['PCatID'];
		$CategoryName = $_REQUEST['CategoryName'];
		$Status = $_REQUEST['Status'];

		
		// Performing insert query execution
	
		$sql = "INSERT INTO ProductCategory(PCatID,CategoryName,Status) VALUES ('$PCatID',	'$CategoryName','$Status')";
		
		if(sqlsrv_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$PCatID\n $CategoryName\n$Status");
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
