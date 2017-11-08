<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conn = mysqli_connect("localhost","root","");   //host,username,password
mysqli_select_db($conn,"dbslab");   

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$course=$_POST['course'];


$sql = "CALL InsertPerson('$Name','$Email',$Phone,'$gender','$dob','$course')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>