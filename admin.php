<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WELCOME TO MY WEBSITE</title>
</head>

<body>
<h2>Welcome to My Website</h2>
<?php
	include 'connect.php';
	if( loggedIn() ){
		echo "you were logged in.";
   	}else{
   		header('location:login.php');
   	}
?>

</body>
</html>