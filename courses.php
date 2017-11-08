<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Course From</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet"  type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.s"></script>
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
                    <li class="active">
                        <a href="courses.php">
                            Courses
                        </a>
                    </li>
                    <li>
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
                        <a href="ContactUs.php">
                            Contact Us
                        </a>
                    </li>
                </ul>
                </div>
         </nav>
        <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <img src="images/autocad.jpg" alt="Camera1" />
                        <div class="caption">
                            <h3>AUTOCAD</h3>
                            <p>AutoCAD is a commercial software application for 2D and 3D computer-aided design (CAD) and drafting — available since 1982 as a desktop application and since 2010 as a mobile, web- and cloud-based app marketed as AutoCAD 360.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 1; ?>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <img src="images/asp.jpg" alt="Camera1" />
                        <div class="caption">
                            <h3>ASP.NET WITH MVC AND ENTITY FRAMEWORK</h3>
                            <p>ASP.NET Web Site Administration Tool is a utility provided along with Microsoft Visual Studio which assists in the configuration and administration of a website created using Microsoft Visual Studio 2005 and later versions.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 2; ?>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <img src="images/LINUX.jpg" alt="Camera1" />
                        <div class="caption">
                            <h3>LINUX ADMINISTRATION WITH SCRIPTING</h3>
                            <p>Linux was originally developed as a free operating system for personal computers based on the Intel x86 architecture, but has since been ported to more computer hardware platforms than any other operating system. Because of the dominance of Android on smartphones, Linux has the largest installed base of all general-purpose operating systems.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 3; ?>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="thumbnail">
                        <img src="images/Cplusplus.png" alt="Camera1" />
                        <div class="caption">
                            <h3>C++ PROGRAMMING LANGUAGE</h3>
                            <p>The C++ language has two main components: a direct mapping of hardware features provided primarily by the C subset, and zero-overhead abstractions based on those mappings. Stroustrup describes C++ as "a light-weight abstraction programming language [designed] for building and using efficient and elegant abstractions"; and "offering both hardware access and abstraction is the basis of C++.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 4; ?>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="thumbnail">
                        <img src="images/phpwp.png" alt="Camera1" />
                        <div class="caption">
                            <h3>PHP WITH WORDPRESS</h3>
                            <p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive backronym PHP: Hypertext Preprocessor.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 5; ?>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="thumbnail">
                <img src="images/corejava.jpg" alt="Camera1" />
                        <div class="caption">
                            <h3>CORE JAVA</h3>
                            <p>Java is everywhere: on all platforms and devices and in all countries around the world. It enables developers to make programs work just about anywhere. And it inspired the evolution of an incredible technology community. The brilliance of Java is the platform independency.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 6; ?>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="thumbnail">
                <img src="images/android.png" alt="Camera1" />
                        <div class="caption">
                            <h3>ANDROID</h3>
                            <p>Android training actually helps the learners to learn and work with expert people who have already flourished a lot and is very skillful in this field. Learning from those professionals who have created different types of games and apps enhances the learner’s will to create such apps. It is very much inspiring to work with them. Another essential benefit of learning Android courses is that getting a handsome financial boost.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 7; ?>
                    </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="thumbnail">
                <img src="images/python.jpg" alt="Camera1" />
                        <div class="caption">
                            <h3>PYTHON</h3>
                            <p>It’s no secret that Python is one of the most commonly used programming languages. For the past five years, Python has held the number one position as the “most popular coding language.” Python is a favorite among many developers for its strong emphasis on readability and efficiency, especially when compared to other languages like Java, PHP, or C++.</p>
                            <p><a href="enroll.php" role="button" class="btn btn-primary btn-block">Join Now!</a></p>
                            <?php $_SESSION['coursedata'] = 8; ?>
                        </div>
                    </div>
        </div>
        </body>
</html>