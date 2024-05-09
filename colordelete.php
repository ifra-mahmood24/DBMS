<!DOCTYPE html>
<html>

<head>
	<title>PPP Color Delete</title>
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
		

		$ColorID = $_REQUEST['ColorID'];
		$ColorName = $_REQUEST['ColorName'];
		$Status = $_REQUEST['Status'];
		
		// Performing insert query execution

		$sqldel = "DELETE FROM Color WHERE ColorID='$ColorID' or ColorName='$ColorName' or Status='$Status'";
		

		if(sqlsrv_query($conn, $sqldel)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$ColorID\n $ColorName\n$Status");
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