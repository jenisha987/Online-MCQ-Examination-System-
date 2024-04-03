


<?php
include("header.php");

include("connect.php");
//session_start();
 ?>

<?php



$sql = "select * from author ";
$result=$conn->query($sql);
   $row=$result->fetch_assoc(); 

?>


	
	<div id="page-wrapper">
                
                    <div class="row">
                        <div class="col-lg-12">
                           <h3 style="margin-top: 5%;">Author Details</h3> 
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
					  <div class="form-group">
						<b><span class="lbl">&nbsp;&nbsp;&nbsp;Name : </span></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						 
						<span class="data"><?php echo $row['fname']." ".$row['lname']; ?></span>
					</div>
					  <div class="form-group">
						<b><span class="lbl">&nbsp;&nbsp;&nbsp;Specilization : </span> </b>
						<span class="data"><?php echo $row['specilization']; ?></span>
					</div>
					  <div class="form-group">
					<b>	<span class="lbl">&nbsp;&nbsp;&nbsp;About Me : </span> </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="data"><?php echo $row['about'];  ?></span>
					</div>
					  <div class="form-group">
					<b>	<span class="lbl">&nbsp;&nbsp;&nbsp;Contact No : </span> </b>&nbsp;&nbsp;
						<span class="data"><?php echo $row['mobile']; ?></span>
					</div>
					  <div class="form-group">
					<b>	<span class="lbl">&nbsp;&nbsp;&nbsp;Email: </span> </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="data"><?php echo $row['email']; ?></span>
					</div>
					<div class="form-group">
					<b>	<span class="lbl">&nbsp;&nbsp;&nbsp;Important: </span> </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="data"><b>I am available for any freelancing work related to PHP,Codeignitor or Laravel.<b>  </span><br><br>&nbsp;&nbsp;&nbsp;  <a href="https://wa.me/919423979339?text=I%20seen%20your%20source%20code%20on%20sourcecodester" target="_blank"class="float"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" ><i class="fab fa-whatsapp fa-7x" style="font-size:2em;">&nbsp;&nbsp;</i>Click here to Contact me by WhatsApp</a>
<br><br>&nbsp;&nbsp;&nbsp; 



<a href="https://m.me/freelancer.from.india" target="_blank"class="float2"><link rel="stylesheet" ><i class="fab fa-facebook-messenger fa-7x" style="font-size:2em;">&nbsp;&nbsp;</i>Click here to Contact me by Messenger</a>

<br><br>&nbsp;&nbsp;&nbsp; 



<a href="https://www.youtube.com/channel/UCnTEh3OFRS1wP0-Wqm2D-rA" target="_blank"class="float2"><link rel="stylesheet" ><i class="fab fa-youtube fa-7x" style="font-size:2em;">&nbsp;&nbsp;</i>Click here to see Video Demos of my other source code</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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


