<?php
include("header.php");
include("connect.php");

// Check if the id parameter is provided
if (!isset($_GET['id'])) {
    echo "Error: Teacher ID not provided.";
    exit(); // Stop further execution
}

$id = $_GET['id'];

// Fetch existing details of the teacher
$sql = "SELECT * FROM teacher WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Error: Teacher not found.";
    exit(); // Stop further execution
}

// Check if the update form is submitted
if (isset($_POST['btn'])) {
    // Retrieve updated data from the form
    $updated_fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $updated_lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $updated_gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $updated_username = isset($_POST['username']) ? $_POST['username'] : '';
    $updated_email = isset($_POST['email']) ? $_POST['email'] : '';
    $updated_branch = isset($_POST['branch']) ? $_POST['branch'] : '';
    $updated_mbl = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $updated_pass = isset($_POST['password']) ? $_POST['password'] : '';

    // Update the record in the teacher table
    $update_teacher_sql = "UPDATE teacher SET fname`='$updated_fname', lname`='$updated_lname', gender`='$updated_gender', enroll`='$updated_username', email`='$updated_email', branch`='$updated_branch', mobile`='$updated_mbl', password`='$updated_pass' WHERE `id`='$id'";
    $update_teacher_result = mysqli_query($conn, $update_teacher_sql);

    // Update the record in the teacherlogin table
    $update_teacherlogin_sql = "UPDATE teacherlogin SET username`='$updated_username', password`='$updated_pass' WHERE `r_id`='$id'";
    $update_teacherlogin_result = mysqli_query($conn, $update_teacherlogin_sql);

    if ($update_teacher_result && $update_teacherlogin_result) {
        echo "Teacher details updated successfully!";
    } else {
        echo "Error updating teacher details: " . mysqli_error($conn);
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
                                                            <input type="radio" name="gender" value="male" checked>Male
                                                        </label>
                                                    </div>


                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender" value="female">Female
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
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Mobile*</label>
                                                <input class="form-control" name="mobile" type="" placeholder="Enter Mobile Number" pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" value="<?php echo $row['mobile']; ?>" required>
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
                                                <input class="form-control" name="password" input type="password" placeholder="Enter password" value="<?php echo $row['password']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Confirm Password*</label>
                                                <input class="form-control" name="password" input type="password" placeholder="Enter password" value="<?php echo $row['password']; ?>" required>
                                            </div>
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
</form>

<?php include("footer.php"); ?>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/startmin.js"></script>