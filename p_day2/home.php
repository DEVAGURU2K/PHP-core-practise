<?php
// include the connection files
include "connection.php";



  
 // insert the data into the database .
 if (isset($_POST['submit'])){
  // get value from the index.html files
  $fname=$_POST['full_name'];
  $lname=$_POST['last_name'];
  $gen=$_POST['gender'];
  $birth=$_POST['birth'];
  $email_id=$_POST['email'];
  $phnumber=$_POST['phno'];
  $password=$_POST['pwd'];
  $confrmpassword=$_POST['confrmpwd'];

  // if(empty($fname) && empty($lname) && empty($gen) && empty ($birth) && empty ($email) 
  //            &&empty ($phnumber) && empty ($password) && empty ($confrmpassword)){
  //            echo "please fill all field";
  //     }

  // if( $fname == "" &&  $lname == "" && $gen == "" && $birth == "" && $email == "" && $phnumber == "" && $password == "" && $confrmpassword == ""){
  //   echo "please fill all the field";
  //  }
  if( $fname == "" || $lname == "" || $gen == ""|| $birth == "" || $email_id == " "
      || $phnumber == "" ||   $password == "" || $confrmpassword == ""){
    echo "please fill all the field";
   }
    else
    {
      
      $sql = "INSERT INTO registration (firstname, lastname, gender,dateofbirth,email,phonenumber,password,conformpwd)
      VALUES ('$fname','$lname','$gen','$birth','$email_id','$phnumber','$password','$confrmpassword')";
      global $result;
      $result = mysqli_query($conn, $sql);
      echo"data inserted successfully";
      header('location:http://localhost/PHP/p_day2/display.php');

    }
   
    
 } 
// else{
//   die("data is not inserted") ;
// }

//close the database connection

mysqli_close($conn);

?>