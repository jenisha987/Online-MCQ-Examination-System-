<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql = "SELECT * from  registration where delete_status='0'";
$result = $conn->query($sql);



?>



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
                <h1 class="page-header">Admin Details</h1>
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

                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Branch</th>
                                                <th>Mobile</th>
                                                <th>Email </th>
                                                <th>Date </th>
                                                <!-- <th>Gender </th> -->


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($result as $row) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>

                                                    <td><?php echo $row['fname']; ?></td>
                                                    <td><?php echo $row['lname']; ?></td>
                                                    <td><?php echo $row['branch']; ?></td>

                                                    <td><?php echo $row['mobile']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>

                                                    <td><?php echo $row['cdate']; ?></td>



                                                    <!-- <td><?php if ($row['gender'] == "male") {
                                                            echo "Male";
                                                        } else {
                                                            echo "Female";
                                                        }
                                                        ?></td> -->

                                                    <!--	<td>	
            <a href="edituser.php?uid=<?php echo $row['uid'] ?>"><i class="fa fa-edit icon"></i></a><br><br>
          <a href="deleteuser.php?uid=<?php echo $row['uid'] ?>" onclick="return confirm('Are you sure to delete this record?')"> <i class="fa fa-trash icon"></i></a>
        </td>-->
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