<?php
session_start();
$_SESSION['coursedata'] = 1; 
header ('Location: enroll.php');
?>
