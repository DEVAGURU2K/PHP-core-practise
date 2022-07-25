<?php
include "connection.php";


if (isset ($_POST['submit'])){
    echo "register button is clicked";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conformpassword=$_POST['conformpassword'];
    if(empty($username) ){
      echo '<script> alert("please fill username field")</script>';
}
else if (empty($email)){
    echo '<script> alert("please fill email field")</script>';
}
else if(empty($password)){
    echo '<script> alert("please fill password field")</script>';
}
else if(!(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) ){
    echo '<script> alert("password not strong")</script>';
}
else if(empty($conformpassword)){
    echo '<script> alert("please fill conform password field")</script>';
}
else if(!(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $conformpassword)) ){
    echo '<script> alert("conform password not strong")</script>';
}
else if($password != $conformpassword){
    echo '<script> alert("password  and conform password is not match")</script>';
    $sql="INSERT INTO register (id,username,email, pwd, conformpassword) VALUES('','$username','$email','$password','$conformpassword')";
    $exe= mysqli_query($conn,$sql);

}
}
if($exe === TRUE){
       echo '<script> alert("inserted successfully")</script>';
    }
    else{
        echo'<script> alert("record is not inserted successfully")</script>';
    }
    mysqli_close($conn);


?>