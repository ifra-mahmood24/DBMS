<html lang="en">
<head>
    <title>PPP Product Information Display</title>
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
                <th style="border:1px solid black;">ProductID</th>
                <th style="border:1px solid black;">ProductCode</th>
                <th style="border:1px solid black;">ProductName</th>
                <th style="border:1px solid black;">Description</th>
                <th style="border:1px solid black;">BarCode</th>
                <th style="border:1px solid black;">ColorID</th>
                <th style="border:1px solid black;">BrandID</th>
                <th style="border:1px solid black;">CategoryID</th>
                <th style="border:1px solid black;">UnitID</th>
                <th style="border:1px solid black;">DepartmentID</th>
                <th style="border:1px solid black;">OpeningQty</th>
                <th style="border:1px solid black;">SalePrice</th>
                <th style="border:1px solid black;">PurchasePrice</th>
                <th style="border:1px solid black;">MaxQty</th>
                <th style="border:1px solid black;">MinQty</th>
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
        $tsql = "SELECT * FROM ProductInformation";  
        $stmt = sqlsrv_query( $conn, $tsql);  
        if( $stmt === false)  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
            while($row=sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<th>"; echo $row["ProductID"]; echo "</th>";
                echo "<th>"; echo $row["ProductCode"]; echo "</th>";
                echo "<th>"; echo $row["ProductName"]; echo "</th>";
                echo "<th>"; echo $row["Description"]; echo "</th>";
                echo "<th>"; echo $row["BarCode"]; echo "</th>";
                echo "<th>"; echo $row["ColorID"]; echo "</th>";
                echo "<th>"; echo $row["BrandID"]; echo "</th>";
                echo "<th>"; echo $row["CategoryID"]; echo "</th>";
                echo "<th>"; echo $row["UnitID"]; echo "</th>";
                echo "<th>"; echo $row["DepartmentID"]; echo "</th>";
                echo "<th>"; echo $row["OpeningQty"]; echo "</th>";
                echo "<th>"; echo $row["SalePrice"]; echo "</th>";
                echo "<th>"; echo $row["PurchasePrice"]; echo "</th>";
                echo "<th>"; echo $row["MaxQty"]; echo "</th>";
                echo "<th>"; echo $row["MinQty"]; echo "</th>"; 
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