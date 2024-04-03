<?php
include("connect.php");
include("header.php");

?>
<form method="POST" enctype="multipart/form-data">

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $sql = "SELECT id, name FROM upload";
                    $res = $conn->query($sql);
                    if (empty($res)) {
                        echo "Something Wrong" . $conn->error;
                    } else {
                        while (list($id, $name) = mysqli_fetch_array($res)) {
                    ?>

                            <a href="download.php?id=<?php echo $id; ?>">
                                <span class="lbl">Download</span> <span class="data"><?php echo $name ?></span>
                                <hr>
                            </a>
                </div>
            </div>

    <?php
                        }
                    }
    ?>
        </div>
</form>
</div>
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