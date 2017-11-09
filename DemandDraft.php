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
        include 'includes/header.php';
       ?> 
        
        <div class="container">
            <div class="col-sm-15" style="width: 600px; margin-left: 250px; margin-top: 20px;">
                <div class="jumbotron">
                    <div class="form-group" style="margin-top: -50px;">
                        <h1 style="margin-left: 60px;">
                            NEFT Details
                        </h1>      
                    </div>
                    <hr>
                    <blockquote>
                        <center>    Bank Name: Andra Bank<br>
                                    Branch: Varthur Branch<br>
                                    A/C: Bangalore Rural District Chess Association<br>
                                    A/C No: 249933793247889<br>
                                    IFSC CODE: AND378623<br>
                                    Account Type: Current A/C<br><br>
                                    <a href="index.php"><button type="button" class="btn btn-success">GO HOME</button></a>
                        </center>
                    </blockquote>
               </div>
            </div>
    </div>
        <?php
        include 'includes/footer.php'
        ?>
    </body>
</html>
