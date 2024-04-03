<?php
include("connect.php");
session_start();
extract($_POST);
if (isset($_POST['btn'])) {
	$username = $_POST['email'];
	$password = $_POST['password'];


	$q = "select * from teacherlogin where username='$username'";


	$res = $conn->query($q);
	$num = mysqli_num_rows($res);
	$row = $res->fetch_assoc();
	if (!empty($row)) {
		$rid = $row['r_id'];

		$q2 = "select subject,email, branch from teacher where id= $rid";


		// $res2 = $conn->query($q2);

		// $row2 = $res2->fetch_assoc();
		$res2 = $conn->query($q2);

		if (!$res2) {
			// Error handling
			echo "Error: " . $conn->error;
		} else {
			$row2 = $res2->fetch_assoc();

			// Rest of your code
		}


		if ($num > 0) {

			$_SESSION['user_id'] = $row['r_id'];
			$_SESSION['user_name'] = $row['username'];
			$_SESSION['user_branch'] = $row2['branch'];
			$_SESSION['user_subject'] = $row2['subject'];
			$_SESSION['user_email'] = $row2['email'];
			if ($row['password'] == $password) {

				header('location:teacherhome.php');
			} else {
?>
				<script>
					alert('Invalid User And Password');
					window.location = 'login.php';
				</script>
		<?php

			}
		}
	} else {
		?>
		<script>
			alert('Invalid User And Password');
			window.location = 'login.php';
		</script>
<?php

	}
}

?>