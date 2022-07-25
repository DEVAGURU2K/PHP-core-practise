<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <button id ="btn2"><a href="http://localhost/PHP/p_day6/home.php">logout</a></button>

<?php
session_start();
echo "<h1>welcome to dashboard page"."<br>".$_SESSION['username']. "</h1>";
?>    
</body>
</html>

