<?php
session_start();
$_SESSION['coursedata'] = 5; 
header ('Location: enroll.php');
?>