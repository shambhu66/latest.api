<?php
if(isset($_POST['submit']))
{
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $subject = $_POST['subject'];
    $user_message = $_POST['message'];

$email_from = 'admin@phyquanta.com';
$email_subject = "New Form Submit";
$email_body = "Name : $user_name.\n".
"Email Id : $user_email.\n".
"Subject :  $subject.\n".
"Message : $user_message.\n";
$to_email = "alluarjun6143@gmail.com";
$headers = "From : $email_from \r\n";
$headers  = "Reply-To : $user_email \r\n";
$secretkey = "6Lc9uMMZAAAAAEsynTkpg0ESwaXaxaG7vBDxnlN2";
$responsekey = $_POST['g-recaptcha-response'];
$UserIp = $_SERVER["REOMTE_ADDR"];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$UserIp";
$response = file_get_contents($url);
$response = json_decode($response);

if($response->success)
{
    mail($to_email,$email_subject,$email_body,$headers);
    echo "Message Sent Successfully";
}
else
{
    echo "<span>Invalid Captcha , Please Try Again</span>";
}

}
?>
