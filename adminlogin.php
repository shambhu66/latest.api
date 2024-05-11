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
  background: #E9E0E0;
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
.session{
    background-color: green;
    color : white; 
    font-style : bold;
}
</style>
</head>
<body>
<?php

include 'dbcon.php';
if(isset($_POST['submit']))
{
    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $admin = "SELECT * FROM `admin` WHERE username like '%$username%' and password like '%$password%'";
    
    $query = mysqli_query($con,$admin);
    $admin_count=mysqli_num_rows($query);
    
  if($admin_count == 1)
  {
      
      $_SESSION['user'] = $username;
      header('location:admin.php');
     
   }
   else{
      header('location:adminlogin.php');
   }
   
  }
?>
<div class="container">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" style="max-width:500px;margin:auto" method="POST">
  <h2>Admin Form</h2>
  
  <p class ="session"><?php echo $_SESSION['msg']; ?></p>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="username" name="username" placeholder="Username" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" name="password" placeholder="Password" required>
  </div>
  

  <button type="submit" name="submit" class="btn">Login Here</button><br>
  
</form>
</div>

</body>
</html>
