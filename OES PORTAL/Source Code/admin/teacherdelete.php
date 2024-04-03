<?php
include 'connect.php';

$id = $_GET['id'];

// Delete related records from teacherlogin table first
$sql1 = "DELETE FROM teacherlogin WHERE r_id ='$id'";
$result1 = mysqli_query($conn, $sql1);

// Check if deletion from teacherlogin table is successful
if ($result1 || mysqli_affected_rows($conn) == 0) { // Check if any rows are affected
    // If successful or no rows are affected, proceed to delete from teacher table
    $sql = "DELETE FROM teacher WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);

    // Check if deletion from teacher table is successful
    if ($result) {
        // If successful, redirect to viewteacher.php
        header("Location: viewteacher.php");
        exit();
    } else {
        // If deletion from teacher table fails, handle the error
        echo "Error deleting record from teacher table: " . mysqli_error($conn);
    }
} else {
    // If deletion from teacherlogin table fails, handle the error
    echo "Error deleting record from login table: " . mysqli_error($conn);
}
