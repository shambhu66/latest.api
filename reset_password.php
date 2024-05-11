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
    if(isset($_GET['token'])){
    $token = $_GET['token'];    
    
    $newpassword = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = md5($newpassword);
    $cpass = md5($cpassword);
   
 
    if($newpassword === $cpassword)
    {
         $updatequery = "update registration set password ='$pass' where token='$token'";
         $query = mysqli_query($con,$updatequery);
         
         if($query)
         {
             $_SESSION['msg'] = "Your password has been updated";
             header('location:login.php');
         }else{
             $_SESSION['passmsg'] = "Your password is not updated";
             header('location:reset_password.php');
         }
    } else{
         $_SESSION['passmsg'] = "password is not matching";
    }  
}else{
    echo "No Token Found";
}
}
?>
<div class="container">
    
    <p><?php
    if(isset($_SESSION['passmsg'])){
        echo$_SESSION['passmsg'];
    }else{
       echo$_SESSION['passmsg']=""; 
    }
    
   ?> </p>
<form action="" style="max-width:500px;margin:auto" method="POST">
  <h2>Reset Password</h2>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" name="password" placeholder=" New Password" required>
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" name="cpassword" placeholder="Confirm Password" required>
  </div>

  <button type="submit" name="submit" class="btn">Update Password</button><br>
  
  <h4><div class="link">Already have an account? <a href="https://www.latestforall.com/login.php">Login Here</a></div></h4>
</form>
</div>

</body>
</html>
