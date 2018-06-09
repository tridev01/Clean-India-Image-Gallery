<?php
   $con = mysqli_connect("localhost","root","","userlist");
	if(!$con){
		die("Could not connect: ".@mysql_error());	
	}
	session_start();
	function loggedIn(){
		if(isset($_SESSION['username'])){
			return true;
		}else{
			return false;
		}
	}
?>