<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");
$sql = "select * from result  WHERE user_id='" . $_SESSION['user_id'] . "'  ";
$result = $conn->query($sql);

?>



<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b> Result</b>
                    </div>

                    <div class="panel-body">

                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="col-sm-6">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Subject Name </th>
                                                <th>Total</th>
                                                <th>Attended Question</th>
                                                <th>Obtained Marks</th>
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
                                                    $(document).ready(function() {

                                                        $('#e<?php echo $id; ?>').tooltip('show')
                                                        $('#e<?php echo $id; ?>').tooltip('hide')
                                                    });
                                                </script>
                                                <!-- end script -->
                                                <!-- script -->
                                                <script type="text/javascript">
                                                    $(document).ready(function() {

                                                        $('#d<?php echo $id; ?>').tooltip('show')
                                                        $('#d<?php echo $id; ?>').tooltip('hide')
                                                    });
                                                </script>



                                                <?php
                                                foreach ($result as $row) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $row['subject']; ?></td>
                                                        <td>6</td>
                                                        <td><?php echo $row['attend_que']; ?></td>
                                                        <td><?php echo $row['obtained_marks']; ?></td>
                                                        <td><?php echo $row['exam_date']; ?></td>
                                                    <?php $count++;
                                                } ?>



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





<!-- Page-Level Demo Scripts - Tables - Use for reference -->
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