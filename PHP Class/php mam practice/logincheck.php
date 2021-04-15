<?php 
	include("dbconfig.php");
	session_start();
	$email=$_POST['email'];
	$password=$_POST['pass'];
	
	$sql="select * from admin where email='$email' and password='$password'";
	$res=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($res);
	if($total>0)
	{
		$row=mysqli_fetch_object($res);
		$_SESSION['aid']=$row->id;
		$_SESSION['name']=$row->name;
		header("Location:home.php");
	}
	else{
		header("Location:index.php");
	}
	
?>
