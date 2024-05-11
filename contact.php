
        <!-- Contact-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <script src="https://www.google.com/recaptcha/api.js" ></script>
</head>
<body>
    
<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $subject = $_POST['subject'];
    $user_message = $_POST['message'];

        
$email_from = 'shambhusahani6143@gmail.com';
$email_subject = "New Form Submit";
$email_body = "Name : $user_name.\n".
"Email Id : $user_email.\n".
"Subject :  $subject.\n".
"Message : $user_message.\n";
$to_email = "alluarjun6143@gmail.com,info@latestforall.com";
$headers = "From : $email_from \r\n";
$headers  = "Reply-To : $user_email \r\n";

$secretkey = "6LfAH8gZAAAAAJMjZFRSP8iJpota9lgIsbgJbS8U";
$responsekey = $_POST['g-recaptcha-response'];
$UserIp = $_SERVER["REOMTE_ADDR"];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$UserIp";
$response = file_get_contents($url);
$response = json_decode($response);

if($response->success)
{
    mail($to_email,$email_subject,$email_body,$headers);
    $insertquery="insert into contact(name,email,subject,message)value('$user_name','$user_email',' $subject','$user_message')";
        $iquery = mysqli_query($con, $insertquery);
          $_SESSION['message'] = "Message sent successfully";
   
}
else
{
    $_SESSION['captcha'] = "Invalid Captcha, Please Try Again";
}

}
?>
  <div class="contact-form">
        
<h2>Contact From</h2>
<form method="post" action="">

<input type="text" name="name" placeholder="Your Name " class="form-control" required>
<br>

<input type="email" name="email" placeholder="Your Email " class="form-control" required>
<br>

<input type="text" name="subject" placeholder="Subject" class="form-control" required>


<textarea  name="message" placeholder="Your Message" class="form-control" required></textarea>

<div class="g-recaptcha" data-sitekey="6LfAH8gZAAAAAGGimnRhej1MZz_4YuuszUHZjrLk"></div>
<input type="submit" name="submit" value="Send Message" class="button">
<p class ="session" style="color:green;"><?php echo $_SESSION['message']; ?></p>
        <p class ="session" style="color:red;"><?php echo $_SESSION['captcha']; ?></p>
</form>
<div class="status">
    
</div>

</div> 
</body>
</html>
    