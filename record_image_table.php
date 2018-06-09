<?php include 'header.php' ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                    <div class="col-md-12">
                     <h2>All Image Record Table</h2>  
                        <h5>Welcome <b><?php echo $_SESSION['username'] ?> </b>, Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                    $result = mysqli_query($con, "SELECT image_upload.id,users.fullname,users.name,image_upload.file,image_upload.Img_Format FROM image_upload inner join users ");
                                ?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>                               
                                            <th>Full Name</th>
                                            
                                            <th>User Name</th>
                                            <!-- <th>Time/Date</th> -->
                                             
                                             <th>File Name</th>
                                             <th>Image Format</th>
                                             
                                        </tr>
                                    </thead>
                                    
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
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
