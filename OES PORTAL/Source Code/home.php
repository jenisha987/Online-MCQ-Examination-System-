<?php
include("check.php");
?>
<?php
include("header.php");
//session_start();

include("connect.php");

$sql = "select count(id) as id1 from student where delete_status='0'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCQ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="khwopa.css" rel="stylesheet">


    <form method="POST" action="profile1.php" enctype="multipart/form-data">

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <div class="khwopa-heading">Welcome to Online MCQ Examination Section</div>


                        </h1>
                        <div class="khwopa">Rules and Regulations</div>
                    </div>

                </div>


                <!-- <div class=" row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-user fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $row['id1']; ?></div>
                                                <div>Total Students</div>
                                            </div>
                                        </div>
                                    </div> -->
                <br>
                <ul>
                    <li><b>All students must adhere to the designated examination time and duration.</b></li><br>
                    <li><b> Each examination session has a predefined time limit, and students must complete the exam within this time frame</b></li><br>
                    <li><b>Students must not access any unauthorized materials or websites during the examination.</b></li><br>
                    <li><b>Any form of communication or collaboration with other individuals during the examination is prohibited.</b></li><br>
                    <li><b>After finishing the exam, students can promptly access and review their exam results.</b></li><br>


                </ul>
            </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        </div>
    </form>
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
</head>


</html>
<?php
include("footer.php");
?>

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