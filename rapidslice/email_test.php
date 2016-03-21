<?php
include_once("config.php");
require './PHPMailer-master/PHPMailerAutoload.php';

 $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

$address = "kumsand@gmail.com";
$mail = new PHPMailer(); // defaults to using php "mail()"
$mail->IsSendmail(); // telling the class to use SendMail transport
$mail->AddReplyTo("info@rapidslice.ca","First Last");
$mail->SetFrom('info@rapidslice.ca', 'First Last');
$mail->AddReplyTo("info@rapidslice.ca","First Last");
$mail->AddAddress($address, "Sandip Kumar");
$mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
$mail->MsgHTML($message);
$mail->AddAttachment("rapidslice/dev/images/banner_pic1@2x.png");      // attachment

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
?>
