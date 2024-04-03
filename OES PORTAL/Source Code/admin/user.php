<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
	$pass = md5($password);
	$sql="select * from registration where email='".$email."' and password='".$pass."' ";
	$re = $conn->query($sql)->fetch_assoc();
	
	if(!empty($re))
	{
		
		 //$_SESSION['id']=$re['id'];
		 /*echo $_SESSION['id'];exit();*/
		$_SESSION['fname']=$re['fname'];
		$_SESSION['lname']=$re['lname'];
		$_SESSION['mobile']=$re['mobile'];
		$_SESSION['email']=$re['email'];
		$_SESSION['password']=$re['password'];
		$_SESSION['branch']=$re['branch'];
		$_SESSION['gender']=$re['gender'];
		header("location:index.php");
		 

		}
	
	else
	{
	?>
	<script>
		alert('Invalid User And Password');
		window.location='login.php';
	</script>
	<?php
		
	}

}
?>