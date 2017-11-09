<?php
session_start();
$_SESSION['coursedata'] = 3; 
header ('Location: enroll.php');
?>