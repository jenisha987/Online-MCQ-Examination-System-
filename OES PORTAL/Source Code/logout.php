<?php


session_start();
include("connect.php");

session_destroy();
$_GLOBALS['message']="You are Loggged Out Successfully.";
header('location:login.php');

exit;
?>