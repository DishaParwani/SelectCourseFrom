<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="style2.css" type="text/css">
        <title>Booking Successful!</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        //echo $_POST['blnum'];
        ?>
        <div class="left">
            <div class="header-left">
            </div>
            <div class="bar-left">
            </div>
            <div class="developed"></div>
            <div class="MU">
                <p id="top" style="color: white;size: 100%; margin-top: 30px">You have successfully completed your Hostel Booking</p>
            </div>
            <div class="developed">
                <div class="content">
                </div>
            </div>
        </div>
        <div class="right">
            <div class="header-right">
            </div>
            <div class="bar-right">
            </div>
            <div class="login">
                <br>
                <br>
                <h1 style="color:#CF4747">PROCEED <br> _________________</h1><br><br>
                <form action="#" method="post">
                    <input type="submit" name="proceed" value="SHOW DETAILS" style="background-color: #CF4747; height: 40px; width: 200px; margin: 15px"/><br>
                </form>
            </div>
        </div>
        <?php
            include 'includes/footer.php'
        ?>
    </body>
</html>
