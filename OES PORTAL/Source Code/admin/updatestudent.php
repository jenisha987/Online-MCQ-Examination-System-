<?php
include("header.php");
include("connect.php");

// Check if the id parameter is provided
if (!isset($_GET['id'])) {
    echo "Error: Student ID not provided.";
    exit(); // Stop further execution
}

$id = $_GET['id'];

// Fetch existing details of the teacher
$sql = "SELECT * FROM student WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Error: Student not found.";
    exit(); // Stop further execution
}

// Check if the update form is submitted
if (isset($_POST['btn'])) {
    // Retrieve updated data from the form
    $updated_fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $updated_lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $updated_gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $updated_username = isset($_POST['username']) ? $_POST['username'] : '';
    $updated_dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $updated_sem = isset($_POST['sem']) ? $_POST['sem'] : '';
    $updated_email = isset($_POST['email']) ? $_POST['email'] : '';
    $updated_add = isset($_POST['add']) ? $_POST['add'] : '';
    $updated_branch = isset($_POST['branch']) ? $_POST['branch'] : '';
    $updated_mbl = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $updated_pass = isset($_POST['password']) ? $_POST['password'] : '';
    // Update the record in the student table
    $update_student_sql = "UPDATE student SET fname='$updated_fname', lname='$updated_lname', sem='$updated_sem' ,address='$updated_add' ,dob='$updated_dob' ,gender='$updated_gender', enroll='$updated_username', email='$updated_email', branch='$updated_branch', mobile='$updated_mbl', password='$updated_pass' WHERE `id`='$id'";
    $update_student_result = mysqli_query($conn, $update_student_sql);

    // Update the record in the login table
    $update_login_sql = "UPDATE login SET username='$updated_username', password='$updated_pass' WHERE `r_id`='$id'";
    $update_login_result = mysqli_query($conn, $update_login_sql);

    if ($update_student_result && $update_login_result) {
        echo "Student details updated successfully!";
    } else {
        echo "Error updating student details: " . mysqli_error($conn);
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="margin-top: 5%;">Teacher Update</h3>
                </div>
            </div>
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
                                                    <input class="form-control" name="fname" placeholder="Enter First Name" value="<?php echo $row['fname']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Last Name*</label>
                                                    <input class="form-control" name="lname" placeholder="Enter Last Name" value="<?php echo $row['lname']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Gender*</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>>Male
                                                        </label>
                                                    </div>


                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>>Female
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Username*</label>
                                                    <input class="form-control" name="username" placeholder="Enter Your Address" value="<?php echo $row['enroll']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Select Branch*</label>
                                                    <select name="branch" class="form-control" id="selectBranch" required>
                                                        <option value="">- - Select Branch - -</option>
                                                        <option value="computer" <?php if ($row['branch'] == 'computer') echo 'selected'; ?>>COMPUTER ENGINEERING</option>
                                                        <option value="civil" <?php if ($row['branch'] == 'civil') echo 'selected'; ?>>CIVIL ENGINEERING</option>
                                                        <option value="electronics" <?php if ($row['branch'] == 'electronics') echo 'selected'; ?>>ELECTRONICS ENGINEERING</option>
                                                        <option value="architecture" <?php if ($row['branch'] == 'architecture') echo 'selected'; ?>>ARCHITECTURE</option>

                                                        <!-- Add other options similarly -->
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label>Semester* </label>

                                                <select name="sem" class="form-control" id="selectSemester" required>
                                                    <option value="">---</option>
                                                    <option <?php if ($row['sem'] == '1') echo 'selected'; ?>>1</option>
                                                    <option <?php if ($row['sem'] == '2') echo 'selected'; ?>>2</option>
                                                    <option <?php if ($row['sem'] == '3') echo 'selected'; ?>>3</option>
                                                    <option <?php if ($row['sem'] == '4') echo 'selected'; ?>>4</option>
                                                    <option <?php if ($row['sem'] == '5') echo 'selected'; ?>>5</option>
                                                    <option <?php if ($row['sem'] == '6') echo 'selected'; ?>>6</option>
                                                    <option <?php if ($row['sem'] == '7') echo 'selected'; ?>>7</option>
                                                    <option <?php if ($row['sem'] == '8') echo 'selected'; ?>>8</option>
                                                    <option <?php if ($row['sem'] == '9') echo 'selected'; ?>>9</option>
                                                    <option <?php if ($row['sem'] == '10') echo 'selected'; ?>>10</option>
                                                    <!-- Add other options similarly -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Birth Date*</label>
                                                <input class="form-control" name="dob" value="<?php echo $row['dob']; ?>" type="date" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Mobile*</label>
                                                <input class="form-control" name="mobile" type="tel" placeholder="Enter Mobile Number" pattern="[0-9]{10}" value="<?php echo $row['mobile']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email*</label>
                                                <input class="form-control" name="email" placeholder="Enter Email" type="email" value="<?php echo $row['email']; ?>" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Password*</label>
                                                <input class="form-control" name="password" type="password" placeholder="Enter password" value="<?php echo $row['password']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Confirm Password*</label>
                                                <input class="form-control" name="confirm_password" type="password" placeholder="Confirm password" value="<?php echo $row['password']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Address*</label>
                                                <textarea class="form-control" rows="2" name="add"><?php echo $row['address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <center>
                                                <p>* Fields marked with an asterisk sign are required</p>
                                                <button type="submit" class="btn btn-default" name="btn">Submit</button>
                                            </center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/startmin.js"></script>