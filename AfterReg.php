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
        <title>Registration Successful!</title>
    </head>
    <body>
        <?php
        include 'includes/header.php'
        ?>
        <div class="left" style="background-color: white">
            <div class="header-left">
            </div>
            <div class="bar-left">
            </div>
            <!--<div class="developed"></div>-->
            <div class="developed" style="height: 390px; background-color:  #48b728  ">
                <br>
                <br>
                <h3 style="color:#25303A;text-align: center">You have successfully registered for the course. To register for another course click the button below <br> _________________</h3><br><br>
                <form action="courses.php" method="post" style="float: right">
                    <input type="submit" name="proceed" value="COURSE SELECTION" style="background-color:  #294ca9;color: white; height: 40px; width: 200px;margin-right: 90px;margin-top: 15px"/><br>
                </form>
                </div>
        </div>
        <div class="right" style="background-color: white">
            <div class="header-right">
            </div>
            <div class="bar-right">
            </div>
            <div class="login" style="background-color:  #294ca9 ">
                <br>
                <br>
                <h3>Book your desired Hostel for a better convenience. To book a room click the button below <br><br> _________________</h3><br><br>
                <form action="AfterRegTest.php" method="post">
                    
                    <input type="submit" name="proceed" value="HOSTEL BOOKING"style="background-color: #48b728 ; height: 40px; width: 200px; margin: 15px"/><br>
                </form>
            </div>
        </div>
        <?php
            include 'includes/footer.php'
        ?>
    </body>
</html>
