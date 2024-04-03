<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");



$sql="select count(id) as id1 from registration where delete_status='0'";
$result=$conn->query($sql);
   $row=$result->fetch_assoc();
  
  $sql1="select count(id) as id2 from student where delete_status='0'";
$result1=$conn->query($sql1);
   $row1=$result1->fetch_assoc();

 $sql2="select count(id) as id3 from question where delete_status='0'";
$result2=$conn->query($sql2);
   $row2=$result2->fetch_assoc();

  $sql3="select count(id) as id4 from result where delete_status='0'";
$result3=$conn->query($sql3);
   $row3=$result3->fetch_assoc();

  $sql4= "SELECT * FROM question
ORDER BY id DESC LIMIT 5 ";

$result4=$conn->query($sql4);
 


?>
  
  




        


<form  method="POST"  action="profile1.php" enctype="multipart/form-data">

           <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row"><br><br><br>
                        <div class="col-lg-12">
                            
                        </div>
                        
                    </div>
                   

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-fw fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row['id1'];?></div>
                                            <div>Total Examinar</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="viewuser.php">
                                    <div class="panel-footer">
                                        <span class="pull-left"> View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                         <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-fw fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row1['id2'];?></div>
                                            <div>Total Students</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="viewstudent.php">
                                    <div class="panel-footer">
                                        <span class="pull-left"> View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                         <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-fw fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row2['id3'];?></div>
                                            <div>Total Questions</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="viewquestion.php">
                                    <div class="panel-footer">
                                        <span class="pull-left"> View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-fw fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $row3['id4'];?></div>
                                            <div>Total Exams</div>
                                        </div>
                                    </div>
                                </div>
                               <a href="viewexam.php">
                                    <div class="panel-footer">
                                        <span class="pull-left"> View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

        </div>
                        </div>
                        
                            </div>
                        </div>
                 </form>  

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
         <h3> Recent Exams</h3>
        <div id="dataTables-example_filter" class="dataTables_filter">

            <thead>
                <tr>
                    <th>Sr No.</th>
                                            
                                            <th>Branch Name</th>
                                            <th>Semester</th>
                                            <th>Subject Name</th>
                                            
                                            
                   
                </tr>
            </thead>
            <tbody>
                                        <?php
                                            $count = 1;
                                            while ($row = mysqli_fetch_assoc($result4)) {
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
                                        

                                       


<?php
foreach ($result4 as $row4) {
     /*$sql5="SELECT * from student where id='".$row4['user_id']." '";
     $result5=$conn->query($sql5);
     $row5=$result5->fetch_assoc();
    // echo $sql; exit;*/
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        
        <td><?php echo $row4['branch']; ?></td>
        <td><?php echo $row4['sem']; ?></td>
        <td><?php echo $row4['subject']; ?></td>
        
      
        <!--<td><?php echo $row4['obtained_marks']; ?></td>
        <td><?php echo $row4['exam_date']; ?></td>-->
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
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
                                 
  
  

</html>
<?php
include("footer.php");
?>
 
        <script src="../js/jquery.min.js"></script>

        
        <script src="../js/bootstrap.min.js"></script>

        
        <script src="../js/metisMenu.min.js"></script>

        
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        
        <script src="../js/startmin.js"></script>
        <script src="../js/jquery.min.js"></script>

       
        <script src="../js/bootstrap.min.js"></script>

        
        <script src="../js/metisMenu.min.js"></script>

        
        <script src="../js/startmin.js"></script>


