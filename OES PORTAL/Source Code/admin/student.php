<?php
include("header.php");
include("connect.php");
// include("general.php");
//



if (isset($_REQUEST['btn'])) {
  $password = $_POST['password'];
  $enroll = $_POST['enroll'];
  $cdate = date('Y-m-d h:i:s');
  $mdate = date('Y-m-d h:i:s');
  $result = $conn->query("select * from student where enroll=$enroll");
  // echo mysqli_num_rows($result);exit();
  if (mysqli_num_rows($result) > 0) {
    $_GLOBALS['message'] = "Sorry the Enrollment Number you entered is not available. Try with some other name.";
?>
    <script>
      alert('Sorry the Enrollment Number you entered is not available. Try with some other name');
      window.location = 'student.php';
    </script>
  <?php
  } else if (empty($_REQUEST['fname']) || empty($_REQUEST['lname']) || empty($_REQUEST['gender']) || empty($_REQUEST['enroll']) || empty($_REQUEST['password']) || empty($_REQUEST['pswd_again']) || empty($_REQUEST['branch']) || empty($_REQUEST['dob']) || empty($_REQUEST['sem']) || empty($_REQUEST['email']) || empty($_REQUEST['phone'])) {

    $q = "insert into student(fname,lname,gender,enroll,branch,sem,dob,email,mobile,address,password)
    values ('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['gender'] . "','" . $_POST['enroll'] . "','" . $_POST['branch'] . "','" . $_POST['sem'] . "','" . $_POST['dob'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['address'] . "','" . $_POST['password'] . "')";

    $res = $conn->query($q); ?>
    <script>
      window.location = 'student.php';
    </script>
<?php
    $r_id = mysqli_insert_id($conn);
    $pass = $_POST['password'];
    $q1 = "insert into login(r_id, username, password) values ('$r_id', '$enroll','" . $pass . "')";
    $res1 = $conn->query($q1);
  }
}

?>
<script type="application/javascript">
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

    return true;
  }
</script>
<script type="text/javascript">
  function val() {
    //validation
    var txtname = document.getElementById("firstname").value;
    var validtxtname = /[^a-zA-Z]+/i;
    var count = 0;

    if (validtxtname.test(txtname)) {
      document.getElementById("nm1").innerHTML = "Invalid First Name!";
      count++;
    } else {
      document.getElementById("nm1").innerHTML = "";
    }
    var txtname = document.getElementById("lastname").value;
    var validtxtname = /[^a-zA-Z]+/i;
    var count = 0;
    if (validtxtname.test(txtname)) {
      document.getElementById("nm2").innerHTML = "Invalid Last Name!";
      count++;
    } else {
      document.getElementById("nm2").innerHTML = "";
    }
    var txtname = document.getElementById("cityInput").value;
    var validtxtname = /[^a-zA-Z]+/i;
    var count = 0;
    if (validtxtname.test(txtname)) {
      document.getElementById("city").innerHTML = "Enter Valid City Name!";
      count++;
    } else {
      0
      document.getElementById("city").innerHTML = "";
    }

    var txtname = document.getElementById("enrollmentNumber").value;
    var validtxtname = /\D$/i;
    var count = 0;
    if ((txtname.length != 12 && txtname.length > 0) || isNaN(txtname)) {
      document.getElementById("erno").innerHTML = "Please Enter Valid Enrollment of 12 Digits !!";
      count++;
    } else {
      document.getElementById("erno").innerHTML = "";
    }
    var txtname = document.getElementById("pinNumber").value;
    var validtxtname = /\D$/i;
    var count = 0;
    if ((txtname.length != 6 && txtname.length > 0) || isNaN(txtname)) {
      document.getElementById("pin").innerHTML = "Enter Valid 6 Digit PIN !!";
      count++;
    } else {
      document.getElementById("pin").innerHTML = "";
    }
    var txtname = document.getElementById("contactNumber").value;
    var validtxtname = /\D$/i;
    var count = 0;
    if ((txtname.length != 10 && txtname.length > 0) || validtxtname.test(txtname)) {
      document.getElementById("en").innerHTML = "Enter Valid 10 Digit Phone Number !!";
      count++;
    } else {
      document.getElementById("en").innerHTML = "";
    }
    var pass = document.getElementById("passwordText").value;
    var validpass = /^[a-zA-Z0-9@_]{4,10}$/;
    var count = 0;
    if ((pass.length <= 6 || pass.length >= 16)) {
      document.getElementById("pass1").innerHTML = "Your Password Must Be Between 6 to 14 Character!!";
      count++;
    } else {
      document.getElementById("pass1").innerHTML = "";
    }

    if (count > 0) {
      return false;
    }

  }
</script>

<form method="POST" enctype="multipart/form-data">

  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header">User Registration</h3>
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
                          <input class="form-control" name="fname" placeholder="Enter First Name" onkeyup="val()" id="firstname" required>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Last Name*</label>
                          <input class="form-control" name="lname" placeholder="Enter Last Name
                                                    " onkeyup="val()" id="lastname" required>
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
                          <label>Enrollment No. *</label>

                          <input type="text" name="enroll" onkeyup="val()" class="form-control" id="enrollmentNumber" placeholder="Enrollment No." data-toggle="tooltip" data-placement="right" title="valid enroll" required />
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-lg-6">
                          <label>Select Branch*</label>
                          <select name="branch" class="form-control" id="selectBranch" required>
                            <option value="">- - Select Branch - -</option>
                            <option value="automobile">AUTO MOBILE ENGINEERING</option>
                            <option value="biomedical">BIO MEDICAL ENGINEERING</option>
                            <option value="biomedical">CIVIL ENGINEERING</option>
                            <option value="computer">COMPUTER ENGINEERING</option>
                            <option value="electrical">ELECTRICAL ENGINEERING</option>
                            <option value="ec">ELECTRONICS &amp; COMMUNICATION ENGINEERING</option>
                            <option value="it">INFORMATION TECHNOLOGY</option>
                            <option value="ic">INSTRUMENTION &amp; CONTROL ENGINEERING</option>
                            <option value="mechanical">MECHANICAL ENGINEERING</option>
                            <option value="plastic">PLASTIC ENGINEERING</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-lg-6">
                          <label>Semester* </label>

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
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Birth Date*</label>
                          <input class="form-control" name="dob" input type="date" onkeyup="val()" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Mobile*</label>
                          <input class="form-control" name="mobile" type="" placeholder="Enter Mobile Number" pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Email*</label>
                          <input class="form-control" name="email" placeholder="Enter Email" type="email" required>
                        </div>
                      </div>


                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Password*</label>
                          <input class="form-control" name="password" input type="password" placeholder="Enter password" required>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Confirm Password*</label>
                          <input class="form-control" name="pswd_again" input type="password" placeholder="Enter password" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Address*</label>
                          <textarea class="form-control" rows="3" name="address"></textarea>
                        </div>
                      </div>
                      <!-- <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>city*</label>
                                                    <input class="form-control"name="city" input type="city" placeholder="Enter Your City"  onkeyup="val()" required>
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                     <div class="col-lg-6">
            <label >PIN </label>
           
              <input type="text" name="pin" class="form-control" id="pinNumber" onkeyup="val()" placeholder="6-digit PIN Number" />
            </div>
          </div>  


                                                 -->

                      <div class="col-lg-12">
                        <center>
                          <div class="form-group">
                            <p>* Fields marked with an asterisk sign are required</p>
                            <button type="submit" class="btn btn-default" name="btn">Submit</button>
                        </center>
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