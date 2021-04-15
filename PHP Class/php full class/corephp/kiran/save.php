<?php
  $conn = mysqli_connect("localhost","root","","kiran");
  
  $name = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];
  
  $sql = "insert into student (name,email,address,state,city,gender,mobile)
                       values  ('$name','$email','$msg','$state','$city','$gender','$mobile')";
					   
	$status = mysqli_query($conn,$sql);
	
	if($status==true)
	{
		header("location:studentlist.php");
	}else{
		echo "sorry";
	}
?>