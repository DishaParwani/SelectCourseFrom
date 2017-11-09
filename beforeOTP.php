<?php 
session_start();
$con = mysqli_connect("localhost","root","","dbslab") or die(mysqli_error($con));

$email = $_POST['Email'];

$query = "select dob from dbslab.registration where Email = '$email' ";
$result = mysqli_query($con, $query)or die($mysqli_error($con));

if (mysqli_num_rows($result) >= 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION['pass'] = $row['dob'];
    $_SESSION['check'] = $email;
    
    header('Location: OTP.php');
}
 else {
    header('Location: signup.php');
}
?>