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
    <body style="background-color: #CF4747">
        <?php
        include 'includes/header.php';
            if(isset($_POST['gender']))
                $a=$_POST['gender'];
            //$con=  mysqli_connect("localhost", "root", "", "dbslab");
            //$query="select * from hostel where htype=$a";
            //$result=$con->query($query) or exit($con->errno);
        ?>
        <div class="container">
        <div class="scrollable des" style="margin-top: 50px;">
            <table class="table table-hover table-bordered table-responsive" >
                <tbody>
                    <tr class="des">
                        <th>Block Number</th>
                        <th>Block Name</th>
                        <th>Cost Per Month</th>
                        <th>Operation</th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>
