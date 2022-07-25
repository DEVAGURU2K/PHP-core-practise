<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN PAGE</title>

</head>
<body>
  <div class="container">
    <h2>LOGIN FORM</h2>
    <form action = "login.php" method="post">
        <div class="form-group">
           <input type="text" class=" form-control" placeholder="Enter the username" name="username"><br>
        </div>
        <div class="form-group">
           <input type="password" class= "form-control" placeholder="Enter the password" name ="password"><br>
        </div>
        <div>
           <button class="btn btn-primary" name ="click">LOGIN</button>
        </div>

    </form>
  </div>   
</body>
</html>

<?php

include "connection.php";

session_start();
// using fetch query to check the username and password


if(isset($_POST['click'])){
    echo " welcome to login page";
    $user= $_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT username,pwd FROM register WHERE username = '$user' and pwd = '$password' ";
    $fetch_value=mysqli_query($conn,$sql);
    $row = mysqli_num_rows($fetch_value);
    
   if($row == 1){
        echo '<script> alert("username and password  is correct")</script>';
        $rows=mysqli_fetch_assoc($fetch_value);
        $_SESSION['username'] =$rows['username'];
        header("location:dashboard.php");
}
    else
     echo '<script> alert("username and password is incorrect")</script>';
    
 }
mysqli_close($conn);

?>

