<?php 
$con = new mysqli("localhost", "root", "","redcrescent");
$id = $_GET['id'];
$sql = "DELETE  from user where ID = '$id'";
$result2 = mysqli_query($con,$sql);
header("Location:Egyptionsrequest.php");
	
//Ask before deleting
?>