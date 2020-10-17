<?php
$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
$sql="DELETE FROM car WHERE car_id='$_GET[id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=EditProduct.php");
else
     echo"not deleted";
?>
