<?php
include("check.php");

?>
<?php
include("connect.php");
include("header.php");
?>

<form method="POST" action="addquestion.php">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="margin-top: 5%;">Start Examination</h3>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <b>Branch:</b>
                                    <input type="text" class="form-control" id="branch" value="<?php echo $_SESSION['user_branch']; ?>">
                                    <b> Subject: </b>
                                    <input type="text" class="form-control" id="subject" value="<?php echo $_SESSION['user_subject']; ?>">

                                    <!-- <div class="col-md-6">
                    <div class="form-group">
                      <label>Semester</label>
                      <select name="sem" class="form-control" id="selectSemester" required>
                        <option value="">---</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                      </select>
                    </div>
                  </div> -->
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-default">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <?php
    include("footer.php");
    ?>

    <script language="javascript" type="text/javascript">
        $(document).ready(function() {
            var sem = $('#selectSemester').val(); // Use the selectSemester id
            var branch = $('#branch').val();
            $.ajax({
                url: 'get_subject_ajax.php',
                type: 'POST',
                data: {
                    branch: branch,
                    sem: sem
                },
                success: function(data) {
                    var subject = $.parseJSON(data);
                    $('#subject').html(subject);
                }
            });
        });
    </script>