<?php
    $conn =mysqli_connect("localhost", "root", "", "brand");
	$id = $_POST['id'];
	$brandname = $_POST['brandname'];
	
	$sql = "update brands set
	
	                brandname = '$brandname' where id ='$id'";
	
	$status = mysqli_query($conn,$sql);
	
	if($status=true)
	{
		header("Location:brandview.php");
		
	}else
	{
		echo error;
	}
	
	?>