<?php
session_start();
include('admin/includes/config.php');
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    //your site secret key

    $secret = '6LcoU0kgAAAAAIb3pM2Bya2Ua-gp274LFxFwXeHr';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    print_r($responseData);

    // $name = !empty($_POST['name']) ? $_POST['name'] : '';
    // $email = !empty($_POST['email']) ? $_POST['email'] : '';
    // $message = !empty($_POST['message']) ? $_POST['message'] : '';
    // $user_id = $_SESSION['otpid'];
    if ($responseData->success) {
        $_SESSION['sign_msg'] = "Verified";
        header('register.php');
        //start
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            function check_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $fullname=check_input($_POST['AdminUserName']);
			$email=check_input($_POST['AdminEmailId']);
			$phone=check_input($_POST['phone']);
			$password= md5(check_input($_POST['AdminPassword']));
	

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['sign_msg'] = "Invalid email format";
                header('location:signup.php');
            } 
                            else{
                                $query=mysqli_query($con,"select * from tbladmin where AdminEmailId='$email'");

                                if (mysqli_num_rows($query) > 0) {
                                    $_SESSION['sign_msg'] = "Email already taken";
                                    header('location:signup.php');
                                } else {
                                    //depends on how you set your verification code
                                    $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                    $code = substr(str_shuffle($set), 0, 12);
                                    $status =1;
                
                                    mysqli_query($con,"insert into tbladmin (AdminUserName,AdminEmailId,phone,AdminPassword,code,Is_Active) values ('$fullname','$email','$phone', '$password','$code','$status')");
                                    $uid = mysqli_insert_id($con);
                                    //default value for our verify is 0, means it is unverified
                
                                    //sending email verification
                                    $to = $email;
                                    $subject = "Sign Up Verification Code";
                                    $message = "
                                        <html>
                                        <head>
                                        <title>Verification Code</title>
                                        </head>
                                        <body>
                                        <h2>Thank you for Registering.</h2>
                                        <p>Your Account:</p>
                                        <p>Email: " . $email . "</p>
                                        <p>Password: " . $_POST['AdminPassword'] . "</p>
                                        <p>Please click the link below to activate your account.</p>
                                        <h4><a href='http://localhost:83/OlympicsGames/activate.php?uid=$uid&code=$code'>Activate My Account</h4>
                                        </body>
                                        </html>
                                        ";
                                    //dont forget to include content-type on header if your sending html
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    $headers .= "From: saapaanaa1122@gmail.com" . "\r\n" .
                                        "CC: saapaanaa1122@gmail.com";
                
                                    mail($to, $subject, $message, $headers);
                
                                    $_SESSION['sign_msg'] = "Verification code sent to your email.";
                                    header('location:signup.php');
                                 }
                            }
                            }

               
        }

        //end
    } else {
        $_SESSION['sign_msg'] = 'Robot verification failed, please try again.';
        header('location:signup.php');
    }
 
