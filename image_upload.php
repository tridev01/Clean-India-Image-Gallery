<?php include_once 'header.php' ?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                    <div class="col-md-12">
                     <h2>Image Upload Form</h2>   
                        <h5>Welcome <b><?php echo $_SESSION['username'] ?> </b>, Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Image Upload
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    
                                    <form role="form" action="upload_file_script.php" method="post" enctype="multipart/form-data">
                                        <!-- <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" placeholder="PLease Enter Keyword" required/>
                                                                                 
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" placeholder="PLease Enter Keyword" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Date/Time</label>
                                            <input name="datetime" class="form-control" placeholder="PLease Enter Keyword"/>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="file">Image Upload</label>
                                            <input type="file" id="fileUpload" name="file" required/>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender" required>
                                                <option value="">(Select Gender)</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                                                                
                                            </select>
                                           
                                        </div> -->
                                        <div class="form-group">
                                            <label>Image Format</label>
                                            <select class="form-control" name="format" required>
                                                <option value="">(Select Image Type)</option>
                                                <option value="jpg">JPG</option>
                                                <option value="png">PNG</option>
                                                <option value="gif">GIF</option>
                                                
                                            </select>
                                        </div>
                                                                                                                 
                                        <button type="submit" name="submit" class="btn btn-default">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset</button>

                                    </form>
                                    
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <h3>Image Preview</h3>
                                    <div id="image-holder" >
                                    </div>
                                    </div>
                                         
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
        $("#fileUpload").on('change', function () {
 
        if (typeof (FileReader) != "undefined") {
 
            var image_holder = $("#image-holder");
            image_holder.empty();
 
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                }).appendTo(image_holder);
 
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });

    </script>
    
   
</body>
</html>
