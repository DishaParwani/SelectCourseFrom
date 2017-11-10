<?php
session_start();
$em = $_SESSION['check'];
$pss = $_SESSION['pass'];
require 'PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'SelectCourseFrom@gmail.com';          // SMTP username
          $mail->Password = 'selectcourse1'; // SMTP password
          $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to

          $mail->setFrom('SelectCourseFrom@gmail.com', 'SelectCourseFrom Admin');
          $mail->addReplyTo('vaibhavtk97@gmail.com', '@gmail.com');
          $mail->addAddress($em);   // Add a recipient
          $mail->addCC('');
          $mail->addBCC('');

          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h1>Password Recovery Message!</h1>';
          $bodyContent .= '<p>This Email is Sent by because you forgot your password. Your password is : '. $pss. ' </p>';

          $mail->Subject = 'Password Recovery for SelectCourseFrom';
          $mail->Body    = $bodyContent;

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
              header('Location: login.php');
          } else {
              header('Location: login.php');
              echo 'Email has been sent';
          }
?>