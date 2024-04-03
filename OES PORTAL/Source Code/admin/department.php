<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");

?>
<?php 

unset($_SESSION['branch']);
unset($_SESSION['sem']);
unset($_SESSION['subject']);

if(isset($_POST['submit']))
{
  $branch=$_POST['branch'];
  $sem=$_POST['sem'];
  $subject=$_POST['subject'];

  $_SESSION['branch']=$branch;
  $_SESSION['sem']=$sem;
  $_SESSION['subject']=$subject;

  if(!empty($_SESSION['branch']) && !empty($_SESSION['sem']) && !empty($_SESSION['subject'])){
    header('location:addquestion.php');
    exit();
  }
  
}

?>

 
    	<form  method="POST" action="select1.php">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3 style="margin-top: 5%;">Add Subject</h3> 
                           <p class="text-center">Select Branch, Subject Code, Semester & Subject</p>
        
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
            
            <label >Branch </label>
           
              <select name="branch" class="form-control" id="branch" required autofocus>
                <option value="">--Select Branch--</option>
                
                <option id="civil" value="Civil">CIVIL ENGINEERING</option>
                <option id="computer" value="Computer">COMPUTER ENGINEERING</option>
                <option id="electrical" value="Electrical">ELECTRICAL ENGINEERING</option>
                <option id="ec" value="Elex & Comm">ELECTRONICS & COMMUNICATION ENGINEERING</option>
                <option id="architecture" value="Architecture">ARCHITECTURE</option>
                
              </select>
            
          </div>
          <label>Subject Code:</label>
            
           <div class="form-group">
            <input type="text" name="code" id="code" class="form-control col-md-5" required >
          </div>

          <div class="form-group">
            <label >Semester </label>
            
              <select name="sem" class="form-control col-md-5" id="sem11" required>
                <option value="">---</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            
          </div>

          <div class="form-group">
            <label>Subject </label>
              <input type="text" name="subject" class="form-control" >
          </div>

          <div class="form-group">
          <label>Assign Teacher</label>
          <?php
            $sql = "SELECT * FROM teacher";
            $result = $conn->query($sql);

            // Check if there are rows in the result
            if ($result->num_rows > 0) {
              // Start HTML dropdown markup
              echo '<select name="optionsDropdown" class="form-control">';

              // Loop through the result set
              while ($row = $result->fetch_assoc()) {
                // Output option tag for each row
                echo '<option value="' . $row["fname"] . '">' . $row["fname"] . '</option>';
              }

              // Close HTML dropdown markup
              echo '</select>';
            } else {
              echo "No options found in the database.";
            }

          ?>

          </div>
          
           <div class="form-group">
            <button type="submit" class="btn btn-default" name="submit">Add</button>
          </div>

        </form>
                         
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


<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>


<script language="javascript" type="text/javascript">

  $('#sem11').change(function(){
  
    var sem = $(this).val();
    var branch = $("#branch").val();
     //alert(branch);
    $.ajax({
      url: 'get_subject_ajax.php',
      type: 'POST',
      data: 'branch='+branch+'&sem='+sem,
      success: function(data){
        var subject = $.parseJSON(data);
        $('#subject').html(subject);
      }
    });
  });

  $('#branch').on('change',function(){
    var sem = $('#sem').val();
    var branch = $(this).val();
    $.ajax({
      url: 'get_subject_ajax.php',
      type: 'POST',
      data: 'branch='+branch+'&sem='+sem,
      success: function(data){
        var subject = $.parseJSON(data);
        $('#subject').html(subject);
      }
    });
  });
  
// function subject(v)
//   {
//     if(v==1)
//       {
//         function semester(sem)
//           {
//             if(sem==1)
//               {
//                 <div class="form-group">
//             <label>Subject </label>
           
//               <select name="subject" class="form-control" id="subject" required >
//                 <option value="">--Select Subject--</option>
//                 <option value="1" id="comp">Algorithm Analysis &amp; Design</option>
//                 <option value="1" id="comp">Computer Graphics</option>
//               </select>
           
//           </div>
//               }
//           }
//       }
//   }


</script>