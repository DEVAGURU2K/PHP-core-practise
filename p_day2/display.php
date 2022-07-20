<?php
// file include
 include "connection.php";



// to display the record into the table format 
// $sql2 = "SELECT * FROM registration";
$fetch = mysqli_query($conn,"SELECT * FROM registration");

if (mysqli_num_rows($fetch) > 0) 
{
echo "<table border='1'>
<tr>
<th>S.NO</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>Date of birth</th>
<th>Email</th>
<th>Phonenumber</th>
<th>password</th>
<th>conform password</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_assoc($fetch))
{
echo "
<tr>
 <td>$row[id]</td>
 <td>$row[firstname] </td>
 <td>$row[lastname] </td>
 <td>$row[gender] </td>
 <td>$row[dateofbirth] </td>
 <td>$row[email] </td>
 <td>$row[phonenumber] </td>
 <td>$row[password] </td>
 <td>$row[conformpwd] </td>
 <td><a href='edit.php?val=$row[id]'>EDIT </a> &nbsp;  
     <a  href = 'delete.php?val=$row[id]' >DELETE </a> 
</td>

</tr>";

}
echo "</table>";
}
else{
    echo "no record founded";
}
//close the database connection

mysqli_close($conn);

?>
  