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
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];
$n4=$_POST["n4"];
$n5=$_POST["n5"];
$n6=$_POST["n6"];
if(isset($_POST['submit']))
{
$c1=$_POST["c1"];
foreach($c1 as $c){
    $c2.=$c.",";
}
$sql="INSERT INTO inser(n1,n2,n3,n4,n5,n6,c1)VALUES('$n1','$n2','$n3','$n4','$n5','$n6','$c2')";

if($conn->query($sql) === TRUE){
    echo'<script>alert("Data Inserted Successfully")</script>';
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
}
$conn->close();
?>
</body>
</html>