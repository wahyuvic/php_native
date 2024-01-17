<?php
session_start();
$data=$_COOKIE['username'];
if(!isset($_COOKIE['username']))
{
header('location:login.php');
}
else{
//header('location:Admin.php');
}

?>