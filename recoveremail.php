<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background:#E9E0E0;
  color: black;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #0F5BBE;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size :20px;
}

.btn:hover {
  opacity: 1;
}
.container h2{
    text-align:center;
}
.link{
    text-align:center;
}
</style>
</head>
<body>
<?php

include 'dbcon.php';
if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
  

  $emailquery = " SELECT * FROM `registration` WHERE email like '%$email%'";
  $query = mysqli_query($con, $emailquery);
 
  if(mysqli_num_rows($query))
  {
      $userdata = mysqli_fetch_array($query);
      $username = $userdata['username'];
      $token = $userdata['token'];
   
   $subject = "Password Reset";
   $body = "Hi, $username. click here to reset your password https://www.latestforall.com/reset_password.php?token=$token ";
   $headers = "From : shambhusahani6143@gmail.com";
   if(mail($email,$subject,$body,$headers))
   {
   $_SESSION['msg'] = "Check your mail to reset your password -> $email";
   header('location: login.php');
   }
   else{
     echo "Email send failed";
  }
}else
{
    echo "No Email Found";
}
}

?>
<div class="container">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" style="max-width:500px;margin:auto" method="POST">
  <h2>Recover Your Account</h2>
  <h4 style="text-align: center; color:red;">Please fill registered email properly</h4>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" name="email" placeholder="Email" required>
  </div>
  
  <button type="submit" name="submit" class="btn">Send Mail</button><br>
  
</form>
</div>

</body>
</html>
