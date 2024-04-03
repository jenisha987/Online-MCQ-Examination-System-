<?php
include 'connect.php';

// Check if ID is provided and is numeric
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $id);
    
    // Prepare the SQL statement
    $sql = "DELETE FROM `question` WHERE `id` ='$id'";
    
    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        // Successful deletion, redirect to view question page
        header("Location: viewquestion.php");
        exit();
    } else {
        // Handle error if deletion fails
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle case where ID is missing or not numeric
    echo "Invalid ID";
}

// Close the database connection
mysqli_close($conn);
?>


