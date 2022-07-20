
<?php
include "connection.php";

$id= $_GET['val'];
echo $id;
$sql2= "select * from registration where id = $id"; 
$result=mysqli_query($conn,$sql2);  



while($row=mysqli_fetch_array($result))
{
    $id =$row['id'];
    $fname= $row['firstname'];
    $lname = $row['lastname'];
    $birth =$row['dateofbirth'];
    $email_id=$row['email'];
    $phno=$row['phonenumber'];
    $password=$row['password'];
    $conformpassword=$row['conformpwd'];
}

 mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Registration Form</title>
</head>
<body>
    <form  id= "myForm" action="update.php" method="post" >
        <div id ="container">
            <h1>Update Form</h1>
            <input type="hidden" name="id" id="id1" placeholder="Enter the First name " value= <?php echo $id ;?> /> <br>  
            <input type="text" name="full_name" id="id1" placeholder="Enter the First name " value= <?php echo $fname ;?> /> <br>
            <input type="text" name="last_name" id="id2" placeholder="Enter the Last name " value= <?php echo $lname ;?> /> <br>
            <input type="radio" name="gender" value="male" id="id3"  checked="checked">male 
            <input type="radio" name="gender" value="female" id="id4" >female<br>
            <input type="date" name="birth" id="id5" placeholder="choose the date of birth " value= <?php echo $birth ;?> /><br>
            <input type="text" name="email" id="id6" placeholder="Enter the email id " value= <?php echo $email_id ;?> /><br>
            <input type="number" name="phno" id="id7" placeholder="Enter the phonenumber "value= <?php echo $phno ;?> /><br>
            <input type="password" name="pwd" id="id8" placeholder="Enter the password " value= <?php echo $password ;?> /><br>
            <input type="checkbox" id ="id9"> show password <br>
            <input type="password" name="confrmpwd" id="id10" placeholder="Enter the conform password  "value= <?php echo $conformpassword ;?> /><br>
            <input type="checkbox" id ="id11"> show password <br>
            <button  name="update" >UPDATE</button>


        </div>
    </form>
     <script>
       function check(){
        alert("Are you want to delete the record");
       }
     </script>   
    
</body>
</html>
