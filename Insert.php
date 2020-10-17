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
		<lebal><h2>Customer Entry </h2></lebal>
		<form action="CustomerEntry.php" method="POST">
			<label for="">Customer Name :</label>
			<input name="name" type="text" placeholder="Name"><br><br>
			<label for="">Customer Address :</label>
			<input name="addresss" type="text" placeholder="Address"><br><br>
			<label for="">Customer Contact :</label>
			<input name="contactt" type="text" placeholder="Contact"><br><br>
			<label for="">Customer NID :</label>
			<input name="customernid" type="text" placeholder="Customer NID"><br><br>
			

			</select><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>


            <?php include_once("Footer.php");?>
		</div>
	</div>
</body>
</html>
