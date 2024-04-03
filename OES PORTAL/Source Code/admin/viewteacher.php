<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql = "SELECT * from  teacher order by fname";
$result = $conn->query($sql);
?>

<style>
    .add {
        width: 102px;
        border: 1px solid;
        margin-top: 7%;
        margin-bottom: 1%;
        position: relative;
        padding: 10px 10px;
        margin-left: 15px;
        background: #c9d7dd;
    }

    .add:hover {
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
    }

    .add a {
        text-decoration: none;
        color: black;
    }

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

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Teacher Details</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="add">
                <a href="teacherregistration.php">Add Teacher</a>
            </div>
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

                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Enrollment Number</th>
                                                <th>Branch </th>
                                                <th>Assigned Subject </th>
                                                <th>Email</th>

                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($result as $row) {
                                                $id = $row['id'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $id; ?></td>

                                                    <td><?php echo $row['fname']; ?></td>
                                                    <td><?php echo $row['lname']; ?></td>
                                                    <td><?php echo $row['enroll']; ?></td>

                                                    <td><?php echo $row['branch']; ?></td>
                                                    <td><?php echo $row['subject']; ?></td>


                                                    <td><?php echo $row['email']; ?></td>



                                                    <td>
                                                        <a href="updateteacher.php?id=<?php echo $id ?>" class="adds update" style="height:40px">Update</a>
                                                        <a href="teacherdelete.php?id=<?php echo $id ?>" class="adds delete" style="height:40px">Delete</a>
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
                        <!-- /.table-responsive -->

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