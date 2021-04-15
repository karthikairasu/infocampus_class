<?php 
	include("dbconfig.php");
	$title=$_POST['title'];
	$description=$_POST['description'];
	$imagename=$_FILES['Photo']['name'];
	//echo $imagename;
	move_uploaded_file($_FILES['Photo']['tmp_name'],"assets/uploadedimg/".$imagename);
	//insert query
	$sql="insert into blogs(title,description,image) values('$title','$description','$imagename')";
	
	//execute query
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		header("Location:bloglist.php");
	}
	else{
		mysqli_error();
	}
	
?>