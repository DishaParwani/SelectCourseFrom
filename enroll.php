<?php
session_start();
$con = mysqli_connect("localhost","root","","dbslab") or die(mysqli_error($con));
?>
<!DOCTYPE HTML>
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
        if(isset($_SESSION['emailid']))
        {
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
        <?php 
        $coursename = $_SESSION['coursedata'];
        $query = "select * from dbslab.courses where course_id = $coursename ";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
    <center>
        <div class="course_header">
        <p>Course Name : <?php echo $row["cname"] ?></p>
        <p>Price : <?php echo $row["price"] ?></p>
        </div>
    </center><br><br>
    <?php }} ?>
    
    
    <div class="enroll_form">
        <center>
            <h3><strong>Course Options</strong></h3><br><br>
        <form class='form-group formwidth' method="post" action="enroll-script">
            <select name="location" style="width: 500px; height: 30px;">
                <option value="Select a Location">--Select a Location--</option>
                <option value="Manipal">Manipal</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Bhopal">Bhopal</option>
            </select>
            <br><br><br>
            <button class="btn btn-primary">Submit</button>
        </form>
        </center>
    </div>
         <!--   <?php
        include 'includes/footer.php';
        }
        else
        {
            header('Location: login.php');
        }
        ?> -->
    </body>
</html>