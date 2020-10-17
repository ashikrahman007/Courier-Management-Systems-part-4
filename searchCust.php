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
             <br>
             <br>
             <br>
             <br>

<style>

table, th, td {
     border: 1px solid black;
	 height:40px;
	 width:900px;
	 text-align:center;
}
</style>
	<div style="margin:auto; align:center; background:#white; color:black; height:auto; width:900px; padding-top:20px; overflow:hidden; clear:both;">

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_mid_term";

// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$res = mysqli_query($conn,"select *from customer");
			$sqlbgroup ="SELECT id FROM customer ";

			$sql = "SELECT *FROM customer";
			$result = mysqli_query($conn, $sql);

			if(isset($_POST["submituser"]))
			{

				if (mysqli_num_rows($result) > 0 )
				{
    // output data of each row
					while($row = mysqli_fetch_assoc($result))
					{
						$sqlid=$row["customerNID"];
						$bid=$_POST["id"];


						if ($sqlid == $bid)
						{
							echo "<h2 style='color:blue;background:pink; text-align:center;'><td> ID : ".$row['custonerName'] ." </h2>";

							echo '<h3 align="center" class="userbox"><table>';
							echo "<tr><th>Customer ID </th> <th>Customer Name</th> <th>Address</th> <th>Contact No</th></tr>";

							echo "<tr><td> " . $row['customerNID'] . "</td>";

							echo "<td> " . $row['custonerName'] . "</td>";

							echo "<td> " . $row['customerAddress'] . "</td>";

							echo "<td> " . $row['customerContact'] . "</td>";




							echo '</table></h3>';
							 echo "<h4 style='color:gray;background:pink; text-align:center;'>Registry Managment</h4>";
						}
						else if (empty($bid))
						{
						echo '<script type="text/javascript">
							window.location = "searchCust.php"
							</script>';
						}
					}


				}
				else
				{
				echo "0 results";
				}

			}

		mysqli_close($conn);

		?>
		<button type="button" onclick="location.href='Searchform.php'">Back</button>

	</div>

 </body>
</html>

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
