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

$result = mysqli_query($conn,"SELECT * FROM car WHERE car_id= '$id'");
$test = mysqli_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}
                        $carid=$test['car_id'] ;
                        $carName=$test['car_Name'] ;
                        $carNodel= $test['car_Model'] ;
                        $roadd=$test['permittedRoad'] ;
                        $rentRate=$test['rent_Rate'] ;
                        $fineRate=$test['late_Fine'] ;


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
<h2 style="color:black;background:blue; text-align:center;"><td> Product Data</h2>
<div style="overflow-x:auto;">
<table border="2" align="center" style="margin:30px;">
<tr><th>Product ID</th><th>Product Name</th><th>Product Weight(KG)</th><th>Product Type</th><th>Prise</th><th>Date</th></tr>
	<tr>

		<td><?php echo $carid ?></td>
		<td><?php echo $carName ?></td>
		 <td><?php echo $carNodel ?></td>
		<td><?php echo $roadd ?></td>
		<td><?php echo $rentRate ?></td>
		<td><?php echo $fineRate ?></td>


	</tr>

</table>
</div>

<br><h3 align="center">Print the Data page </h3><center><input type="button" onclick="printDiv('printableArea')" value="Print Data!" /></center>
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
