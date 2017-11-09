<?php
require 'PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;
          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'SelectCourseFrom@gmail.com';          // SMTP username
          $mail->Password = 'selectcourse1'; // SMTP password
          $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 465;                          // TCP port to connect to

          $mail->setFrom('SelectCourseFrom@gmail.com', '@gmail.com');
          $mail->addReplyTo('SelectCourseFrom@gmail.com', '@gmail.com');
          $mail->addAddress('gupta.rishav2608@gmail.com');   // Add a recipient
          $mail->addCC('');
          $mail->addBCC('');

          $mail->isHTML(true);  // Set email format to HTML

          $bodyContent = '<h1>Thanks For Registering </h1>';
          $bodyContent .= '<p>This Email is Sent by <b></b> because you filled a form on his website regarding</p>';

          $mail->Subject = 'Email From me';
          $mail->Body    = $bodyContent;
          

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              echo 'Email has been sent';
          }
?>