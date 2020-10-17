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
	<div class="Cus_box">
		<lebal><h2>Product</h2></lebal>
		<form action="ProductEntry.php" method="POST">
			<label for="">Product ID :</label>
			<input name="carID" type="text" placeholder="Product ID"><br><br>

			<label for="">Product Name :</label>
			<input name="carname" type="text" placeholder="Product Name"><br><br>
			<label for="">Product Weight :</label>
			<input name="carmodel" type="text" placeholder="Product Weight"><br><br>
			<label for="">Product  Type :</label>
			<input name="road" type="text" placeholder="Product Type"><br><br>
			<label for="">Product Price:</label>
			<input name="rent" type="text" placeholder="Product Prise"><br><br>
			<label for="">Date:</label>
			<input name="fine" type="text" placeholder="Date"><br><br>



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
