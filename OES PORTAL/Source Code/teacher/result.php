<?php 
include("header.php");
include("connect.php");

$sql= "SELECT * FROM result where subject='" . $_SESSION['user_subject'] . " '
and user_id IN (SELECT id FROM  student )";

$result=$conn->query($sql);
 

?>

<link href="../css/metisMenu.min.css" rel="stylesheet">

        
        <link href="../css/timeline.css" rel="stylesheet">

        
        <link href="../css/startmin.css" rel="stylesheet">

        
        <link href="../css/morris.css" rel="stylesheet">

        
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header">Results</h3>
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
                    <th>Sr No.</th>
                    <th>Student Name</th>
                                            <th>Semester</th>
                                            <th>Branch Name</th>
                                            <th>Enrollment</th>
                                            <th>Subject Name</th>
                                            <th>Attended Questions</th>
                                            <th>Result</th>
                                            <th>Date</th>
                   
                </tr>
            </thead>
            <tbody>
                                        <?php
                                            $count = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                        ?>

                                        <!-- script -->
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                    
                                                $('#e<?php echo $id; ?>').tooltip('show')
                                                $('#e<?php echo $id; ?>').tooltip('hide')
                                            });
                                        </script>
                                        <!-- end script -->
                                        <!-- script -->
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                    
                                                $('#d<?php echo $id; ?>').tooltip('show')
                                                $('#d<?php echo $id; ?>').tooltip('hide')
                                            });
                                        </script>
                                        <!-- end script -->

                                        <?php
                                          /*  if($row['filetype'] == 'doc' || $row['filetype'] == 'docx'){
                                                $image = 'admin/img/docx.png';
                                            } else if($row['filetype'] == 'pdf'){
                                                $image = 'admin/img/pdf.png';
                                            } else if($row['filetype'] == 'ppt' || $row['filetype'] == 'pptx'){
                                                $image = 'admin/img/pptx.png';
                                            } else if($row['filetype'] == 'xls' || $row['filetype'] == 'xlsx'){
                                                $image = 'admin/img/xls.png';
                                            }
*/
                                           /* $branch_id = $row['branch_id'];
                                            $q = 'select name from branch where id = '.$branch_id;
                                            $data = mysql_query($q);
                                            $branch_name = mysql_fetch_assoc($data);
*/                                        ?>


                                       


<?php
foreach ($result as $row) {
     $sql1="SELECT * from student where id='".$row['user_id']." '";
     $result1=$conn->query($sql1);
     $row1=$result1->fetch_assoc();
    // echo $sql; exit;
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row1['fname'] . ' ' . $row1['lname']; ?></td>
        <td><?php echo $row1['sem']; ?></td>
        <td><?php echo $row1['branch']; ?></td>
        <td><?php echo $row1['enroll']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        
        <td><?php echo $row['attend_que']; ?></td>
        <td><?php echo $row['obtained_marks']; ?></td>
        <td><?php echo $row['exam_date']; ?></td>
         <?php $count++; } ?>
        
        
        
<?php   
}
?>

                                   
                                       </tbody>
        </div>
    </div>
</table>
                                    </div>
                                    
                                    
                                </div>
                               
                            </div>
                           
                        </div>
                       
                    </div>
                   
                    
                            </div>
                            
                        </div>
                        
                    </div>
                  
                </div>
               
            </div>
          

        </div>
       

      <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>



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
