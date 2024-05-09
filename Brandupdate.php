<!DOCTYPE html>
<html>

<head>
	<title>PPP Brand Update</title>
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
		
	
		$Column = $_REQUEST['Column'];
		$Update = $_REQUEST['Update'];
		$Where = $_REQUEST['Where'];
		$Condition = $_REQUEST['Condition'];
		
		// Performing insert query execution

		$sqlup = "UPDATE Brand SET $Column='$Update' WHERE $Where = '$Condition'";
		
		if(sqlsrv_query($conn, $sqlup)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Column\n $Update\n$Where\n$Condition");
		} else{
			echo "ERROR: Hush! Sorry $sqlup. ";
				//. sqlsrv_errors();
		}
		
		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>
