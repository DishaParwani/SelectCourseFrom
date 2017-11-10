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
                    <li class="active">
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
        <div id="slider">
            <ul class="slides">
                <li class="slide"><img src="images/slide1.jpg"</li>
                <li class="slide"><img src="images/slide2.jpg"</li>
                <li class="slide"><img src="images/slide3.jpg"</li>
                <li class="slide"><img src="images/slide4.jpg"</li>
                <li class="slide"><img src="images/slide5.jpg"</li>
                <li class="slide"><img src="images/slide1.jpg"</li>
            </ul>
        </div>

        <h2>About Us</h2>
        <p>SCF is the largest training company in India with over 20 years of experience in the field of education. SCF has a dedicated team of 3 team members which provide the quality trainings across the country. SCF conducts trainings for students from best of the Institutions of the country . Over 25,000 students get trained by us every year. 
We provide Courses for Engineering and Non Engineering Stream like Computer Science, Information Technology, Mechanical, Civil, M.Sc. I.T , B.Sc.IT etc. and Programs like Summer Training , Winter Training, Project Training, College Training to Suit students round the year requirements. Android,AutoCAD 2D and 3D ,Embedded and Robotics, Java, .NET Framework are few the Courses available with us.</p>

<h2>More Information</h2>
<p>To our students, we impart value-based career education, abundant resources, and individual attention. To the parents, we have a responsibility to nurture ethical and responsible career leadership in the children. To the society, we provide a lifelong connection to ethics and excellence in global leaders.
</p>
<br><br>

       <!-- <?php
        include 'includes/footer.php'
        ?> -->
    </body>
</html>
