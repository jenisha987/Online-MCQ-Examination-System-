<?php
include("connect.php");

if(isset($_POST['btn']))
{
  if($_FILES['profile']['tmp_name'] != '')
  {
    $path ="image/";
    $image=basename($_FILES['profile']['name']);
    $image_name=$path.$image;
    if(move_uploaded_file($_FILES['profile']['tmp_name'],$image_name))
    {
      $image=basename($_FILES['profile']['name']);
    }
  }else{
    $image = $_POST['old_image'];
  }
}


$sql="UPDATE user set fname='".$_POST['fname']."',lname='".$_POST['lname']."',address='".$_POST['address']."',city='".$_POST['city']."',state='".$_POST['state']."',pcode='".$_POST['pcode']."',mobile='".$_POST['mobile']."',email='".$_POST['email']."',profile='$image' where uid='".$_GET['uid']."'";
$result=$conn->query($sql);
header('location:viewuser.php');
?>

