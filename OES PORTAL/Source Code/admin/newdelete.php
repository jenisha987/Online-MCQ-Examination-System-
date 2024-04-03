<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'connect.php';

$id = $_GET['id'];

// Delete from the student table
$sql = "DELETE FROM `student` WHERE `id` ='$id'";
$result = mysqli_query($conn, $sql);

// Check if deletion from student table is successful
if ($result) {
    // If successful, proceed to delete from login table
    $sql1 = "DELETE FROM `login` WHERE `r_id` ='$id'";
    $result1 = mysqli_query($conn, $sql1);

    // Check if deletion from login table is successful
    if ($result1) {
        // If both deletions are successful, include the viewstudent.php
        include ("viewstudent.php");
    } else {
        // If deletion from login table fails, handle the error
        echo "Error deleting record from login table: " . mysqli_error($conn);
    }
} else {
    // If deletion from student table fails, handle the error
    echo "Error deleting record from student table: " . mysqli_error($conn);
}
?>














// include 'connect.php';
// $id = $_GET['id'];
// $sql = "DELETE FROM `student` WHERE `id` ='$id'";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     include ("viewstudent.php");

// }
// $sql1 = "DELETE FROM `login` WHERE `r_id` ='$id'";
// $result1 = mysqli_query($conn, $sql1);
// if ($result1) {
//     include ("viewstudent.php");

// }



