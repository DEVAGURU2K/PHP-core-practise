<?php
$host = "localhost";
$username="root";
$password = "";
$databasename="phplearning";
 
$conn = mysqli_connect($host,$username,$password,$databasename);
if(!$conn) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  

}   

else{
    echo'<script> alert("connected successfully")</script>';
}
?>
