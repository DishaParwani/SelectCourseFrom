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
        <title>Hostel</title>
    </head>
    <body>
        <?php
        if(isset($_SESSION['emailid']))
        {
        include 'includes/header.php';
        ?>
        <nav class="navbar ">
            <div class="container">
                <ul class="nav nav-tabs uppernav">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="courses.php">
                            Courses
                        </a>
                    </li>
                    <li  class="active">
                        <a href="Hostel.php">
                            Hostel
                        </a>
                    </li>
                    <li>
                        <a href="Gallery.php">
                            Gallery
                        </a>
                    </li>
                                        <li>
                        <a href="contact.html">
                            Contact Us
                        </a>
                    </li>
                                        <li>
                        <a href="MyProfile.php">
                            My Account
                        </a>
                    </li>
                </ul>
                </div>
         </nav>
        <div class="left" style="background-color: white;margin-top: -60px">
            <div class="header-left">
            </div>
            <div class="bar-left">
            </div>
            <div class="developed"style="background-color:  #48b728  "></div>
            <div class="MU" style="background-color:  #62e03e ">
                <p id="top" style="size: 100%; margin-top: 40px;padding-right: 50px">SELECT GENDER TO PROCEED</p>
            </div>
            <div class="developed" style="background-color:  #48b728  ">
                <div class="content">
                </div>
            </div>
        </div>
        <div class="right" style="background-color: white;margin-top: -60px">
            <div class="header-right">
            </div>
            <div class="bar-right">
            </div>
            <div class="login" style="background-color:  #294ca9 ">
                <br>
                <br>
                <h1 style="color:#48b728">GENDER <br> _________________</h1><br><br>
                <form action="hostelShow.php" method="post">
                    <input type="submit" name="gender" value="MALE" style="background-color: #48b728; height: 40px; width: 200px; margin: 15px"/><br>
                    <input type="submit" name="gender" value="FEMALE"style="background-color: #48b728; height: 40px; width: 200px; margin: 15px"/><br>
                </form>
            </div>
        </div>
        <!-- <?php
            include 'includes/footer.php';
        }
 else {
            header('Location: login.php');
 }
        ?> -->
    </body>
</html>
