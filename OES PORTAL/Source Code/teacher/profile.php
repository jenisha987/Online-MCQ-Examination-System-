<?php
// include("check.php");
session_start();
include("header.php");
include("connect.php");


// Fetch teacher details from the database
$sql = "SELECT * FROM teacher WHERE id = '{$_SESSION['profile1.php']}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

include("footer.php");
?>

<form method="POST" enctype="multipart/form-data">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="margin-top: 5%;">Teacher Profile</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div role="form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>First Name*</label>
                                                    <input class="form-control" name="fname" placeholder="Enter First Name" value="" required>
                                                </div>
                                            </div>
                                            <!-- Add other form fields similarly -->

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>New Password*</label>
                                                    <input class="form-control" name="new_password" type="password" placeholder="Enter new password" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Confirm New Password*</label>
                                                    <input class="form-control" name="confirm_password" type="password" placeholder="Confirm new password" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <center>
                                                <p>* Fields marked with an asterisk sign are required</p>
                                                <button type="submit" class="btn btn-default" name="btn">Submit</button>
                                            </center>
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
</form>






<?php include("footer.php"); ?>