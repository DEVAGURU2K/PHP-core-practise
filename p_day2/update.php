
<?php 

// include files
include "connection.php";

  if (isset($_POST['update'])){
    // get value from the index.html files
    $sel_id=$_POST['id'];
    $fname=$_POST['full_name'];
    $lname=$_POST['last_name'];
    $gen=$_POST['gender'];
    $birth=$_POST['birth'];
    $email_id=$_POST['email'];
    $phnumber=$_POST['phno'];
    $password=$_POST['pwd'];
    $confrmpassword=$_POST['confrmpwd'];
    echo $password;
    echo $fname;
    echo $sel_id;
    echo $lname;

    if( $fname == "" || $lname == "" || $gen == ""|| $birth == "" || $email_id == " "
        || $phnumber == "" ||   $password == "" || $confrmpassword == ""){
      echo "please fill all the field";
     }
      else
      {

        // UPDATE `registration` SET `id`='[value-1]',`firstname`='[value-2]',`lastname`='[value-3]',`gender`='[value-4]',`
        // dateofbirth`='[value-5]',
        // `email`='[value-6]',`phonenumber`='[value-7]',`password`='[value-8]',`conformpwd`='[value-9]' WHERE 1
    
        $sql = "UPDATE registration SET firstname = '$fname', lastname = '$lname' , gender = '$gen', 
        dateofbirth = '$birth', email = '$email_id', phonenumber = '$phnumber', password = '$password', conformpwd = '$confrmpassword' WHERE id = '$sel_id'";
         $result = mysqli_query($conn, $sql);
        echo "data updated successfully";
        // header('location:http://localhost/PHP/p_day2/display.php');
      }
      
    }
    mysqli_close($conn);

    ?>