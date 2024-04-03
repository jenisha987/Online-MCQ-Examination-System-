<?php
include("check.php");
?>
<?php
include("check.php");
include("header.php");
include("connect.php");

  $sql="SELECT * from user where delete_status='0' and uid='".$_GET['uid']." '";
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
    
<body>
	<form method="POST" action="edituser2.php?uid=<?php echo $_GET['uid'];?>" enctype="multipart/form-data">
		 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Edit User</h1> 
                        </div>
                         
                        <!-- /.col-lg-12 -->
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
                                                    <label>First Name</label>
                                                    <input class="form-control"name="fname" value="<?php echo $result['fname']?>"  required>
                                                  </div>  
                                                </div>
                                                
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control"name="lname" value="<?php echo $result['lname']?>"required>
                                                  </div>  
                                                </div>
                                                
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control"name="address" value="<?php echo $result['address']?>" required>
                                                  </div>  
                                                </div>
                                                <div class="col-lg-6">

                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input class="form-control"name="city" placeholder="Enter Your City" value="<?php echo $result['city']?>" required>
                                                  </div>  
                                                </div>
                                                <div class="col-lg-6">

                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select class="form-control"name="state" value="<?php echo $result['state']?>" >

                                                        <option  >Select State</option>
                                                        <option <?php if('Maharashtra'==$result['state']){echo "selected";}?>>Maharashtra</option>
                                                        <option <?php if('Goa'==$result['state']){echo "selected";}?>>Goa</option>
                                                        <option <?php if('Gujrat'==$result['state']){echo "selected";}?>>Gujrat</option>
                                                        <option <?php if('kerla'==$result['state']){echo "selected";}?> >Kerla</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                               <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input class="form-control"name="pcode" placeholder="Enter Post Code" value="<?php echo $result['pcode']?>" required>
                                                    </div>
                                                </div>
                                               <div class="col-lg-6">

                                                
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input class="form-control"name="mobile" value="<?php echo $result['mobile']?>" required pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)">
                                                  </div>  
                                                </div>
                                                <div class="col-lg-6">

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"name="email" value="<?php echo $result['email']?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                    <div class="form-group">
                                                    <label>Profile</label>
                                                    <img src="image/<?php echo $result['profile']?>" width="10%">
                                                     <input type="hidden" name="old_image" value="<?php echo $result['profile']?>">
                                                        <br>
                                                        <br>

                                                    <input type="file" name="profile" value="<?php echo $result['profile']?>">
                                                </div>
                                                </div>
                                              <!--  <div class="col-lg-6">

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="1" <?php if($result['status']=='1'){echo "checked";}?> >Active
                                                        </label>
                                                    </div>
                                                
                                                

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="0" <?php if($result['status']=='0'){echo "checked";}?>>Diactive
                                                        </label>
                                                    </div>
                                                </div>-->
                                                <div class="col-lg-12">

                                                        <div class="form-group">
                                                           <center>     <button type="submit" class="btn btn-default" name="btn"> Submit</button> </center> </div>
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
                                 
  
  
</body>
</html>
<?php
include("footer.php");
?>
 <!-- /#wrapper -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>


