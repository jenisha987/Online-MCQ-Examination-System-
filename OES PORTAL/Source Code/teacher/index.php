<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location:admin.php");
}else{
  header("location:home.php");
}
?>

