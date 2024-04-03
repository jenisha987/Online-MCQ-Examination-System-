<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE `id` ='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    include ("viewstudent.php");

}

?>

