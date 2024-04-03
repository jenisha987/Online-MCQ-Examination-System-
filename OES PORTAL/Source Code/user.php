<?php
include("connect.php");
session_start();
extract($_POST);

if (isset($_POST['btn'])) {
    //$pass = md5($password);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $res = $conn->query($q);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $rid = $row['r_id'];

        $q2 = "SELECT sem, branch, email FROM student WHERE id=$rid";
        $res2 = $conn->query($q2);

        if ($res2->num_rows > 0) {
            $row2 = $res2->fetch_assoc();

            $_SESSION['user_id'] = $rid;
            $_SESSION['user_name'] = $username;
            $_SESSION['user_sem'] = $row2['sem'];
            $_SESSION['user_branch'] = $row2['branch'];
            $_SESSION['user_email'] = $row2['email'];

            // Redirect to home page
            header('location: home.php');
            exit();
        } else {
            // Student details not found
            echo "<script>alert('Invalid User And Password'); window.location = 'login.php';</script>";
        }
    } else {
        // Login credentials invalid
        echo "<script>alert('Invalid User And Password'); window.location = 'login.php';</script>";
    }
}
