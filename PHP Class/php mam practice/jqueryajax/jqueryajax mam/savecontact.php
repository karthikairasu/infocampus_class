<?php
	include("dbconfig.php");
	$name=$_POST['n']; //we write the key which is passed in json object not the name of textbox
	$email=$_POST['e'];
	$mobile=$_POST['mob'];
	$city=$_POST['c'];
	$message=$_POST['msg'];
	
	$sql="insert into contact(name,email,mobile,city,message)
	values('$name','$email','$mobile','$city','$message')";
	
	$status=mysqli_query($conn,$sql);
	
	if($status==true)
	{
		
		echo"Thank You ,We will contact u soon";
	}
	else{
		mysqli_error();
	}
	
?>
