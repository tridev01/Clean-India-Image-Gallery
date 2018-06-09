<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clean India Gallery</title>
    <?php include 'connect.php' ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
   
  </head>
  <body id="body_image">
    <div class="wrapper">
    <header >
      <div class="container ">
      <nav class="navbar navbar-default top_space">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Clean India Gallery</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      </div>
    </header>
    <section>
      <div class="container gallery">
             
      <?php 
      if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
      $start_from = ($page-1) * 12;
      $sqlimage  = mysqli_query($con,"SELECT * FROM image_upload ORDER BY id DESC LIMIT $start_from, 12");

      if($sqlimage){
      while($rows=mysqli_fetch_assoc($sqlimage))
      {
          $img_name = $rows['file'];
          ?>
          <div class="col-md-3 col-sm-6" >
         <a  data-title="My First Caption" data-lightbox="Image Gallery" href="upload/<?php echo $img_name; ?>"><img class="img-thumbnail box" src="upload/<?php echo $img_name; ?>" /></a>
      </div>
     <?php     
      } 
    }
      else{
            echo "failure! check for errors and do something else";
      };
   ?>      
      </div>
    </section>

    <div class="seeall_div2">
      <!--   NAVIGATION FOR BLOG POST -->
          <div class="blog_navigation">
              <div style="margin-top:20px;margin-left:180px">
         
              <?php
              $sql = "SELECT COUNT(file) FROM image_upload";
              $rs_result = mysqli_query($con,$sql);
              $row = mysqli_fetch_row($rs_result);
              $total_records = $row[0];
              $total_pages = ceil($total_records / 12);
              if($rs_result === false) 
              {
                echo "error while executing mysql: " . mysqli_error($con);
               } 
               else 
               { ?>
                <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    
                    <a href="<?php echo 'index.php?page=".($page-1)."' ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                    
                  </li>
                  <?php for ($i=1; $i<=$total_pages; $i++) { ?>
                  
                    <li><a href='<?php echo "index.php?page=$i" ?>'><?php echo $i ?></a></li>
                  
                  <?php }}; ?>
                  <li>
                    <a href="<?php echo 'index.php?page=".($page+1)."' ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>                      
                  
              </div>
          </div>
        </div>


    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-6">
            <div class="left">
              <p>Copyright @ 2016</p>
            </div>
            <div class="right">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-google-plus"></i></li>
              <li><i class="fa fa-youtube"></i></li>
            </ul>
            </div>
          </div>

        </div>

      </div>
    </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>

  </body>
</html>