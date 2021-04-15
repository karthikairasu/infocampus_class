<?php
    $conn =mysqli_connect("localhost", "root", "", "brand");
	$id = $_POST['id'];
	$brandname = $_POST['brandname'];
	
	$sql = "insert into brands(id,brandname)
	 
	values('$id', '$brandname')";
	$status = mysqli_query($conn,$sql);
	
	if($status=true)
	{
		header("Location:brandview.php");
		
	}else
	{
		header("Location:brand.html");
	}
	
	?>