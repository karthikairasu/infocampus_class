<?php 
	include("dbconfig.php");
	$bid=$_REQUEST['bid'];
	$sql="delete from blogs where bid='$bid'";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		header("Location:bloglist.php");
	}
	else{
		mysqli_error();
	}

?>