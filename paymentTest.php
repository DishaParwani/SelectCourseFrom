<?php
$a=$_POST['payment'];
if($a=='ccavenue')
    header('Location: CCAvenue.php');
else if($a=='dd')
    header('Location: DemandDraft.php');
?>