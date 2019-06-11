<?php
session_start();

include_once('../../../wp-load.php' );

$to = "sglodowski@aol.pl"; 
$subject = "Zdrojowa email test"; 

$sender = $_POST['name'];
$return = $_POST['email'];
$message = nl2br($_POST['message']);

$sendernum = strlen($sender);
$messagenum = strlen($message);
$emailcheck = checkEmail($return);

if($messagenum <=4 ) { die("Wiadomość jest za krótka"); }
if($emailcheck == false) { die("Nieprawidłowy adres email"); }

$headers = "From: " . strip_tags($return) . "\r\n";
$headers .= "Reply-To: ". strip_tags($return) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$msg = "<html><body>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px solid #bbb;'>Formularz kontaktowy ze strony:</h2>\r\n";
$msg .= "<u>Wysłano przez:</u>: <strong>".$sender."</strong><br />\r\n";
$msg .= "<u>E-mail:</u>: <strong>".$return."</strong><br /><br />\r\n";
$msg .= "<u>Wiadomość:</u>: <br />\r\n";
$msg .= "<p>".$message."</p><br />\r\n";
$msg .= "</body></html>";

if(@mail($to, $subject, $msg, $headers)) {
	echo "Twój email został wysłany <a href=\"".site_url()."/\">Strona Główna</a>.";
} else {
	echo "Niestety twoja wiadomość nie może zostać wysłana...";
}


function checkEmail($email) {
 if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
 {
    return true;
 }
 return false;
}
?>