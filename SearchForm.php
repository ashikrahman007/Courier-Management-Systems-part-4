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
             <br>	
             <br>	
             <br>	
             <br>	
				<div class="SearchBox">
					
					<form action="search.php" method="POST">
					Product Id:<input id="mybtnn" type="digits" name="id" placeholder="Product ID"><br>
					<input id="mybtnn" type="submit"name="submituser" value="search"><br>
					</form><br><br>
					<form action="searchCust.php" method="POST">
					Customer NId:<input id="mybtnn" type="digits" name="id" placeholder="Customer NID"><br>
					<input id="mybtnn" type="submit"name="submituser" value="search"><br>
					</form><br><br>
					
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