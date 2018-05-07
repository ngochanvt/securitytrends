<?php
require_once("class.phpmailer.php");
require_once("class.smtp.php");
//print_r($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
$mail = new PHPMailer();
$mail->IsSMTP();             
$mail->CharSet  = "utf-8";
$mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;    // enable SMTP authentication
$mail->SMTPSecure = "ssl";   // sets the prefix to the servier
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 465;  
  

$mail->Username   = 'zunik.web.contact@gmail.com';  // khai bao dia chi email
$mail->Password   = 'han11235813';            // khai bao mat khau
$mail->SetFrom('zunik.web.contact@gmail.com', 'Zunik.vn');
$mail->AddReplyTo('zunik.web.contact@gmail.com', 'Zunik.vn'); //khi nguoi dung phan hoi se duoc gui den email nay

$mail->Subject    = 'Demo microsite to '.$name;// tieu de email 
$content="Hello ".$name." ,";
$content.="This is automatic email, please do not reply on this email. Every request please send to ngochanvt0402@gmail.com";

$mail->MsgHTML($content);// noi dung chinh cua mail se nam o day.
$mail->AddAddress($email, $name);
print_r($mail);
echo $mail->Send();
?>