<?php
session_start();
$_SESSION['coursedata'] = 2; 
header ('Location: enroll.php');
?>