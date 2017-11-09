<?php
session_start();
$_SESSION['coursedata'] = 6; 
header ('Location: enroll.php');
?>