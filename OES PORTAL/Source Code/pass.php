<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
  $pass = md5($password2);
  $pass1 = md5($password);
   $sql="select * from login where r_id='".$_SESSION['user_id']." '";
 $result1=$conn->query($sql);
 
   $row1=$result1->fetch_assoc();
  // echo $row1['password'];exit();
if($pass1==$row1['password'])
{
  $sql1="UPDATE login set password='".$pass."' where r_id='".$_SESSION['user_id']."'";
  
  $result1=$conn->query($sql1);
  //echo "<pre>";  print_r($result1); exit;
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