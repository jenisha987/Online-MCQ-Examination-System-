<?php
session_start();
	if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] == ''){
		header('location: admin.php');
	}else{
  header("location:home.php");
}
?>