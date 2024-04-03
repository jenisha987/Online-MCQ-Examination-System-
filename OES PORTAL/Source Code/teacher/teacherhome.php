<?php

include("connect.php");

include("header.php");


$sql = "SELECT count(id) as id1 FROM registration";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sql1 = "SELECT count(id) as id2 FROM student where branch='" . $_SESSION['user_branch'] . "'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

$sql2 = "SELECT count(id) as id3 FROM question where subject='" . $_SESSION['user_subject'] . "'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

$sql3 = "SELECT count(id) as id4 FROM result where subject='" . $_SESSION['user_subject'] . "'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();

$sql4 = "SELECT * FROM question ORDER BY id DESC LIMIT 5";
$result4 = $conn->query($sql4);
?>

<form method="POST" action="profile1.php" enctype="multipart/form-data">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row"><br><br><br>
                <div class="col-lg-12">

                </div>
            </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row1['id2']; ?></div>
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

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row2['id3']; ?></div>
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

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row3['id4']; ?></div>
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
</form>

<?php
include("footer.php");
?>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/dataTables/jquery.dataTables.min.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
<script src="../js/startmin.js"></script>