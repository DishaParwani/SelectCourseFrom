<?php
session_start();
$_SESSION['coursedata'] = 8; 
header ('Location: enroll.php');
?>