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
       echo "<table align='center'><tr><th>name</th><th>Address</th><th>Contact</th><th>NID</th><th>Auto Bill Genetor</th></tr>";
     // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["custonerName"]. "</td><td>" . $row["customerAddress"]. " </td><td>" . $row["customerContact"]. "</td><td>" . $row["customerNID"].  "</td><td><a href=DateInsert.php?id=".$row["customerNID"].">Make Bill</a></td></tr>";

       }
       echo "</table>";
   } else {
       echo "0 results";
   }

   $conn->close();
   ?><br><br>
   <div style="text-align: center;">
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
   <br>

   <?php include_once("Footer.php");?>
</div>
</div>
</body>
</html>
