<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script> 
             
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                 
                
            } 
        </script>
    </head>
   
<body>

  
      <form  method="POST" onSubmit = "return checkPassword(this)"  action="pass.php">

            <div id="page-wrapper">
                <div class="container-fluid"><br><br><br>
                    <div class="row">
                        <div class="col-lg-12">
                        <h1 style="margin-left: 20%;"> Change Password</h1> 
                        </div>
                        
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                          
                                            <form role="form">

                                                
                                                    
                                                
                                                
                                                    <div class="form-group" >
                                                    <label style="margin-left: 40%;"> Old Password</label>
                                                    <input class="form-control"name="password" type="password" style="margin-left: 40%;" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <label style="margin-left:40%;">New Password</label>
                                                    <input class="form-control"name="password1" type="password"  style="margin-left: 40%;" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <label style="margin-left:40%;">Confirm Password</label>
                                                    <input class="form-control"name="password2" type="password"  style="margin-left:40%;" required>
                                                    </div>
                                                    
                                                
                                   <center>   <div class="form-group">
                                         <button type="submit" class="btn btn-default" name="btn">Submit</button></center>
                                        </div>
                                                           
                                                    
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