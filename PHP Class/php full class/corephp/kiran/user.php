<?php
  $conn = mysqli_connect("localhost","root","","sweety");
  
  $name = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $pass = $_POST['passs'];
  $cpass = $_POST['cpasss'];
  $message = $_POST['msg'];
  
  $sql = "insert into chinnu(name,mobile,email,password,cpassword,address)
  values('$name','$mobile','$email','$pass','$cpass','$message')";
  
  $status = mysqli_query($conn,$sql);
  
  if($status==true)
  {
	 header("location:kk.php");
  }else{
	  echo "sry";
  }
?>