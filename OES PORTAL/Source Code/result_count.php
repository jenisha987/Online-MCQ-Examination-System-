
<?php
include("check.php");
?>

<?php
include("header.php");
include("footer.php");
include("connect.php");
//session_start();
 ?>

<?php



$sql = "select * from student where id=".$_SESSION['user_id'];
$result=$conn->query($sql);
   $row=$result->fetch_assoc(); 
$count_atten = 0;
$count=0;
$total_que = 0;
$right_ans = 0;
	while($count<30)
	{
		if(isset($_SESSION['qa'][$count]['ans']) && empty($_SESSION['qa'][$count]['ans']) == false)
		{
			$count_atten++;
		}
		$count++;
	}
	foreach ($_SESSION['qa'] as $key => $value) 
	{	
		$qid = $value['id'];
		$sql1 = "select answer from question where id = ".$qid;
		$result1=$conn->query($sql1);
		$result1 = mysqli_fetch_assoc($result1);
  
  
		$ans = $result1['answer'];

		if($ans == $value['ans'])
		{
			$right_ans++;
		}

		$total_que++;
	}

$subject = $_SESSION['subject'];
$user_id = $_SESSION['user_id'];
$attend_que = $count_atten;
$obtained_marks = $right_ans;
$exam_date = date('Y-m-d h:i:s');

$sql2 ="select * from student where id=".$_SESSION['user_id'];
$result2=$conn->query($sql2);
 $row=$result2->fetch_assoc();
$branch = $row['branch'];
$sem = $row['sem'];

$q = "insert into result (user_id,branch,sem,subject,attend_que,obtained_marks,exam_date)
	values ($user_id,'$branch',$sem,'$subject',$attend_que,$obtained_marks,'$exam_date')";
	
$result1 =$conn->query($q);
if (!$result1) {
	echo "error inserting result data";
}

unset($_SESSION['qa']);
unset($_SESSION['subject']);
unset($_SESSION['current_que']);

?>


	
	<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3 style="margin-top: 5%;">Your Examination Result</h3> 
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                            <form role="form">

                                                   <div class="row">
					  <div class="form-group">
						<span class="lbl">Name : </span> 
						<span class="data"><?php echo $row['fname']." ".$row['lname']; ?></span>
					</div>
					  <div class="form-group">
						<span class="lbl">Subject : </span> 
						<span class="data"><?php echo "$subject"; ?></span>
					</div>
					  <div class="form-group">
						<span class="lbl">Total Questions : </span> 
						<span class="data"><?php echo "$total_que"; ?></span>
					</div>
					  <div class="form-group">
						<span class="lbl">Attended Questions : </span> 
						<span class="data"><?php echo "$count_atten"; ?></span>
					</div>
					  <div class="form-group">
						<span class="lbl">Right Answers : </span> 
						<span class="data"><?php echo "$right_ans"; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
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


