<?php 
$errors = '';
$myemail = 'ammbsoc@gmail.com';//<-----Put Your email address here.
$sendfrom = 'admin@ammb.co.uk';
if(empty($_POST['fullname'])  || 
   empty($_POST['theme']) || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['fullname']; 
$subiect = $_POST['theme']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$from = $sendfrom;
	$email_subject = "$subiect - de la ammb.co.uk";
	$email_body = 
	"De la: $name \n Email: $email_address \n Mesaj: \n $message"; 
	
	$headers .= "From: $sendfrom\r\n"; 
	$headers .= "Reply-To: $email_address\r\n";
    $headers .= "Return-Path: $sendfrom\r\n";
	$headers .= "Organization: Sender Organization\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.php');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>