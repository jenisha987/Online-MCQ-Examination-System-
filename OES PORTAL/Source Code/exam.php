<?php
include("check.php");
?>
<?php
//session_start();
include("connect.php");
include("header.php");
?>
    
    	<form  method="POST" action="examination.php" >

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3 style="margin-top: 5%;">Start Examination</h3> 
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                         <p class="text-center">Hello Students, <span class="text-danger">Are you ready for the examination ?</span> Let's start here!</p>
                    <input type="hidden" id="sem" value="<?php echo $_SESSION['user_sem']; ?>">

                    <input type="hidden" id="branch" value="<?php echo $_SESSION['user_branch']; ?>">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label >Subject </label>
                        
                            <select name="subject" class="form-control" id="subject" required>
                                <option value="">-- Select Subject --</option>
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-default">Next</button>
                    </div>

                </div>
                                           </form>         
                                        </div>
                                       
                                    </div>
                                  
                                </div>
                               
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
                                 
  
<script language="javascript" type="text/javascript">

        var sem = $('#sem').val();
        
        var branch = $('#branch').val();
        $.ajax({
            url: 'get_subject_ajax.php',
            type: 'POST',
            data: 'branch='+branch+'&sem='+sem,
            success: function(data){
                var subject = $.parseJSON(data);
                $('#subject').html(subject);
            }
        });


</script>