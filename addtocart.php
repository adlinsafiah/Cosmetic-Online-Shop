<?php 
include 'dbconnect.php';
//$conn=mysqli_connect("localhost","root","","kathaleia_db");

// if(!$conn)
// 	echo("loser");
// else
// 	echo("you did it!");

if(isset($_POST["submit"])){
	$id=$_POST["productid"];
	$name=$_POST["name"];
	$price=$_POST["price"];
	$total=1*$price;

	$sql="INSERT INTO cart VALUES ('$id','$name',1,'$price','$total')";

	if(mysqli_query($conn,$sql))
		header("Location:http://localhost/kathaleia/cartview.php");
	else
		echo "ERROR";
}
?>

