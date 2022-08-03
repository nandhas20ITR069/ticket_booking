<html>
    <head>
    <link rel="stylesheet" href="./book.css">
        <style>
        table{
            border-collapse:collapse;
            width:100%;
            
            background-color: aliceblue;
            
        }
        th,td{
            text-align:left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:#7EF5D7;
        }
        h2{
            color:white;
        }
        </style>
        </head>
        <body>
        <nav>
		<a href="./insert.html">BOOKING</a>
		<a href="./display.php">VIEW</a>
		<a href="./delete.html">CANCEL</a>
        <a href="./selectbyname.html">BOOKED</a>
        <a href="./home.html">HOME</a>
	</nav>
    <center>
            
            <?php
                 include("connection.php");
                 $sql="SELECT * FROM inser order by pno";
                
                 echo "<br><br><br><br>
                 <h2>HISTORY</h2>
                 <table border='1'> 
                 <tr>
                 
                 <th>Name</th>
                 <th>email id</th>
                 <th>city</th>
                 <th>phone no</th>
                 <th>movie</th>
                 <th>date</th>
                 <th>seat</th>
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['n1'] . "</td>";
        echo "<td>" . $rows['n2'] . "</td>";
        echo "<td>" . $rows['n3'] . "</td>";
        echo "<td>" . $rows['n4'] . "</td>";
        echo "<td>" . $rows['n5'] . "</td>";
        echo "<td>" . $rows['n6'] . "</td>";
        echo "<td>" . $rows['c1'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?>

</center>
        </body>
</html>