<?php
session_start();
include("connect.php");
if(isset($_POST['btn']))
{
  
 
$sql="UPDATE student set fname='".$_POST['fname']."',lname='".$_POST['lname']."',dob='".$_POST['dob']."',branch='".$_POST['branch']."', mobile='".$_POST['mobile']."',email='".$_POST['email']."' where id='".$_SESSION['user_id']."'";

$result=$conn->query($sql);
 ?>
 <script>
    alert('Record Updated Successfully.........');
    window.location='userprofile.php';
  </script>  
<?php 
}
?>