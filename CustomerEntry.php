<?php
   $conn =new mysqli('localhost', 'root', '', 'db_mid_term');
	

	$name=$_POST['name'];
	$address=$_POST['addresss'];
	$contact=$_POST['contactt'];
	$custornid=$_POST['customernid'];
	$cusIDD=$_POST['carID'];

	mysqli_query($conn,"INSERT INTO Customer (custonerName, customerAddress, customerContact, customerNID,car_id) VALUES ('$name','$address','$contact','$custornid','$cusIDD')");
	
	header("location:Insert.php");



?>