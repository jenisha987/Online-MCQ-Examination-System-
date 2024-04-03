<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
	
	$sql="select * from user where status='1' and email='".$email."' and password='".$password."'";
	$re = $conn->query($sql)->fetch_assoc();

	
	if(!empty($re))
	{
		$_SESSION['role']='user';
		 $_SESSION['uid']=$re['uid'];

		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
	
		header("location:../admin/index.php");

	}

	else
	{
	?>
	<script>
		alert('Invalid User And Password OR The User is Deactive');
		window.location='userlogin.php';
	</script>
	<?php
		//header("location:index.php");
	}
}
?>