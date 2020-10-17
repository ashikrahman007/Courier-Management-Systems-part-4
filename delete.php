<?php
$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
$sql="DELETE FROM Customer WHERE customerNID='$_GET[id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=Edit.php");
else 
     echo"not deleted";
?>