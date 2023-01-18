  <?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require"vendor/autoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPAuth = true; 

      $mail->SMTPSecure = 'tls'; 
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 587;  
      $mail->Username = 'saapaanaa1122@gmail.com';
      $mail->Password = 'wtibcxbkqoltxmrp'; 
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        
        $mail->From="saapaanaa1122@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
$result = "<div class='alert alert-danger alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Please try again, an error occured, contact the admin</div>";            
   return $result; 
        }
        else 
        {
           $result = "<div class='alert alert-success alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please Check Your Email Inbox or Spam folder!</div>";
            return $result;
        }
    }
    
    $to   = $email;
    $from = 'saapaanaa1122@gmail.com';
    $name = 'sapana';
    $subj = 'Reset Password';
    $msg = '
                Hi,
              
         In order to reset your password, please click on the link below:
        <a href="http://localhost:83/OlympicsGames/admin/reset.php?code='.$code.'"> Reset</a>
        or copy and paste the link below in a new tab.
            
        http://localhost:83/OlympicsGames/admin/reset.php?code='.$code.' 

              Kind Regards,
              sapana



    ';
    
    $result=smtpmailer($to,$from, $name ,$subj, $msg);
        
  ///https://github.com/iseenlab/PHPMailer/blob/master/mail.php
    //https://github.com/PHPMailer/PHPMailer/tree/5.2-stable

?>
