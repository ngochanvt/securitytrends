<?php
require_once("class.phpmailer.php");
require_once("class.smtp.php");
require_once("PHPMailerAutoload.php");

$name=$_POST['name'];
$email=$_POST['email'];

$mail             = new PHPMailer();
$mail->IsSMTP();             
$mail->CharSet  = "utf-8";
$mail->SMTPDebug  = 2;   // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;    // enable SMTP authentication
$mail->SMTPSecure = "ssl";   // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 465;  
  

$mail->Username   = "zunik.web.contact@gmail.com";  // khai bao dia chi email
$mail->Password   = "han11235813";            // khai bao mat khau
$mail->SetFrom("zunik.web.contact@gmail.com", "Zunik");
$mail->AddReplyTo("zunik.web.contact@gmail.com", "Zunik"); //khi nguoi dung phan hoi se duoc gui den email nay
$content="Hello ".$name;
$mail->Subject    = "Hello ".$name;

$mail->MsgHTML($content);// noi dung chinh cua mail se nam o day.
$mail->AddAddress($email, $name);
// thuc thi lenh gui mail 
if(!$mail->Send()) echo $mail->ErrorInfo;

?>