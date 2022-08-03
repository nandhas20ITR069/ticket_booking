<html>
    <head>
    <link rel="stylesheet" href="./book.css">
</head>
<body>
<nav>
		<a href="./insert.html">BOOKING</a>
		<a href="./display.php">VIEW</a>
		<a href="./delete.html">CANCEL</a>
        <a href="./home.html">HOME</a>
        <a href="./selectbyname.html">BOOKED</a>
	</nav>

<?php
include("connection.php");
$n4=$_POST["n4"];
$sql="DELETE FROM inser where n4=$n4";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Data Deleted Successfully")</script>';
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>
</body>
</html>