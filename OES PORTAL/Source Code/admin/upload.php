<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");



if (isset($_POST['btn']) && $_FILES['fname']['size'] > 0) {
    $fileName = $_FILES['fname']['name'];
    $tmpName = $_FILES['fname']['tmp_name'];
    $fileSize = $_FILES['fname']['size'];
    $fileType = $_FILES['fname']['type'];

    $uploadDir = 'C:\xampp\htdocs\mcq\OES PORTAL\Source Code\studyMaterial\\';

    $filePath = $uploadDir . $fileName;

    $result = move_uploaded_file($tmpName, $filePath);
    if (!$result) {
        echo "Error uploading file";
        exit;
    }


    // if(!get_magic_quotes_gpc())
    // {
    // $fileName = addslashes($fileName);
    // $filePath = addslashes($filePath);
    // }

    $sql = "INSERT INTO upload (name, size, type, path ) " .
        "VALUES ('$fileName', '$fileSize', '$fileType', '$filePath')";

    if ($conn->query($sql) == TRUE) {
        echo "Record Inserted Sucessfully "; ?>

        <!--<script>window.location='viewuser.php';</script>-->
<?php
    } else {
        echo "Something Wrong" . $conn->error;
    }
}

?>

<form method="POST" enctype="multipart/form-data">

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="margin-top: 5%;">Upload Examination Material
                    </h3>
                </div>


            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <form role="form">

                                        <div class="row">
                                            <div class="col-lg-6">



                                                <div class="form-group">
                                                    <label>Select File to Upload</label>

                                                    <input type="file" name="fname" class="form-control" required>


                                                </div>
                                    </form>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-default" name="btn">Submit</button></center>
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




</html>
<?php
include("footer.php");
?>