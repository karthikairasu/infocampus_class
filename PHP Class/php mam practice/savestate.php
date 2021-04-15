<?php
	include('dbconfig.php');
	$state=$_POST['state'];
	$sql="insert into state(sname) values('$state')";
	$status=mysqli_query($conn,$sql);
	if($status){
		echo "State saved";
	}else{
		echo mysqli_error();
	}
?>