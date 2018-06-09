<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
</head>

<body>
<h2>Login Page</h2>
<?php
   	include 'connect.php';	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if(isset($_POST['pw'])){
		$pw = $_POST['pw'];
	}
	
	$mysql = mysqli_query($con, "select * from users where name='$username' && pw=sha1($pw) limit 1");
	//echo md5($pw);
	//echo mysql_num_rows(mysql_query("select * from users where name='$username' && pw='$pw'"));
		
	//echo ($pw);
	//exit();
		
	$user = mysqli_num_rows($mysql);
	if($user == 1){
		$_SESSION['username'] = $username;
		//$_SESSION[$pw];			
		
		if(isset($_SESSION['username'])){
			header("location:adminpanel.php");			
		}
	}else{
		echo "Username or password incorrect<br><a href='login.php'>Try again</a>";
	}
?>
 <br />
    <br />
    <a href="edit.php"><?php if(isset($_SESSION['username'])){echo $_SESSION['username']," "; }?>Click here to change your password.</a>
</body>
</html>