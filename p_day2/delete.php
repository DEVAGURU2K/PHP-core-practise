<?php 
 include "connection.php";
 
$id=$_GET['val'];
echo "delete id .$id ";
mysqli_query($conn,"DELETE FROM registration WHERE id=$id");


?>