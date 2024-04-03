<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql = "SELECT * from  question where subject='" . $_SESSION['user_subject'] . " '";
$result = $conn->query($sql);



?>
<style>
    .adds {
        width: 100px;
        height: 100px;
        color: white;
        border: 1px solid black;
        position: relative;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        padding: 8px 8px;
        margin-left: 15px;
    }

    .adds:hover {
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        text-decoration: none;
        color: white;
    }

    .update {
        background: green;
    }

    .delete {
        background: maroon;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>



</head>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Total Questions</h1>
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

                                                <th>Branch</th>
                                                <th>Semester</th>
                                                <th>Subject</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($result as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>

                                                    <td><?php echo $row['branch']; ?></td>
                                                    <td><?php echo $row['sem']; ?></td>
                                                    <td><?php echo $row['subject']; ?></td>

                                                    <td><?php echo $row['question']; ?></td>
                                                    <td><?php echo $row['answer']; ?></td>
                                                    <td>
                                                        <a href="update.php?id=<?php echo $row['id']; ?>&branch=<?php echo $row['branch']; ?>&sem=<?php echo $row['sem']; ?>&subject=<?php echo $row['subject']; ?>" class="adds update" style="height:40px">Update</a>
                                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="adds delete" style="height:40px">Delete</a>
                                                    </td>
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
<!-- /#wrapper -->

<!-- jQuery -->
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