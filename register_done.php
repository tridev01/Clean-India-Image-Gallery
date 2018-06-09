<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register_done</title>
</head>

<body>
	<h2>Register_done</h2>   
<?php
   	include 'connect.php';
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$pw2 = $_POST['pw2'];
		$error = "0";
		
		if(mysqli_num_rows(mysqli_query($con, "select name from users where name='$username'"))){
			echo "The username already exists<br>";
			$error = '1';
		}
		if(strlen($username) < 5){
			echo "Username must have at least 5 chars!<br>";
			$error = '1';
		}
		if($pw == ''){
			echo "You did not enter any password!<br>";
			$error='1';
		}
		if($pw != $pw2){
			echo "Password do not match!<br>";
			$error='1';
		}
		if($error > 0){
			echo "Try again!<br>";
		}else{			
			if(mysqli_query($con, "insert into users(name, pw, fullname, email) values('$username',sha1($pw),'$fullname','$email')")){
				// echo "You are now registered!";
				// echo "<br /> click here to <a href=\"login.php\">login</a>";
				header('location:login.php');
			}else{
				echo "problem in entering values in db.";
			}			
		}
	}else{
		header('location:login.php');
	}
?>
</body>
</html>