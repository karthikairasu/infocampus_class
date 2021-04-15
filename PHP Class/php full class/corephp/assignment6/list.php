<?php

$cat = $_POST['cam'];
$time = $_POST['time'];
$msg = $_POST['msg'];
$active = $_POST['ac'];

 $conn = mysqli_connect("localhost","root","","category");

$sql = "insert into cat (category,time,guide,active) 
                  values('$cat','$time','$msg','$active')";
				  
$status = mysqli_query($conn,$sql);

if($status=true)
{
	header("location:active.php");
}else{
	echo "sry";
}

?>