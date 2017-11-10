<?php
session_start();
$hn = $_SESSION['hostelname'];
        $emails=$_SESSION['emailid'];
        $conn = mysqli_connect("localhost","root","");   //host,username,password
        mysqli_select_db($conn,"dbslab");
        $sql = "CALL Insert_hostelenroll_afterpay('$emails',$hn)";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";  
    header('Location: index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>