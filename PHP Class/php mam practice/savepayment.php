<?php
	include('dbconfig.php');
	$pname=$_POST['pname'];
	$sql="insert into payment(pname) values('$pname')";
	$status=mysqli_query($conn,$sql);
	if($status){
		echo "Payment Option Saved";
	}else{
		mysqli_error();
	}
?>