

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
</head>
   
<body>

  
      <form  method="POST"  action="profile1.php" enctype="multipart/form-data">
<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");

$sql="SELECT * from registration where delete_status='0' and id='".$_SESSION['id']." '";
  $result=$conn->query($sql)->fetch_assoc();
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
</head>
   
<body>

  
      <form  method="POST"  action="profile1.php" enctype="multipart/form-data">

           
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3>Examinar Registration</h3> 
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
                                                    <input class="form-control"name="fname" placeholder="Enter First Name" value="<?php echo $result['fname']?>"required >
                                                   </div> 
                                                </div>
                                                
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Last Name*</label>
                                                    <input class="form-control"name="lname" placeholder="Enter Last Name"value="<?php echo $result['lname']?>" required>
                                                    </div>
                                                </div>

                                                 <div class="col-lg-6" >
                                                <div class="form-group">
                                                    <label>Gender*</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender"  value="male" <?php if($result['gender']=='male'){echo "checked";}?>  checked>Male
                                                        </label>
                                                    </div>
                                                
                                                 
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender"  value="female" <?php if($result['gender']=='female'){echo "checked";}?> >Female
                                                        </label>
                                                    
                                                </div>
                                                </div>
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Username*</label>
                                                    <input class="form-control"name="username" placeholder="Enter Username" value="<?php echo $result['username']?>" required>
                                                    </div>
                                                </div>
                                                 
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                  <label>Select Branch*</label>
                                                    <select name="branch" class="form-control" id="selectBranch" required>
                            <option value="">- - Select Branch - -</option>
                            <option <?php if('automobile'==$result['branch']){echo "selected";}?>>AUTO MOBILE ENGINEERING</option>
                            <option <?php if('biomedical'==$result['branch']){echo "selected";}?>>BIO MEDICAL ENGINEERING</option>
                            <option <?php if('biomedical'==$result['branch']){echo "selected";}?>>CIVIL ENGINEERING</option>
                            <option <?php if('computer'==$result['branch']){echo "selected";}?>>COMPUTER ENGINEERING</option>
                            <option <?php if('electrical'==$result['branch']){echo "selected";}?>>ELECTRICAL ENGINEERING</option>
                            <option <?php if('ec'==$result['branch']){echo "selected";}?>>ELECTRONICS &amp; COMMUNICATION ENGINEERING</option>
                            <option <?php if('it'==$result['branch']){echo "selected";}?>>INFORMATION TECHNOLOGY</option>
                            <option <?php if('ic'==$result['branch']){echo "selected";}?>>INSTRUMENTION &amp; CONTROL ENGINEERING</option>
                            <option <?php if('mechanical'==$result['branch']){echo "selected";}?>>MECHANICAL ENGINEERING</option>
                            <option <?php if('plastic'==$result['branch']){echo "selected";}?>>PLASTIC ENGINEERING</option>
                        </select>
                                                </div>
                                            </div>
                                             
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Mobile*</label>
                                                    <input class="form-control"name="mobile" type="" placeholder="Enter Mobile Number"
                                                    pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" value="<?php echo $result['mobile']?>" required>
                                                   </div> 
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email*</label>
                                                    <input class="form-control"name="email" placeholder="Enter Email" type="email"
                                                    value="<?php echo $result['email']?>" required>
                                                </div>
                                            </div>
                                             
                                                   
                                             <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Password*</label>
                                                    <input class="form-control"name="password" input type="password" placeholder="Enter password" value="<?php echo $result['password']?>" required>
                                                    </div>
                                                </div>

                                             <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Confirm Password*</label>
                                                    <input class="form-control"name="password" input type="password" placeholder="Enter password"   required>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="col-lg-12">
                                   <center>   <div class="form-group">
                                    <p>* Fields marked with an asterisk sign are required</p>
                                         <button type="submit" class="btn btn-default" name="btn">Submit</button></center>
                                        </div></div>
                                                           
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
 
        <script src="../js/jquery.min.js"></script>

        
        <script src="../js/bootstrap.min.js"></script>

        
        <script src="../js/metisMenu.min.js"></script>

        
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        
        <script src="../js/startmin.js"></script>
        <script src="../js/jquery.min.js"></script>

       
        <script src="../js/bootstrap.min.js"></script>

        
        <script src="../js/metisMenu.min.js"></script>

        
        <script src="../js/startmin.js"></script>


