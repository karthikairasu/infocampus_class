<?php
	include('dbconfig.php');
	$city=$_POST['city'];
	$state=$_POST['state'];
	$sql="insert into city(cityname,stateid) values('$city','$state')";
	$status=mysqli_query($conn,$sql);
	if($status){
		echo "City saved";
	}else{
		echo mysqli_error();
	}
?>