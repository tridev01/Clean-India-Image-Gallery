<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
</head>

<body>
	<h2>Logout</h2>   
	<?php
	   include 'connect.php';
	   session_destroy();
	   //header("location:index.php");	
	   echo "successfully loged out<br>";
	   echo "<a href='login.php'>Click to Login again.</a>";
	?>
     <br />
    <br />
    <a href="register.php">Click here to register as a new user.</a>
</body>
</html>