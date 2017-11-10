<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
      <?php
        include 'includes/header.php';
       ?> 
        
        <div class="container">
            <div class="col-sm-15" style="width: 600px; margin-left: 250px; margin-top: 50px;">
                <div class="jumbotron">
                    <div class="form-group" style="margin-top: -50px;">
                        <h1 style="margin-left: 150px;">
                            Sign Up
                        </h1>   
                       
                    </div>
                    <hr>
                    <form class="form-horizontal" style="margin-left: 50px;" method="POST" action="process_signup.php">
                        <div class="form-group input-group">
                            <label class="control-label col-sm-4" for="name">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="Name" placeholder="Enter Name"  required>
                              
                            </div>
                       </div>
                        <div class="form-group input-group">                            
                            <label class="control-label col-sm-4" for="email">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="Email" placeholder="Enter Email" required>
                            </div>
                         </div>
                        <div class="form-group input-group">                            
                            <label class="control-label col-sm-4" for="phone">Phone:</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" name="Phone" placeholder="Enter Mobile number" required>
                            </div>
                         </div>
                        
                        <div class="form-group input-group">                            
                            <label class="control-label col-sm-4" for="gender">Sex:</label>
                            <div style="margin-top: 1px" class="col-sm-8" id="radio">
                                <input type="radio" name="gender" id="male" value="M" />
                                <label for="male">Male
                                </label>
                                <input type="radio" name="gender" id="female" value="F"/>
                                <label for="female">Female
                                </label>  
                                <input style="margin-left:54.9px" type="radio" name="gender" id="Others" value="O" />
                                <label for="others">Others
                                </label>
                            </div>
                        </div>
                        <div class="form-group input-group">                            
                            <label class="control-label col-md-4" for="dob">Birth date:</label>
                            <div class="col-md-8">
                                <input style="margin-left: 10px" type="date" class="form-control" name="dob" placeholder="yyyy-mm-dd" required>
                            </div>
                         </div>
                        <div class="form-group input-group">                            
                            <label class="control-label col-sm-4" for="course">Course:</label>
                            <div class="col-sm-8">
                                <input  style="margin-left: 10px"type="text" class="form-control" name="course" placeholder="please enterexact course name" required>
                            </div>
                         </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary" name="submit" style="width: 425px; margin-left: 5px;">Sign Up</button>                         
                         </div>
                    </form>
                    
               </div>
            </div>
    </div>
     <!--   <?php
        include 'includes/footer.php'
        ?> -->
    </body>
</html>
