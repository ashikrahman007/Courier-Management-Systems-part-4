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
<?php
$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM car WHERE car_id='$id'");
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
                        // $contact=$test['contact'] ;

if(isset($_POST['save']))
{
      $id_save = $_POST['id'];
      $name_save = $_POST['name'];
      $model_save = $_POST['model'];
      $road_save = $_POST['road'];
      $Rate_save=$_POST['Rate'];
      $Fine_save=$_POST['Fine'];

      $conn =new mysqli('localhost', 'root', '', 'db_mid_term');

      mysqli_query($conn,"UPDATE car SET car_id='$id_save', car_Name ='$name_save',car_Model ='$model_save',permittedRoad='$road_save',rent_Rate='$Rate_save',late_Fine='$Fine_save' WHERE car_id = '$id'")
                        or die(mysqli_error());
      echo "Saved!";

      header("Location: EditProduct.php");
}
mysqli_close($conn);
?>

<title>OVERVIEW</title>

<div class="UpdateForm">
<form method="post">
<table>
      <tr>
            <th> Product Id:</th>
            <td><input type="digits" name="id" value="<?php echo $carid ?>"/></td>
      </tr>
      <tr>
            <th>Product Name:</th>
            <td><input type="text" name="name" value="<?php echo $carname ?>"/></td>
      </tr>
      <tr>
            <th>Weight:</th>
            <td><input type="text" name="model" value="<?php echo $carModel ?>"/></td>
      </tr>
      <tr>
            <th>Type</th>
            <td><input type="digits" name="road" value="<?php echo $roadddd ?>"/></td>
      </tr>
      <tr>
            <th>Price</th>
            <td><input type="digits" name="Rate" value="<?php echo $rentRate ?>"/></td>
      </tr>
      <tr>
            <th>Date</th>
            <td><input type="digits" name="Fine" value="<?php echo $lateFine ?>"/></td>
      </tr>
      <tr>
      <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
      </tr>
</table>
</form>
<input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print Details!" />
</div>
<button id="mybtnnn" type="button" onclick="location.href='http://localhost/FinalProject/EditCar.php'">Back</button>



             <br>
             <br>
             <br>

            <?php include_once("Footer.php");?>
		</div>
	</div>
</body>
</html>
