<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
</head>

<body>
	<h2>Register with Us</h2>
    
    <form action="register_done.php" name="register" method="post">
    	Your username: <input type="text" name="username" /><br />
        Your password: <input type="password" name="pw" maxlength="10" size="10" /> <br />
        Retype password: <input type="password" name="pw2" maxlength="10" size="10" /> <br />
        <input type="submit" name="submit" value="submit" />
    </form>
    
</body>
</html>