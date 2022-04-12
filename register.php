<?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
	
	$email=$_POST["email"];
	$psw=$_POST["psw"];
	$g=$_POST["gender"];
	$dob=$_POST["birthday"];
	$hp=$_POST["phone"];

$sql="INSERT INTO user VALUES ('$email','$psw','$g','$dob','$hp')";
$query=mysqli_query($conn,$sql);

if($query)
	header("Location:registerSuccess.html");
}
?>