<?php
if (isset($_POST['submit'])) {
    $fromEmail = $_POST['email'];
    $toEmail = 'carloszermeno1@gmail.com';
    $name = $_POST['name'];
    $message = $_POST['message'];

    $to = $toEmail;
    $subject = 'Website Inquiry';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$name.'<br/><br/>
                    sent the following message <br/><br/>
                    '.$message.'
				</div>
			</body>
			</html>';
    $result = @mail($to,$subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="http://www.ohmydarlenes.com";</script>';

   
}
?>