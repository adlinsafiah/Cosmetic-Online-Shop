<?php 
include 'dbconnect.php';
$id=$_GET['m'];

$sql="DELETE FROM cart WHERE product_id='$id'";

$delete=mysqli_query($conn,$sql);

if($delete){
	header("refresh:0, url = cartview.php");
}
?>