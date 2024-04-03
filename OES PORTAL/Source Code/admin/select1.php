<?php
include("connect.php"); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $semester = mysqli_real_escape_string($conn, $_POST['sem']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $subcode = mysqli_real_escape_string($conn, $_POST['code']);
    $subteacher = mysqli_real_escape_string($conn, $_POST['optionsDropdown']);


    // Insert data into the database
    $sql = "INSERT INTO department (branch,semester,subject,subjcode,assign_teacher) VALUES ('$branch','$semester','$subject','$subcode','$subteacher')";

    if (mysqli_query($conn, $sql)) {
        header("location:department.php");
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
