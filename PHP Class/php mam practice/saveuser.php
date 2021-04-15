<?php
	include('dbconfig.php');
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$city=$_POST['city'];
	$sql="insert into user(fname,email,mobile,city) values('$fname','$email','$mobile','$city')";
	$status=mysqli_query($conn,$sql);
	if($status){
		echo "User saved";
	}else{
		echo mysqli_error();
	}
?>