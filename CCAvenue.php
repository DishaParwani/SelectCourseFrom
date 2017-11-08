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
        <title>Payment</title>
    </head>
    <body>
       <?php
        include 'includes/header.php';
       ?> 
        
        <div class="container">
            <div class="col-sm-15" style="width: 600px; margin-left: 250px; margin-top: 50px;">
                <div class="jumbotron">
                    <div class="form-group" style="margin-top: -50px;">
                        <h1 style="margin-left: 50px;">
                            Enter Details
                        </h1>   
                       
                    </div>
                    <hr>
                    <form class="form-horizontal" style="margin-left: 50px;" method="POST" action="hostelBook.php">
                        <div class="form-group input-group">
                            <label class="control-label col-sm-6" for="name" style="margin-left: -18px">Card Number:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="Name" placeholder="Enter your card number" style="width: 200px" required>
                              
                            </div>
                       </div>
                        <div class="form-group input-group">                            
                            <label class="control-label col-sm-6" for="email">Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="Email" placeholder="Name on the card" style="width: 200px" required>
                            </div>
                         </div>
                        <div class="form-group input-group">                            
                            <label class="control-label col-sm-6" for="phone">Expiry:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="Phone" placeholder="MM/YY" style="width: 200px" required>
                            </div>
                         </div>
                        
                        <div class="form-group input-group">                            
                            <label class="control-label col-md-6" for="dob" style="margin-left: -4px">CVV:</label>
                            <div class="col-md-6">
                                <input style="margin-left: 10px; width: 200px" type="text" class="form-control" name="dob" placeholder="CVV"  required>
                            </div>
                         </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="submit" style="width: 425px; margin-left: 5px;">MAKE PAYMENT</button>
                         </div>
                    </form>
                    
               </div>
            </div>
    </div>
        <?php
        include 'includes/footer.php'
        ?>
    </body>
</html>
