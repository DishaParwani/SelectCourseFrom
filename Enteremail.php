<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php'
        ?>
        
        <div class="container">
            <div class="col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
                <div class="jumbotron">
                    <div class="form-group" style="margin-top: -50px;">
                        <h1 style="margin-left: 100px;">
                            Password Recovery
                        </h1>   
                       
                    </div>
                    <hr>
                    <form class="form-horizontal" style="margin-left: 50px;" method="POST" action="beforeOTP.php">
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                
                                <span class="glyphicon glyphicon-user"></span>
                                
                            </span>
                            <input type="email" class="form-control" name="Email" placeholder="Enter email"  required>                        
                       </div>
                        <br><br>
                        <div class="form-group">
                            <button class="btn btn-primary" style="width: 425px; margin-left: 5px;">Send OTP</button>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>