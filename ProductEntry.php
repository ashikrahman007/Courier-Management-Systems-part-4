<?php
   $conn =new mysqli('localhost', 'root', '', 'db_mid_term');


	$carid=$_POST['carID'];
	$name=$_POST['carname'];
	$model=$_POST['carmodel'];
	$roaddd=$_POST['road'];
	$rentRate=$_POST['rent'];
	$latefine=$_POST['fine'];

	mysqli_query($conn,"INSERT INTO car(car_id,car_Name,car_Model,permittedRoad,rent_Rate,late_Fine) VALUES ('$carid','$name','$model','$roaddd','$rentRate','$latefine')");

	header("location:ProductInsert.php");



?>
