
<?php
include("header.php");
include("connect.php");





if(isset($_POST['btn']))
{
  $pass = md5($_POST['password']);

  $sql="insert into registration(fname,lname,gender, username,branch,mobile ,email,password,cdate)values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['gender']."','".$_POST['username']."','".$_POST['branch']."','".$_POST['mobile']."','".$_POST['email']."','".$pass."',CURDATE())";

  if($conn->query($sql)==TRUE)
  {
    echo"Record Inserted Sucessfully ";?>
    
    <!--<script>window.location='viewuser.php';</script>-->
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}

?>
 <script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
    
    	<form  method="POST" enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3 style="margin-top: 5%;">Examinar Registration</h3> 
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
                                                    <input class="form-control"name="fname" placeholder="Enter First Name" required >
                                                   </div> 
                                                </div>
                                                
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Last Name*</label>
                                                    <input class="form-control"name="lname" placeholder="Enter Last Name" required>
                                                    </div>
                                                </div>

                                                 <div class="col-lg-6" >
                                                <div class="form-group">
                                                    <label>Gender*</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender"  value="male" checked>Male
                                                        </label>
                                                    </div>
                                                
                                                 
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender"  value="female">Female
                                                        </label>
                                                    
                                                </div>
                                                </div>
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Username*</label>
                                                    <input class="form-control"name="username" placeholder="Enter Your Address" required>
                                                    </div>
                                                </div>
                                                 
                                                 <div class="col-lg-6">
                                                <div class="form-group">
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
                                             
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Mobile*</label>
                                                    <input class="form-control"name="mobile" type="" placeholder="Enter Mobile Number"
                                                    pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" required>
                                                   </div> 
                                                </div>
                                                 <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email*</label>
                                                    <input class="form-control"name="email" placeholder="Enter Email" type="email" required>
                                                </div>
                                            </div>
                                             
                                                   
                                             <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Password*</label>
                                                    <input class="form-control"name="password" input type="password" placeholder="Enter password"  required>
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


