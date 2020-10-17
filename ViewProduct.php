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
.table{
/*    padding:10px;
    margin:10px;*/

}

table, th, td {
     border: 1px solid black;
       width:900px;
       text-align:center;
      
}
p{
      font-family:helvatica;
      font-size:50px;
}
</style>


<div class="table"><div id="printableArea">
<h2 align="center"> Product Details </h2>
<table border="1" align="center">
      
                  <?php
                  $conn =new mysqli('localhost', 'root', '', 'db_mid_term');
                  echo "<table ><tr><th>Product ID</th><th>Product Name</th><th>Product Weight(KG)</th><th>Type</th><th>Prise(Per KG)</th><th>Date</th></tr>";
                  
                        
                  $result=mysqli_query($conn,"SELECT * FROM car");
                  
                  while($test= mysqli_fetch_array($result))
                  {
   
                        echo"<td><font color='black'>" .$test['car_id']."</font></td>";
                        echo"<td><font color='black'>" .$test['car_Name']."</font></td>";
                        echo"<td><font color='black'>" .$test['car_Model']. "</font></td>";
                        echo"<td><font color='black'>" .$test['permittedRoad']. "</font></td>";
                        echo"<td><font color='black'>" .$test['rent_Rate']. "</font></td>";
                        echo"<td><font color='black'>" .$test['late_Fine']."</font></td>";
                        echo "</tr>";
                  }
                  mysqli_close($conn);
                  ?>
</table></div>

<input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print Details!" />




<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>

    


             
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