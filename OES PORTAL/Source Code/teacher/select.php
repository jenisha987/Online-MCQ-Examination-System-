<?php

include("check.php");

?>
<?php

include("connect.php");

?>
<?php




unset($_SESSION['branch']);
unset($_SESSION['sem']);
unset($_SESSION['subject']);

if (isset($_POST['submit'])) {
  $branch = $_POST['branch'];
  $sem = $_POST['sem'];
  $subject = $_POST['subject'];

  $_SESSION['branch'] = $branch;
  $_SESSION['sem'] = $sem;
  $_SESSION['subject'] = $subject;

  if (!empty($_SESSION['branch']) && !empty($_SESSION['sem']) && !empty($_SESSION['subject'])) {
    header('location:addquestion.php');
    exit();
  }
}

$sql = "SELECT * from teacher where id='" . $_SESSION['user_id'] . " '";
$result = $conn->query($sql)->fetch_assoc();
include("header.php");
?>


<form method="POST" action="select.php" method="POST">

  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h3 style="margin-top: 5%;">Paper Generation</h3>
          <p class="text-center">Select Branch, Semester & Subject</p>

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
                      <label>Branch </label>
                      <select name="branch" class="form-control" id="branch" required autofocus>
                        <option value="">--Select Branch--</option>

                        <option value="civil">CIVIL ENGINEERING</option>
                        <option value="computer">COMPUTER ENGINEERING</option>
                        <option value="ec">ELECTRONICS & COMMUNICATION ENGINEERING</option>
                        <option value="architecture">ARCHITECTURE</option>

                      </select>
                    </div>

                    <div class="form-group">
                      <label>Semester </label>

                      <select name="sem" class="form-control col-md-5" id="sem11" required>
                        <option value="">---</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>

                    </div>

                    <div class="form-group">
                      <label>Subject </label>

                      <input type="text" name="subject" class="form-control" id="subject" value="<?php echo $_SESSION['user_subject']; ?>">




                    </div>

                    <div class=" form-group">
                      <button type="submit" class="btn btn-default" name="submit">Next</button>
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

<head>

  <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>


  <script language="javascript" type="text/javascript">
    $('#sem11').change(function() {

      var sem = $(this).val();
      var branch = $("#branch").val();
      //alert(branch);
      $.ajax({
        url: 'get_subject_ajax.php',
        type: 'POST',
        data: 'branch=' + branch + '&sem=' + sem,
        success: function(data) {
          var subject = $.parseJSON(data);
          $('#subject').html(subject);
        }
      });
    });

    $('#branch').change(function() {
      var sem = $("#sem").val();
      var branch = $(this).val();
      $.ajax({
        url: 'get_subject_ajax.php',
        type: 'POST',
        data: 'branch=' + branch + '&sem=' + sem,
        success: function(data) {
          var subject = $.parseJSON(data);
          $('#subject').html(subject);
        }
      });
    });
    // $('#branch').on('change',function(){
    //   var sem = $('#sem').val();
    //   var branch = $(this).val();
    //   $.ajax({
    //     url: '../admin/get_subject_ajax.php',
    //     type: 'POST',
    //     data: 'branch='+branch+'&sem='+sem,
    //     success: function(data){
    //       var subject = $.parseJSON(data);
    //       $('#subject').html(subject);
    //     }
    //   });
    // });
  </script>
</head>