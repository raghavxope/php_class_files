<?php
include 'connection.php';
$item =$_POST['item'];
$quantity =$_POST['quantity'];
$price =$_POST['price'];

$query="INSERT INTO `bill`(`item`,`quantity`,`price`)
	VALUES('$item','$quantity','$price')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"successfully registered";
	}
	else
	{
		echo"error in registration";

	}
	?>