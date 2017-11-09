<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//get values
$Email = $_POST['Email'];
$Password = $_POST['Password'];
//prevent myppsql injections
//$email = stripcslashes($email);
//$password = stripcslashes($password); //removes back slashes

//$email = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password); // does not consider special charaters in sql queries

//connect to databse
$conn = mysqli_connect("localhost","root","");   //host,username,password
mysqli_select_db($conn,"dbslab");

//query the databse for user
$result = $conn->query("select * from registration where email = '$Email' and dob ='$Password'") 
                         or die("Failed to query the database!".mysql_error()); //exits current script
$row=mysqli_fetch_assoc($result);
if($row['email'] == $Email && $row['dob'] == $Password )
    {
    echo "login success!welcome".$row['email'];
    $_SESSION['loginname']=$row['name'];
    header('Location: index.php');
}
else
{
    header('Location: login2.php');
}
            

?>
    </body>
</html>