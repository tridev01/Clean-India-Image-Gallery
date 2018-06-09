<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WELCOME TO MY WEBSITE</title>
</head>

<body>
<h2>Welcome to My Website</h2>
<?php
   	include 'connect.php';
   	if(isset($_SESSION['username'])){
		echo "Hello!". $_SESSION['username'] ."<br>You have successfully logged in.<br>";
			echo "<a href='logout.php'>Logout or Signout</a> | <a href='admin.php'>go to dashboard</a>";
	}else{
		header('location:login.php');
	}
?>

</body>
</html>