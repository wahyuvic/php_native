<?php
session_start();
unset($_SESSION['username']);
session_destroy();
setcookie("username","hapus", time()-31536000);
header("location:login.php");
?>
