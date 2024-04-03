<?php
include("connect.php");
$sql="UPDATE user set delete_status='1' where uid='".$_GET['uid']."'";
header('location:viewuser.php');
echo 'Deleted successfully.';
if($conn->query($sql))
{
	echo "Record Deleted";
}else
{
	echo "Not Deleted";
}

?>