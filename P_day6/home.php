<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="home.php" method="post"></form>
    <button><a href="http://localhost/PHP/p_day6/login.php">Login</a></button>
</body>
</html>
<?php
if(isset($_SESSION['username'])){
    session_destroy();

}   

?>