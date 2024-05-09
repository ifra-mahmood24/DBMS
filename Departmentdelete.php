<!DOCTYPE html>
<html>

<head>
	<title>PPP Department Delete</title>
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

		$sqldel = "DELETE FROM Department WHERE DepartmentID='$DepartmentID' or DepartmentName='$DepartmentName' or Status='$Status'";
		

		if(sqlsrv_query($conn, $sqldel)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";


			echo nl2br("\n$DepartmentID\n $DepartmentName\n$Status");
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