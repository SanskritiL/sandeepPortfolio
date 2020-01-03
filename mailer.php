
<?php
    
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    
    //$mail->SMTPDebug = 3;
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->Port = 587; 
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'phpmailer.onlysndp@gmail.com';                  // SMTP username
    $mail->Password =  'pHp@Ma!ler(1993)';                             // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                    
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('sandiip.khanal@gmail.com');     // Add a recipient
   

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Interested in Resume';
    $mail->Body    = 'Message: '.$_POST['message'].'  Email: '.$_POST['email'].'Name: '.$_POST['name'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else {
        echo 'Thank you for reaching out. We will contact soon';
   }
  

?>
