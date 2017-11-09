<?php
session_start();
$_SESSION['coursedata'] = 4; 
header ('Location: enroll.php');
?>