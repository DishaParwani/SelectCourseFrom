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
            if(isset($_POST['gender'])){
                $a=$_POST['gender'];
                $con=  mysqli_connect("localhost", "root", "", "dbslab");
                $query="select * from hostel where htype='$a'";
                $result=$con->query($query) or exit($con->errno);
                $flag=1;
            }
            else
                $flag=0;
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
                        <a href="ContactUs.php">
                            Contact Us
                        </a>
                    </li>
                </ul>
                </div>
         </nav>
        <div class="container">
        <div class="scrollable des" style="margin-top: 0px;background-color: #294ca9">
            <table class="table table-hover table-bordered table-responsive" >
                <tbody>
                    <tr class="des">
                        <th>Block Number</th>
                        <th>Block Name</th>
                        <th>Cost Per Month</th>
                        <th>Operation</th>
                    </tr>
                    <?php
                    if($flag==1){
                    while($row=$result->fetch_assoc())
                    {
                    ?>
                    <tr>
                    <td><?php echo $row["block_no"]?></td>  
                    <td><?php echo $row["bname"]?></td>
                    <td><?php echo $row["cost"]?></td>
                    <td><form action="payment_1.php" method="post">
                            <input type="submit" value="Book" style="background-color: #48b728"/>
                            <input type="hidden" name="blnum" value=<?php echo $row["block_no"] ?> />
                            </form></td>
                    </tr>
                    <?php
                        }
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>
