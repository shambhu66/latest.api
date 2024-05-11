<?php
session_start();
$host='localhost';
$username='u915134166_phyquanta';
$password='SHAMbhu@6';
$dbname='u915134166_phyquanta';
$con=mysqli_connect($host,$username,$password,$dbname);
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}
?>