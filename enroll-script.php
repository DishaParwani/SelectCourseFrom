<?php
session_start();

$location = $_POST['location'];
$_SESSION['location'] = $location;

header ('Location: enrollback.php');
?>