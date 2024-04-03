<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
  $pass = md5($password2);
  $pass1 = md5($password);
  $sql="select * from registration where id='".$_SESSION['id']." '";
 $result1=$conn->query($sql);
   $row1=$result1->fetch_assoc();
if($pass1==$row1['password'])
{
  $sql="UPDATE registration set password='".$pass."' where id='".$_SESSION['id']."'";
  $result1=$conn->query($sql);
  ?> 
 <script>
    alert('Password Change successfully');
    window.location='changepass.php';
  </script>
  <?php
}
  
  else
  {
  ?>
  <script>
    alert('Please Enter Correct Password');
    window.location='changepass.php';
  </script>
  <?php
    
  }
}
?>