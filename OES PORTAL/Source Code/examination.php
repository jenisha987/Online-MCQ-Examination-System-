<?php
include("check.php");
?>

<?php
//session_start();
extract($_POST);
include("connect.php");


if (isset($_POST['subject']) && !empty($_POST['subject'])) {
	$_SESSION['subject'] = $_POST['subject'];
}

foreach ($_SESSION as $key => $value) {
	$$key = $value;
}

//unset($_SESSION['qa']);
if (!isset($_SESSION['qa']) || empty($_SESSION['qa'])) {
	$q = "select * from question where subject = '" . $subject . "' and branch = '" . $user_branch . "' and sem = '" . $user_sem . "' order by RAND() limit 30";
	$res = $conn->query($q);
	if (mysqli_num_rows($res) <= 0) {
?>
		<script>
			alert('Sorry the questions are not available. Try with some other subject');
			window.location = 'exam.php';
		</script>
<?php
	}

	$_SESSION['qa'] = array();
	$count = 1;
	while ($row = mysqli_fetch_assoc($res)) {
		$_SESSION['qa'][$count]['id'] = $row['id'];
		$_SESSION['qa'][$count]['question'] = $row['question'];
		$_SESSION['qa'][$count]['option_a'] = $row['option_a'];
		$_SESSION['qa'][$count]['option_b'] = $row['option_b'];
		$_SESSION['qa'][$count]['option_c'] = $row['option_c'];
		$_SESSION['qa'][$count]['option_d'] = $row['option_d'];
		$_SESSION['qa'][$count]['ans'] = '';
		$count++;
	}
}


//echo $_SESSION['qa'][1]['question'];exit();
include("examheader.php");
?>

<html>


</head>

<body>



	<iframe id="exam_frame" width="100%" height="450" frameborder="0" scrolling="no" src="exam_frame.php"></iframe>

	<script type="text/javascript">
		setTimeout(myfun, 1800000);

		function myfun() {
			window.location = 'result_count.php';
		}
	</script>


	<script src="js/jquery.min.js"></script>


	<script src="js/bootstrap.min.js"></script>


	<script src="js/metisMenu.min.js"></script>


	<script src="js/dataTables/jquery.dataTables.min.js"></script>
	<script src="js/dataTables/dataTables.bootstrap.min.js"></script>


	<script src="js/startmin.js"></script>
	<script src="js/jquery.min.js"></script>


	<script src="js/bootstrap.min.js"></script>


	<script src="js/metisMenu.min.js"></script>


	<script src="js/startmin.js"></script>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript">
		$(function() {
			$('#countdown').timeTo(1800, function() {
				alert('Your examination time is completed.\nYou are Redirecting to Result page.');
				window.location.assign("result_count.php");
			});
		});
	</script>