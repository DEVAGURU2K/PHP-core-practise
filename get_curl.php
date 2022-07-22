<?php
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

// $url = "http://dummy.restapiexample.com/api/v1/employees";
$url="https://jsonplaceholder.typicode.com/users";

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = json_decode($curl_data);



// Print all data if needed
// print_r($response_data);
// die();

// All user data exists in 'data' object
$user_data = $response_data;

// Extract only first 5 user data (or 5 array elements)
// $user_data = array_slice($user_data, 0,20);
 
// table declartion

// Traverse array and print employee data
// $name = $coin["name"];
// $profit = $coin["profit"];

foreach ($user_data as $user) {
    
       $name=$user->username;
       $email=$user->email;
       echo "name:".$name . "<br>";
       echo "email:".$email."<br>";

//        echo "<table table border = 2>
//  <th>name</th>
//  <th>email</th>
//  <tr> 
//  <td>$user</td>
//  <td>$email</td>
//  </tr>
// </table>";

        
    
}

?>