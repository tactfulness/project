<?php
  require 'phpmailer/PHPMailerAutoload.php';
             
                    $email = "";                    
                    $password = "";
                   
 #replace with your mailid and password in this id.php file
				 $to_id = $value3;
				 $message="<html>
				 <h3 style=color:green;>Hello your Otp is '.$otp'</h3></html>";
                    $subject = "Otp mail";

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'Otp mail');

                    $mail->addReplyTo('dontreply@gmail.com', 'auto generated mail');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Message sent!");</script>';
                    ?>