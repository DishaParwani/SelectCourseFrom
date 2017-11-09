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
        <title>Payment</title>
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
        <div class="left" style="background-color: whitesmoke">
            <div class="header-left">
            </div>
            <div class="bar-left">
            </div>
            <div class="developed" style=" background-color:  #48b728"></div>
            <div class="MU" style="background-color:  #62e03e ">
                <p id="top" style="size: 100%; margin-top: 30px; padding-right: 100px">Select Payment Mode</p>
            </div>
            <div class="developed" style=" background-color:  #48b728">
                <div class="content">
                </div>
            </div>
        </div>
        <div class="right" style="background-color: whitesmoke">
            <div class="header-right">
            </div>
            <div class="bar-right">
            </div>
            <div class="login" style="background-color:  #294ca9 ">
                <br>
                <br>
                <h1 style="color:#48b728">SELECT <br> _________________</h1><br><br>
                <form action="paymentTest.php" method="post">
                    <label class="radio-inline"><input type="radio" name="payment" value="ccavenue">CC Avenue</label>
                    <label class="radio-inline"><input type="radio" name="payment" value="dd">NEFT</label>
                    <input type="submit" name="proceed" value="PROCEED"style="background-color: #48b728; height: 40px; width: 200px; margin: 15px"/><br>
                </form>
            </div>
        </div>
       <!-- <?php
            include 'includes/footer.php'
        ?> -->
    </body>
</html>
