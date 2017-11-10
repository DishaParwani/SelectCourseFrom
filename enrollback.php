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
        $emails=$_SESSION['emailid'];
        $conn = mysqli_connect("localhost","root","");   //host,username,password
        mysqli_select_db($conn,"dbslab"); 
        $sql = "CALL Insert_courseenroll('$emails',$coursename)";
        if(mysqli_query($conn, $sql)){
            $flag=1;
    echo "Records inserted successfully";
    } else{
        $flag=0;
    echo "Already registerd for the course!";
    
    }
    if($flag==1){
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
            <form action="payment.php" method="post">
            <?php            if (mysqli_num_rows($result) >= 1) {
            while ($row = mysqli_fetch_array($result)) {?>
            <label class="radio-inline"><input type="radio" name="payment" value="ccavenue">Professor <?php echo $row['name']?></label>
            <?php }} ?>
            <br><br><br>
            <button class="btn btn-primary">Submit</button>
        </form>
        </center>
    </div>
    <?php
    }
    ?>
         <!--   <?php
        include 'includes/footer.php'
        ?> -->
    </body>
</html>