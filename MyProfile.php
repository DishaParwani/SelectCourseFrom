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
    <body style="background-color: white">
        <?php
        include 'includes/header.php';
        if(isset($_SESSION['emailid']))
        {
                $email=$_SESSION['emailid'];
                $con=  mysqli_connect("localhost", "root", "", "dbslab");
                $query="select distinct name, registration.email, courses.course_id, cname from registration, courses, hostel, course_enroll, hostel_enroll where registration.email='$email' and registration.email=course_enroll.email and course_enroll.course_id=courses.course_id and registration.email=hostel_enroll.email and hostel_enroll.block_no=hostel.block_no;";
                $query1="select distinct name, registration.email, hostel.block_no, bname from registration, courses, hostel, course_enroll, hostel_enroll where registration.email='$email' and registration.email=course_enroll.email and course_enroll.course_id=courses.course_id and registration.email=hostel_enroll.email and hostel_enroll.block_no=hostel.block_no;";
                $result=$con->query($query) or exit($con->errno);
                $result1=$con->query($query1) or exit($con->errno);
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
                    <li >
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
                     <li class="active">
                        <a href="MyProfile.php">
                            My Account
                        </a>
                    </li>
                </ul>
                </div>
         </nav>
        <div class="container">
        <div class=" des" style="margin-top: 0px;background-color: #294ca9">
            <table class="table table-hover table-bordered table-responsive" >
                <tbody>
                    <tr class="des">
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Course Id</th>
                        <th>Course Name</th>
                    </tr>
                    <?php
                    
                    while($row=$result->fetch_assoc())
                    {
                    ?>
                    <tr>
                    <td><?php echo $row["name"]?></td>  
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["course_id"]?></td>
                    <td><?php echo $row["cname"]?></td>
                    </tr>
                    <?php
                        }                   
        ?> 
                </tbody>
            </table>
            <br>
            <br><br>
            <table class="table table-hover table-bordered table-responsive" >
                <tbody>
                    <tr class="des">
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Block No.</th>
                        <th>Block Name</th>
                    </tr>
                    <?php
                    
                    while($row1=$result1->fetch_assoc())
                    {
                    ?>
                    <tr>
                    <td><?php echo $row1["name"]?></td>  
                    <td><?php echo $row1["email"]?></td>
                    <td><?php echo $row1["block_no"]?></td>
                    <td><?php echo $row1["bname"]?></td>
                    </tr>
                    <?php
                        }
                        
        }
        else
        {
            header('Location: login.php');
        }                    
        ?> 
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>
