<?php
// session_start();

// // Check if user is not logged in or user_id is empty
// if (empty($_SESSION['id'])) {
// 	// Redirect to login page
// 	header('Location: login.php');
// 	exit(); // Ensure no further execution of the script
// }

session_start();
if (!isset($_SESSION['user_id'])) {
	header("location:login.php");
}
