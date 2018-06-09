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
    <div class="container">
       <div class="panel panel-default">
      <div class="panel-body">

      <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              ADDRESS
            </h4>
            <address>
              C-7/ 114, IInd and IIIrd Floor, Sector-7
              <br>
              Near Rohini East Metro Station, Rohini
              <br>
              New Delhi, Delhi 110085, India
            </address>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              OPEN HOURS
            </h4>
            <p>
              Monday - Saturday 7am to 9pm
              <br>
              Sunday - 10am to 5pm
              <br>
              Fourth Sunday - Closed
              <br>
            </p>
          </section>
          <section class="contact-infos">
            <h4>
              TELEPHONE
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              Helpline 1: +91 9811 - 818 - 122

            </p>

            <p>
              <i class="icon-phone">
              </i>
              Helpline 2: +91 9911 - 782 - 350
            </p>

          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h4>
            Drop us a line so that we can hear from you
          </h4>
          <div class="contact-form">
            <form role="form">
              <div class="form-group">
                <label for="name">
                  Name
                </label>
                <input type="text" placeholder="" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="text" placeholder="" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Phone
                </label>
                <input type="text" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Message
                </label>
                <textarea placeholder="" rows="5" class="form-control">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit">
                Submit
              </button>
            </form>

          </div>
        </div>
      </div>
      <div class="contact-map">
      <div id="map-canvas" style="width: 100%; height: 400px">
      </div>
    </div>
      </div>
      </div>
    </div>
    <!--container end-->

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
    <script>
     
      //google map
      function initialize() {
        var myLatlng = new google.maps.LatLng(51.508742,-0.120850);
        var mapOptions = {
          zoom: 5,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Contact'
        }
                                           );
      }
      google.maps.event.addDomListener(window, 'load', initialize);



    </script>
  </body>
</html>
   


