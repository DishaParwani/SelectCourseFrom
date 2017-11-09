<?php
session_start();
$_SESSION['coursedata'] = 7; 
header ('Location: enroll.php');
?>
