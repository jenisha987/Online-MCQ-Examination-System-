<?php
session_start();
include("connect.php");
if(isset($_POST['btn']))
{
  $pass = md5($_POST['password']);
 
$sql="UPDATE registration set fname='".$_POST['fname']."',lname='".$_POST['lname']."',username='".$_POST['username']."',branch='".$_POST['branch']."', mobile='".$_POST['mobile']."',email='".$_POST['email']."',password='". $pass."' where id='".$_SESSION['id']."'";

$result=$conn->query($sql);
 ?>
 <script>
    alert('Record Updated Successfully.........');
    window.location='profile.php';
  </script>  
<?php 
}
?>
