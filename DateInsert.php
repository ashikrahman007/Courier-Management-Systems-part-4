<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="web">
		<div class="mid">
        <?php include_once("header.php");?>
        <?php
        	$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
		  $Testid =$_REQUEST['id'];
        ?>
	<div class="Cus_box">
		<lebal><h2>Bill insert </h2></lebal>
		<form action="Bill.php" method="POST">
			<label for="">Customer ID:</label>
			<input name="id" type="text" placeholder="Customer ID" value=<?php echo $Testid ?>><br><br>




			<label for="">1st Product Name :</label>
			<input name="1stpname" type="text" placeholder="Product Name"><br><br>
			<label for="">1st Product Price :</label>
			<input name="1stprice" type="number" placeholder="Product Price "><br><br>



			<label for="">2nd Product Name :</label>
			<input name="2ndpname" type="text" placeholder="Product Name"><br><br>
			<label for="">2nd Product Price :</label>
			<input name="2ndprice" type="number" placeholder="Product Price "><br><br>


			<label for="">3rd Product Name :</label>
			<input name="3rdpname" type="text" placeholder="Product Name"><br><br>
			<label for="">3rd Product Price :</label>
			<input name="3rdprice" type="number" placeholder="Product Price "><br><br>


			<label for="">4th Product Name :</label>
			<input name="4thpname" type="text" placeholder="Product Name"><br><br>
			<label for="">4th Product Price :</label>
			<input name="4thprice" type="number" placeholder="Product Price "><br><br>




			<label for="">5th Product Name :</label>
			<input name="5thpname" type="text" placeholder="Product Name"><br><br>
			<label for="">5th Product Price </label>
			<input name="5thprice" type="number" placeholder="Product Price "><br><br>







			<label for="">Vate Rate % :</label>
			<input name="vateRate" type="text" placeholder="Vate Rate %"><br><br>
			
<!-- 			           <?php echo "<tr><td><a href=Bill.php?id=$Testid>Make Bill</a></td></tr>";
			             ?> -->
			<input type="submit" value="Submit">
		</form>
	</div>

			<br>
			<br>
			<br>
			<br>


            <?php include_once("Footer.php");?>
		</div>
	</div>
</body>
</html>
