<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Course From</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet"  type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <?php
        include ('includes/header.php');
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
                    <li>
                        <a href="Hostel.php">
                            Hostel
                        </a>
                    </li>
                    <li class="active">
                        <a href="Gallery.php">
                            Gallery
                        </a>
                    </li>
                                        <li>
                        <a href="contact.html">
                            Contact Us
                        </a>
                    </li>
                </ul>
                </div>
         </nav>
    <center>
        <h3>Some photos of our Student's Achievements! <br> __________________________________________</h3>
        <img src="images/reward1.jpg" class="allim img-circle">
    <img src="images/reward2.jpg" class="allim img-circle">
    <img src="images/reward3.jpg" class="allim img-circle">
    <br>
    <img src="images/reward4.jpg" class="allim img-circle">
    <img src="images/reward5.jpg" class="allim img-circle">
    <img src="images/reward6.jpg" class="allim img-circle">
    </center>