<?php include 'header.php' ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome <b><?php echo $_SESSION['username'] ?> </b>, Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">0 JPG</p>
                    <p class="text-muted">Images</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">0 GIF</p>
                    <p class="text-muted">Images</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">0 PNG</p>
                    <p class="text-muted">Images</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Request</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr /> 



                <div class="row" >
                    <!-- <div class="col-md-3 col-sm-12 col-xs-12">
  <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-comments-o fa-5x"></i>
                            <h4>200 New Comments </h4>
                             <h4>See All Comments  </h4>
                        </div>
                        <div class="panel-footer back-footer-green">
                             <i class="fa fa-rocket fa-5x"></i>
                            Lorem ipsum dolor sit amet sit sit, consectetur adipiscing elitsit sit gthn ipsum dolor sit amet ipsum dolor sit amet
                            
                        </div>
                    </div>
                    </div> -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Last Upload Image Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                
    <?php
        $result = mysqli_query($con, "SELECT image_upload.id,users.fullname,users.name,image_upload.file,image_upload.Img_Format FROM image_upload inner join users ");
    ?>
    <!-- image_upload.S_no.,image_upload.F_Name,image_upload.L_Name,users.name,image_upload.DateTime,image_upload.file, image_upload.Img_Format -->
        <table class="table table-striped table-bordered table-hover">
        <!-- <tr> <th colspan='3'>Companies</th> </tr> -->
         <tr>
            <th>#</th>                               
            <th>Full Name</th>
            
            <th>User Name</th>
            <!-- <th>Time/Date</th> -->
             
             <th>File Name</th>
             <th>Image Format</th>
             
        </tr>

    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
        <tr><td> <?php echo $row['id'] ?> </td><td> <?php echo $row['fullname'] ?> </td><td> <?php echo $row['name']  ?> </td><td> <?php  echo $row['file']  ?> </td><td> <?php  echo $row['Img_Format']  ?> </td></tr>
    <?php
        }
    ?>
        </table>
    <?php
        mysqli_close($con);
    ?>

                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                 <!-- /. ROW  -->

                        
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
