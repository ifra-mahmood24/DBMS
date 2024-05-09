<html>

<head>
	<title>PPP Product Information Update</title>
</head>

<body>
	<center>
		<?php

		$serverName = "SHEZZA\MSSQLSERVER02";
		$connectionInfo = array( "Database"=>"assign1");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
		
		// Check connection
		if ( $conn ) {
        		echo "<h3>Data updated successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
   		} else {
      	  echo "Connection Failed <br>";
   		}

		$Column = $_REQUEST['Column'];
		$Update = $_REQUEST['Update'];
		$Where = $_REQUEST['Where'];
		$Condition = $_REQUEST['Condition'];
		
		// Performing insert query execution
		$sqlup = "UPDATE ProductInformation SET $Column='$Update' WHERE $Where='$Condition'";
		
		$result = sqlsrv_query($conn, $sqlup) or die(print_r( sqlsrv_errors()));

		// Close connection
		sqlsrv_close($conn);
		?>
	</center>
</body>

</html>
