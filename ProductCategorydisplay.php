<html lang="en">
<head>
    <title>PPP Product Category Display</title>
    <link href="overall.css" rel="stylesheet">
</head>
<body>
    <div class="header">	
        <div class="left">
            <a href="si.php"><img id="logo" src="logo.jpg" alt="PPP LOGO"></a>
        </div>
        <div class="right">
            <h2>Product Producing Production</h2>
        </div>
    </div>
    <div class="center">
        <center>
        <div class="col-lg-12">
        <br><br>
        <table class="table table-bordered" style="width: 80%;border:1px solid black;background-color: rgb(78, 80, 77);color: rgb(146,208,80);">
            <thead>
            <tr>
                <th style="border:1px solid black;">PCatID</th>
                <th style="border:1px solid black;">CategoryName</th>
                <th style="border:1px solid black;">Status</th>      
            </tr>
            </thead>

        <tbody>
        <?php
        $serverName = "SHEZZA\MSSQLSERVER02";  
        $connectionInfo = array( "Database"=>"assign1");  
        $conn = sqlsrv_connect( $serverName, $connectionInfo);  
        if( $conn === false )  
        {  
            echo "Could not connect.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
        /* Set up and execute the query. */  
        $tsql = "SELECT * FROM ProductCategory";  
        $stmt = sqlsrv_query( $conn, $tsql);  
        if( $stmt === false)  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
            while($row=sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<th>"; echo $row["PCatID"]; echo "</th>";
                echo "<th>"; echo $row["CategoryName"]; echo "</th>"; 
                echo "<th>"; echo $row["Status"]; echo "</th>"; 
                echo"</tr>";
            }
        ?>
        </tbody>
        </table>
        </div>
    </div>
        </center>
</body>
</html>