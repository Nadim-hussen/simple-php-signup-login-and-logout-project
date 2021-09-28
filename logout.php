<?php 
session_start();
unset($_SESSION["id"]);
unset($_SESSION["firstname"]);
header("location:regis.php");
?>

