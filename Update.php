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

$result = mysqli_query($conn,"SELECT * FROM customer WHERE customerNID='$id'");
$test = mysqli_fetch_array($result);
if (!$result)
            {
            die("Error: Data not found..");
            }
                        $carid=$test['customerNID'] ;
                        $carname=$test['custonerName'] ;
                        $carModel= $test['customerAddress'];
                        $roadddd= $test['customerContact'];
                        $carID= $test['car_id'];

if(isset($_POST['save']))
{
      $id_save = $_POST['id'];
      $name_save = $_POST['name'];
      $model_save = $_POST['model'];
      $road_save = $_POST['road'];
      $car_save = $_POST['car'];

      $conn =new mysqli('localhost', 'root', '', 'db_mid_term');

      mysqli_query($conn,"UPDATE customer SET customerNID='$id_save', custonerName ='$name_save',customerAddress ='$model_save',customerContact='$road_save',car_id='$car_save' WHERE customerNID = '$id'")
                        or die(mysqli_error());
      echo "Saved!";

      header("Location: Edit.php");
}
mysqli_close($conn);
?>

<title>OVERVIEW</title>

<div class="UpdateForm">
<form method="post">
<table>
      <tr>
            <th>Customer NID:</th>
            <td><input type="digits" name="id" value="<?php echo $carid ?>"/></td>
      </tr>
      <tr>
            <th>name:</th>
            <td><input type="text" name="name" value="<?php echo $carname ?>"/></td>
      </tr>
      <tr>
            <th>Address:</th>
            <td><input type="text" name="model" value="<?php echo $carModel ?>"/></td>
      </tr>
      <tr>
            <th>Contact</th>
            <td><input type="digits" name="road" value="<?php echo $roadddd ?>"/></td>
      </tr>
      
      <tr>
      <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
      </tr>
</table>
</form>
</div>
<button id="mybtnnn" type="button" onclick="location.href='http://localhost/FinalProject/Edit.php'">Back</button>


             <br>
             <br>
             <br>

            <?php include_once("Footer.php");?>
		</div>
	</div>
</body>
</html>
