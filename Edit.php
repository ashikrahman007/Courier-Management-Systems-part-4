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


<style>
table, th, td {
     border: 1px solid black;
   text-align:center;
      color: #222;
      background-color: rgba(240, 240, 240, 1);
}
</style>

<h2 >Customer Details</h2>
<style>
    h2{
        text-align: center;
    }
</style>
<?php

// Create connection
$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "select * FROM Customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Customer Name</th><th>Customer Address</th><th> Customer Contact</th><th>Customer NID</th><th>Delete</th><th>Update Information</th><th>Report</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["custonerName"]. "</td><td>" . $row["customerAddress"]. " </td><td>" . $row["customerContact"].  "</td><td>" . $row["customerNID"]. "</td><td><a href =Delete.php?id=".$row["customerNID"].">Delete</a></td><td><a href=update.php?id=".$row["customerNID"].">Update</a></td><td><a href=pdf.php?id=".$row["customerNID"].">pdf</a></td></tr>";

     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?><br><br>
<div style="text-align: center;">
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
             <br>
             <br>

            <?php include_once("Footer.php");?>
			<html>


<p></p>

<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
		</div>
	</div>
</body>
</html>
