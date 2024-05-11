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
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	$file =  $_FILES['image'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$filestored = array('png','jpg','jpeg');

    $pass = md5($password);
    $cpass = md5($cpassword);
    $token = bin2hex(random_bytes(15));

  $emailquery = " SELECT * FROM `registration` WHERE email like '%$email%'";
  $query = mysqli_query($con, $emailquery);
 
  if(mysqli_num_rows($query)>0)
  {
    ?>
    <script>
        alert("Email Already Exits");
    </script>
    <?php
    
  }else{
    if($password === $cpassword && in_array($filecheck,$filestored))
    {
	
	    $destination = 'uploads/'.$filename;
        move_uploaded_file($filepath,$destination);
        $insertquery="insert into registration(username,email,password,cpassword,token,status, image)values('$username',' $email',' $pass','$cpass','$token','inactive','$destination')";
        $iquery = mysqli_query($con, $insertquery);
        if($iquery)
{
   
   $subject = "Email Activation";
   $body = "Hi, $username. click here to activate your account https://www.latestforall.com/activate.php?token=$token ";
   $headers = "From : shambhusahani6143@gmail.com";
   if(mail($email,$subject,$body,$headers))
   {
   $_SESSION['msg'] = "Check your mail to activate your account -> $email";
   header('location: login.php');
   }
   else{
     echo "Email send failed";
   }
}
else{
    ?>
    <script>
        alert("insert failed");
    </script>
    <?php
}

    }else{
        ?>
    <script>
        alert("Password Is Not Matching");
    </script>
    <?php
    }
  }
}
?>
<div class="container">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" style="max-width:500px;margin:auto" method="POST" enctype="multipart/form-data">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" name="username" placeholder="Username" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" name="email" placeholder="Email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" name="password" placeholder="Password" required>
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" name="cpassword" placeholder="Confirm Password" required>
  </div>
    <div class="input-container">
    <i class="fa fa-picture-o"></i>
    <input class="input-field" type="file" name="image" required>
  </div>
<p style="color:red;">Select Profile to upload:</p>
  <div>
  <button type="submit" name="submit" class="btn">Register</button><br>
  <h4><div class="link">Forgot Password Or Username No Worry? <a href="http://phyquanta.com/recoveremail.php">Click Here</a></div></h4>
  <h4><div class="link">Already have an account? <a href="http://phyquanta.com/login.php">Login Here</a></div></h4>
</form>
</div>

</body>
</html>
