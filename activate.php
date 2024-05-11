<?php

session_start();
include 'dbcon.php';
if(isset($_GET['token']))
{
    $token = $_GET['token'];
    $update = "update registration set status ='active' where token ='$token'" ;
    $query = mysqli_query($con,$update);
    if($query){
        
       
           $_SESSION['msg'] = "Account updated successfully, Enter Your Valid Username And Password";
           header('location:login.php');
       } else{
            $_SESSION['msg'] = "You are logged out";
           header('location:login.php');
        }
    }else{
         $_SESSION['msg'] = "Account not updated ";
           header('location:signup.php');
    }


?>
