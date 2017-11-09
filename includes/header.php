<?php
session_start();
?>
<div class="mainheader">
    <div class="headerelement1">
        <img class="header_img" src="images/logo.jpg">
    </div>
    <div class="headerelement2" style="margin-left: 350px">
        <h1>SELECT COURSE FROM Pvt Ltd</h1>
    </div>
    <?php
    if(!isset($_SESSION['loginname']))
    {
    ?>
    <div class="headerelement3">      
            <a href="login.php"><button class="logsign">Login</button></a>
        <a href="signup.php"><button class="logsign">Signup</button></a>
         </div>
    <?php
    }
    else
    {
    ?>
    <div class="headerelement3" style="color: white">    
        Welcome <?php echo $_SESSION['loginname']; ?>
        <a href="Logout.php"><button class="logsign">Logout</button></a>
         </div>
    <?php
    }
    ?>
</div>

