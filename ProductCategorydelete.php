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
		

		$PCatID = $_REQUEST['PCatID'];
		$CategoryName = $_REQUEST['CategoryName'];
		$Status = $_REQUEST['Status'];
		
		// Performing insert query execution

		$sqldel = "DELETE FROM ProductCategory WHERE PCatID='$PCatID' or CategoryName='$CategoryName' or Status='$Status'";
		

		if(sqlsrv_query($conn, $sqldel)){
			echo "<h3>Data deleted successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$PCatID\n $CategoryName\n$Status");
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