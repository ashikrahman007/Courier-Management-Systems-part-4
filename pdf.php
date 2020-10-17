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


<?php
// require("db.php");
$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM Customer WHERE customerNID= '$id'");
$test = mysqli_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}
                        $id=$test['customerNID'] ;
                        $name= $test['custonerName'] ;
                        $department=$test['customerAddress'] ;
                        $address=$test['customerContact'] ;
                        $carID=$test['car_id'] ;


mysqli_close($conn);
?>

<style>
table, th, td {
     border: 1px solid green;
	 height:40px;
	 width:850px;
	 text-align:center;
}
th {
    background-color:#FC3;
    color: black;
}
</style>


<div id="printableArea">
<h2 style="color:black;background:blue; text-align:center;"><td>Customer</h2>
<div style="overflow-x:auto;">
<table border="2" align="center" style="margin:30px;">
<tr><th>Customer NID</th><th>Customer Name</th><th>Customer Address</th><th>Customer contact</th></tr>
	<tr>

		<td><?php echo $id ?></td>
		<td><?php echo $name ?></td>
		 <td><?php echo $department ?></td>
		<td><?php echo $address ?></td>
		


	</tr>


</table>
  <?php include_once("Footer.php");?>
</div>

<br><h3 align="center"></h3><center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>
<br>
<br>
<br>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
            <?php include_once("Footer.php");?>
		</div>
	</div>
</body>
</html>
