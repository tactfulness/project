<?php
require 'phpmailer/PHPMailerAutoload.php';
                    $email = "venkatsubramanian707@gmail.com";                    
                    $password = "Priyavenkat@#$";
				 $to_id = $_SESSION['email'];
				 $message="<html>
				 <h3 style=color:green;>You have registered with SIMS </h3></html>";
                    $subject = "Thank You for Regsitration";
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
                       echo '<script>alert("Test Mail sent!");</script>';
					}