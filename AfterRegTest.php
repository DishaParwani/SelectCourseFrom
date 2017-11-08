<?php
$a=$_POST['proceed'];
if($a=="COURSE SELECTION"){
    header('Location: AfterReg.php');
}
else if ($a=="HOSTEL BOOKING") {
    header('Location: hostel.php');
}
?>

