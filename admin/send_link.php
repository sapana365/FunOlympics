<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit_email']) && $_POST['email'])
{
    $email=$_POST['email'];
  
    include('includes/config.php');
  $select="select AdminEmailId,AdminPassword,AdminUserName from tbladmin where AdminEmailId='$email'";
  $row = mysqli_query($con,$select);
  if(mysqli_num_rows($row)==1)
  {while($rows=mysqli_fetch_array($row))
    {
      $Email=md5($rows['AdminEmailId']);
      $pass=md5($rows['AdminPassword']);
    }
    
      
 
    $to = $email;
								$subject = "Sign Up Verification Code";
								$message = "
									<html>
									<head>
									<title>Verification Code</title>
									</head>
									<body>
									
									<p>Email: ".$email."</p>
									<p>Password: ".$_POST['email']."</p>
									<p>Email click the link below to reset your password.</p>
									<h4><a href='http://localhost:83/OlympicsGames/admin/reset.php?key=".$Email."&reset=".$pass."'>reset password</h4>
									</body>
									</html>
									";
								//dont forget to include content-type on header if your sending html
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								$headers .= "From: saapaanaa1122@gmail.com". "\r\n" .
											"CC: saapaanaa1122@gmail.com";
					
								mail($to,$subject,$message,$headers);
						
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	

?>