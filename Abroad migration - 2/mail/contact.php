<?php
if(empty($_POST['name']) || empty($_POST['last']) || !filter_var($_POST['email'] 
|| empty($_POST['Phone']) || empty($_POST['visa'])|| empty($_POST['Country']) || empty($_POST['Message']), FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$last= strip_tags(htmlspecialchars($_POST['last']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$Phone = strip_tags(htmlspecialchars($_POST['Phone']));
$visa = strip_tags(htmlspecialchars($_POST['visa']));

$Country = strip_tags(htmlspecialchars($_POST['Country']));
$Message = strip_tags(htmlspecialchars($_POST['Message']));

$to = "bhandarinitesh12@gmail.com"; 
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.
\n\n"."Here are the details:\n\nname: $name\n\n\nlast: $last\n\n\nemail: $email
\n\nPhone: $Phone\n\nvisa: $visa \n\n\nCountry: $Country\n\n\nMessage: $Message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
