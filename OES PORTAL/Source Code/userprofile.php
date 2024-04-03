<?php
session_start();
include("header.php");

include("connect.php");

$sql = "SELECT * from student where delete_status='0' and id='" . $_SESSION['user_id'] . " '";
$result = $conn->query($sql)->fetch_assoc();


?>
<form method="POST" action="profile.php" enctype="multipart/form-data">


    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3>User profile</h3>
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
                                                    <label>First Name*</label>
                                                    <input class="form-control" name="fname" placeholder="Enter First Name" value="<?php echo $result['fname'] ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Last Name*</label>
                                                    <input class="form-control" name="lname" placeholder="Enter Last Name" value="<?php echo $result['lname'] ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Gender*</label>

                                                    <div class="radio">

                                                        <label>
                                                            <input type="radio" name="gender" value="male" <?php if ($result['gender'] == 'male') {
                                                                                                                echo "checked";
                                                                                                            } ?> checked>Male
                                                        </label>
                                                    </div>


                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender" value="female" <?php if ($result['gender'] == 'female') {
                                                                                                                    echo "checked";
                                                                                                                } ?>>Female
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Date of Birth*</label>
                                                    <input class="form-control" name="dob" placeholder="Enter Email" type="date" value="<?php echo $result['dob'] ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Select Branch*</label>
                                                    <select name="branch" class="form-control" id="selectBranch" required>
                                                        <option value="">- - Select Branch - -</option>


                                                        <option value="civil" <?php if ($result['branch'] == 'civil') {
                                                                                    echo 'selected="selected"';
                                                                                } ?>>Civil Engineering</option>
                                                        <option value="computer" <?php if ($result['branch'] == 'computer') {
                                                                                        echo 'selected="selected"';
                                                                                    } ?>>Computer Engineering</option>

                                                        <option value="ec" <?php if ($result['branch'] == 'ec') {
                                                                                echo 'selected="selected"';
                                                                            } ?>>Electronics & Communication Engineering</option>
                                                        <option value="it" <?php if ($result['branch'] == 'architecture') {
                                                                                echo 'selected="selected"';
                                                                            } ?>>Architecture</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <label>Semester* </label>

                                                    <select name="sem" class="form-control" id="selectSemester" required>
                                                        <option <?php if ($result['sem'] == 1) {
                                                                    echo 'selected="selected"';
                                                                } ?>>1</option>
                                                        <option <?php if ($result['sem'] == 2) {
                                                                    echo 'selected="selected"';
                                                                } ?>>2</option>
                                                        <option <?php if ($result['sem'] == 3) {
                                                                    echo 'selected="selected"';
                                                                } ?>>3</option>
                                                        <option <?php if ($result['sem'] == 4) {
                                                                    echo 'selected="selected"';
                                                                } ?>>4</option>
                                                        <option <?php if ($result['sem'] == 5) {
                                                                    echo 'selected="selected"';
                                                                } ?>>5</option>
                                                        <option <?php if ($result['sem'] == 6) {
                                                                    echo 'selected="selected"';
                                                                } ?>>6</option>
                                                        <option <?php if ($result['sem'] == 7) {
                                                                    echo 'selected="selected"';
                                                                } ?>>7</option>
                                                        <option <?php if ($result['sem'] == 8) {
                                                                    echo 'selected="selected"';
                                                                } ?>>8</option>
                                                        <option <?php if ($result['sem'] == 9) {
                                                                    echo 'selected="selected"';
                                                                } ?>>9</option>
                                                        <option <?php if ($result['sem'] == 10) {
                                                                    echo 'selected="selected"';
                                                                } ?>>10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Mobile*</label>
                                                    <input class="form-control" name="mobile" type="" placeholder="Enter Mobile Number" pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" value="<?php echo $result['mobile'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email*</label>
                                                    <input class="form-control" name="email" placeholder="Enter Email" type="email" value="<?php echo $result['email'] ?>" required>
                                                </div>
                                            </div>




                                            <!-- <div class="col-lg-12">
                                                <center>
                                                    <div class="form-group">
                                                        <p>* Fields marked with an asterisk sign are required</p>
                                                        <button type="submit" class="btn btn-default" name="btn">Submit</button>
                                                </center>
                                            </div>
                                        </div> -->

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