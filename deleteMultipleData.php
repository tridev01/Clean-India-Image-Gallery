<?php
	include 'connect.php'; 


$delid = $_POST['selected_id'];
$nc = count($delid);
for($i=0;$i<$nc;$i++)
{
    $did = $delid[$i];
    mysqli_query($con,"DELETE FROM image_upload WHERE id='$did'");

}
header('location:manage_gallery.php');


?>