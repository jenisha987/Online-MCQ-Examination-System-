<?php
session_start();
include("connect.php");
if (isset($_POST['btn'])) {
  $pass = md5($_POST['password']);

  $sql = "UPDATE registration SET fname='$fname', lname='$lname', username='$username', branch='$branch', mobile='$mobile', email='$email', password='$pass' WHERE id='" . $_SESSION['id'] . "'";

  $result = mysqli_query($conn, $sql);
?>
  <script>
    alert('Record Updated Successfully.........');
    window.location = 'profile.php';
  </script>
<?php
}
?>