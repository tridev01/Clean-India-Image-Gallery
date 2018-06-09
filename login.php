<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gallery</title>

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
  <body >
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
            <a class="navbar-brand" href="#">Gallery</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      </div>
    </header>
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="login_done.php" name="login" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pw" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="register_done.php" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="fullname" id="fullname" tabindex="1" class="form-control" placeholder="Full Name" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="pw" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="pw2" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
  </html>