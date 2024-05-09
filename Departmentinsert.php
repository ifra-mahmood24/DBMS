<!DOCTYPE html>
<html>

<head>
	<title>PPP Department Insert</title>
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

		$DepartmentID = $_REQUEST['DepartmentID'];
		$DepartmentName = $_REQUEST['DepartmentName'];
		$Status = $_REQUEST['Status'];

		
		// Performing insert query execution
	
		$sql = "INSERT INTO Department(DepartmentID,DepartmentName,Status) VALUES ('$DepartmentID',	'$DepartmentName','$Status')";
		
		if(sqlsrv_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$DepartmentID\n $DepartmentName\n$Status");
		} else{
			echo "ERROR: Hush! Sorry $sql. ";
				$result = sqlsrv_query($conn, $sql) or die(print_r( sqlsrv_errors()));
				//. sqlsrv_errors()
		}

		
		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>
