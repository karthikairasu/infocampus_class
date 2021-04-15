<?php

$conn = mysqli_connect("localhost","root","","test");

$name = $_POST['fname'];
$msg = $_POST['msg'];

$sql = "insert into blog(title,description) values('$name','$msg')";

$status = mysqli_query($conn,$sql);

if($status==true)
{
	header("location:list.php");
	
}else{
	header("location:blog.php");
}
?>