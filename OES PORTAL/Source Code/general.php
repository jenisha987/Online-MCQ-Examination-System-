<?php
include("connect.php");

function sanitize($data)
{
	return mysqli_real_escape_string($data);
}
function user_active($id)
{
	$id=sanitize($id);
$res=executeQuery("select * from student where id=$id AND active=1");
	return 
	(mysqli_num_rows($res)>0)?true:false;
}
function email_exists($mail)
{
	$mail=sanitize($mail);
$res=("select * from student where email='$mail'");
	return (mysqli_num_rows($res)>0)?true:false;
}
?>
