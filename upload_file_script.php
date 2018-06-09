<?php
	include 'connect.php';
	$allowedExts = array("jpg", "jpeg", "JPEG", "gif", "png");
	$extension = explode(".", $_FILES["file"]["name"])[1];
	//(($_FILES["file"]["type"] == "gif") || ($_FILES["file"]["type"] == "jpeg") || ($_FILES["file"]["type"] == "pjpeg")) && 
	if(isset($_POST['submit'])){
		
		$format = $_POST['format'];
		
		$error = "0";
	
	if (($_FILES["file"]["size"] < 2000000) && in_array($extension, $allowedExts))
	  {
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			// echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			// echo "Type: " . $_FILES["file"]["type"] . "<br />";
			// echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			// echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
			// echo "Type: " . $_FILES["file"]["type"] . "<br />";
			header('location:image_upload.php');
		
			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
			}else{
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"upload/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
				
				$img_name = $_FILES["file"]["name"] ;
				$query = "insert into image_upload(file,Img_Format) values ('$img_name','$format')";
				if(mysqli_query($con, $query)){
					//echo "Stored in: " . "database too";
					header('location:image_upload.php');
				}else{
					echo "couldn't insert in db";
					header('location:image_upload.php');
				}
				
			}
		}
	}else{
		echo "Invalid file";
	}
	mysqli_close($con);
}
else
{
	header('location:image_upload.php');
}
?> 