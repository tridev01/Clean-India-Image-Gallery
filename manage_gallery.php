<?php include 'header.php'; ?>
        <div id="page-wrapper" >
            <div id="page-inner">

                <form method="post" action="deleteMultipleData.php">
                <div class="row">
                    
                    <div class="col-md-9">
                     <h2>Manage Gallery</h2>  
                        <h5>Welcome <b><?php echo $_SESSION['username'] ?> </b>, Love to see you back. </h5>
                    </div>
                    <div class="col-md-3">
                        <input name="delete" type="submit" id="delete" class="btn btn-danger" value="Delete" onClick="return show_confirm22();" >
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 
                 <?php 
                 $sqlimage  = mysqli_query($con,"SELECT * FROM image_upload ORDER BY id DESC");
                    while($rows=mysqli_fetch_assoc($sqlimage))
                    {
                        $img_name = $rows['file'];
                        ?>
                        <div class="col-md-3 col-sm-6" >
                       <input type="checkbox" name="selected_id[]" class="case" value="<?php echo $rows['id']; ?>"><img class="img-thumbnail box" src="upload/<?php echo $img_name; ?>"  />
                    </div>
                   <?php     
                    } 
                 ?>      
                 </form>
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

    <script type="text/javascript">
      function show_confirm22()
    {
    var r=confirm("The entry will be parmanently deleted!");
    if (r==true)
    {return true;
    }
    else
    {
    return false;
    }
    }
    </script>
    
   
</body>
</html>
