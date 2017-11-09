<?php
$con = mysqli_connect("localhost","root","","dbslab") or die(mysqli_error($con));
session_start();
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
    
    <?php
   $loc = $_SESSION['location'];
   $query = "select * from dbslab.faculty where location = '$loc' ";
   $result = mysqli_query($con, $query)or die($mysqli_error($con));
    ?>

    <div class="enroll_form">
        <center>
            <h3><strong>Course Options</strong></h3><br><br>
            <form class='form-group formwidth' method="post" action="payment.php">
            <?php            if (mysqli_num_rows($result) >= 1) {
            while ($row = mysqli_fetch_array($result)) {?>
            <input type="radio"> Professor <?php echo $row['name']?><br>
            <?php }} ?>
            <br><br><br>
            <button class="btn btn-primary">Submit</button>
        </form>
        </center>
    </div>
         <!--   <?php
        include 'includes/footer.php'
        ?> -->
    </body>
</html>