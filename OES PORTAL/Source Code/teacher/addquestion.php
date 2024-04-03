<?php
include("check.php"); 
?>
<?php
include("header.php");
include("connect.php");





if(isset($_POST['btn']))
{
	$sem=$_SESSION['sem'];
    $branch=$_SESSION['branch'];
    $subject=$_SESSION['subject'];
    $question=$_POST['question'];
    $option_a=$_POST['option_a'];
    $option_b=$_POST['option_b'];
    $option_c=$_POST['option_c'];
    $option_d=$_POST['option_d'];
    $answer=$_POST['answer'];

  $sql="insert into question(sem,branch,subject,question,option_a,option_b,option_c,option_d,answer)
    values('$sem','$branch','$subject','$question','$option_a','$option_b','$option_c','$option_d','$answer')";
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
 
    
    	<form  method="POST" enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3>Generate Paper</h3> 
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                          
                                            <form role="form">

                                                 <div class="form-group">
                <label >Enter Question </label>
                   
                        <textarea rows="5" cols="75" class="form-control" name="question" id="questionInput" placeholder="Question" required autofocus></textarea>
                    </div>
                
                <div class="form-group">
                <label >Option A </label>
                    
                        <input type="text" name="option_a" class="form-control" id="optionA" placeholder="Option A" required>
                    </div>
                
                <div class="form-group">
                <label >Option B </label>
                    
                        <input type="text" name="option_b" class="form-control" id="optionB" placeholder="Option B" required>
                    </div>
                

                <div class="form-group">
                    <label >Option C </label>
                    
                        <input type="text" name="option_c" class="form-control" id="optionC" placeholder="Option C" required>
                    
                </div>

                <div class="form-group">
                    <label>Option D </label>
                    
                        <input type="text" name="option_d" class="form-control" id="optionD" placeholder="Option D" required>
                  </div>
               

                <div class="form-group  ">
                    <label >Answer </label>
                    
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_a" required/>
                                <span class="label-text">A</span>
                            </div>
                        </label>
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_b" required/>
                                <span class="label-text">B</span>
                            </div>
                        </label>

                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_c" required/>
                                <span class="label-text">C</span>
                            </div>
                        </label>
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_d" required/>
                                <span class="label-text">D</span>
                            </div>
                        </label>

                    </div>
                </div>

                </div>
               
                    <button type="submit" name="btn" class="btn btn-default">Add Question</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </form>
            
            <a href="select.php" class="col-md-8 col-md-offset-3">Reset Branch &amp; Semester</a>

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
                                 
  
  

</html>
<?php
include("footer.php");
?>
 
        
        

