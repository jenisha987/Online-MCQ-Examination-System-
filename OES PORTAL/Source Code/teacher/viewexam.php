<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql= "SELECT * FROM result where subject='" . $_SESSION['user_subject'] . " '
and user_id IN (SELECT id FROM  student ) order by obtained_marks DESC";

$result=$conn->query($sql);

?>




<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Total Exams</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                    <br>
                                    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <div class="col-sm-6">
        <div id="dataTables-example_filter" class="dataTables_filter">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>Subject</th>
                    <th>Result</th>
                    <th>Date</th>
                    
                    
                    
                </tr>
            </thead>
            <tbody>

<?php
foreach ($result as $row) {
    $sql1="SELECT * from student where id='".$row['user_id']." '";
    $result1=$conn->query($sql1);
    $row1=$result1->fetch_assoc();
	 
	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
        <td><?php echo $row1['fname'] . ' ' . $row1['lname']; ?></td>
		<td><?php echo $row['branch']; ?></td>
		<td><?php echo $row['sem']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		
		<td><?php echo $row['obtained_marks']; ?></td>
		<td><?php echo $row['exam_date']; ?></td>
		
		
        	</tr>
<?php	
}
?>

                                               
                                        </tbody>
        </div>
    </div>
</table>
                                    </div>
                                    
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        
        <script src="../js/jquery.min.js"></script>

       
        <script src="../js/bootstrap.min.js"></script>

        
        <script src="../js/metisMenu.min.js"></script>

       


        <script src="../js/startmin.js"></script>
        <script src="../js/jquery.min.js"></script>

        
        <script src="../js/bootstrap.min.js"></script>

       
       



               <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    
</html>
<?php
include("footer.php");
?>
