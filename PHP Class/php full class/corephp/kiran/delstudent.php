<?php
    $conn = mysqli_connect("localhost","root","","kiran");
	
	$id = $_REQUEST['id'];
	
	$sql = "delete from student where id='$id'";
	mysqli_query($conn,$sql);
	header("location:studentlist.php");
?>
