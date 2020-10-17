<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
	<div class="web">
		<div class="mid">
            <?php include_once("header.php");?>
<!--             <br>
            <br>
            <br>
            <br> -->

			<?php
			$conn =new mysqli('localhost', 'root', '', 'courier_management');
			// $id =9001002;
			// $id =$_REQUEST['id'];
			$id =$_POST['id'];

			$result = mysqli_query($conn,"SELECT * FROM Customer WHERE customerNID='$id'");
			$test = mysqli_fetch_array($result);
			if (!$result)
			            {
			            die("Error: Data not found..");
			            }
			                        $id=$test['customerNID'] ;
			                        $name= $test['custonerName'] ;
			                        $cusAdd=$test['customerAddress'] ;
			                        $cusContact=$test['customerContact'] ;
			                        $cid=$test['car_id'] ;



			$result = mysqli_query($conn,"SELECT * FROM car WHERE car_id='$cid'");
			$test = mysqli_fetch_array($result);
			if (!$result)
			            {
			            die("Error: Data not found..");
			            }
			                        $carid=$test['car_id'] ;
			                        $carname=$test['car_Name'] ;
			                        $carModel= $test['car_Model'];
			                        $roadddd= $test['permittedRoad'];
			                        $rentRate=$test['rent_Rate'];
			                        $lateFine=$test['late_Fine'] ;

			mysqli_close($conn);
			?>
<!--             <br>
            <br>
            <br>
            <br>
            <br> -->
            <br>


			<div class="table">
				<div id="printableArea">
<!-- 					<h2 align="center"> Customer Details </h2>
					<table border="1" align="center"> -->


									<div class="bill_box">
										<div class="client">
											<?php

											 $cusID = $id;
										    $name = $name;
											  $address = $cusAdd;
											  $contact = $cusContact;
											  $carID = $carid;
											  $car = $carname;
											  $model = $carModel;
                        $hour =1;









											  $takingTime =1;
											  $returnTime =1;
											  $lowCost = 00.00;
											  $damage = 00.00;
											  $otherCost = 00.00;






												$p1name = $_POST['1stpname'];
											  $p2name = $_POST['2ndpname'];
											  $p3name = $_POST['3rdpname'];
											  $p4name = $_POST['4thpname'];
											  $p5name = $_POST['5thpname'];



											  $p1s = $_POST['1stprice'];
											  $p2s = $_POST['2ndprice'];
											  $p3s = $_POST['3rdprice'];
											  $p4s = $_POST['4thprice'];
											  $p5s = $_POST['5thprice'];


											  $vateRate = $_POST['vateRate'];
											  $hour =($returnTime - $takingTime);
											  $netRent = $rentRate * $hour;
											  $netFine = $lateFine * $hour;
											  $vat = ($p1s+$p2s+$p3s+$p4s+$p5s)*($vateRate/100);
											  $total = ($p1s+$p2s+$p3s+$p4s+$p5s+$vat);
											?>
											<label for="">Customer Name :</label><?php echo$name ?><br><br>
											<label for="">Customer Address :</label><?php echo$address?><br><br>
											<label for="">Customer Contact :</label><?php echo $contact?><br><br>

											<br>

									</div>
									<div class="bill">
										<table>
											<tr>
												<th>SL</th>
												<th>Product Name</th>
												<th>Taka</th>

											</tr>
											<tr>
												<td>1.</td>
												<td><?php echo $p1name?></td>
												<td><?php echo $p1s?></td>

											</tr>
											<tr>
												<td>2.</td>
												<td><?php echo $p2name?></td>
												<td><?php echo $p2s?></td>
											</tr>
											<tr>
												<td>3.</td>
												<td><?php echo $p3name?></td>
												<td><?php echo $p3s?></td>
											</tr>
											</tr>
											<tr>
												<td>4.</td>
												<td><?php echo $p4name?></td>
												<td><?php echo $p4s?></td>
											</tr>
											</tr>
											<tr>
												<td>5.</td>
												<td><?php echo $p5name?></td>
												<td><?php echo $p5s?></td>
											</tr>
											<tr>
												<td>6.</td>
												<td><?php echo $vateRate?>% vate</td>
												<td><?php echo $vat?></td>
											</tr>
											<tr>
												<td>7.</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>8.</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>9.</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>10.</td>
												<td>Total</td>
												<td>TK-<?php echo $total?></td>
											</tr>
										</table>
									</div>
									<div class="sign">
										<div class="emp_sign">
											    <h4>Employee :</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
										<div class="client_sign">
											    <h4>Customer:</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
									</div>


<!-- 				</table> -->
				</div>

					                    <input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print Details!" />




										<script>
										function printDiv(divName) {
										    var printContents = document.getElementById(divName).innerHTML;
										    var originalContents = document.body.innerHTML;
										    document.body.innerHTML = printContents;
										    window.print();
										    document.body.innerHTML = originalContents;
										}</script>


			</div>
<!-- This is for print portin for our print perpose -->




			 </div>

            <?php include_once("Footer.php");?>
		</div>   <!-- the end of mid -->
	</div>  <!-- end of web -->
</body>
</html>
