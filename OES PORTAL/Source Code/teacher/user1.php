<?php
include("connect.php");
session_start();
// No need to use extract($_POST), it's not recommended due to security concerns

if (isset($_POST['btn'])) {
    //$pass = md5($password);
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Using prepared statements to prevent SQL injection
    $q = "SELECT * FROM `teacherlogin` WHERE username=? AND password=?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $res = $stmt->get_result();

    // Using object-oriented style for consistency
    $num = $res->num_rows;
    $row = $res->fetch_assoc();

    if (!empty($row)) {
        $rid = $row['r_id'];

        $q2 = "SELECT email, branch FROM teacher WHERE id=?";
        $stmt2 = $conn->prepare($q2);
        $stmt2->bind_param("i", $rid);
        $stmt2->execute();
        $res2 = $stmt2->get_result();
        $row2 = $res2->fetch_assoc();

        if ($num > 0) {
            $_SESSION['user_id'] = $rid;
            $_SESSION['user_name'] = $username;
            // Assuming 'sem' column is not present in the teacher table
            // $_SESSION['user_sem'] = $row2['sem']; // Remove this line if not applicable
            $_SESSION['user_branch'] = $row2['branch'];
            $_SESSION['user_email'] = $row2['email'];

            // Redirect to teacher home page
            header('location: teacherhome.php');
            exit();
        } else {
            // Teacher details not found
            echo "<script>alert('Invalid User And Password'); window.location = 'login.php';</script>";
        }
    } else {
        // Login credentials invalid
        echo "<script>alert('Invalid User And Password'); window.location = 'login.php';</script>";
    }
}
