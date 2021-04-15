<?php
  $conn = mysqli_connect("localhost", "root", "", "test");
  $role   = $_POST['role'];
  $fullname = $_POST['fname'];
  $email   = $_POST['email'];
  $mobile  = $_POST['mobile'];
  $experience   = $_POST['experience'];
  $current   = $_POST['current'];
  $exp   = $_POST['exp'];
  
  $sql = "insert into uploadresume(role, fullname, email, mobile, experience, current, exp)
  
  values ('$role', '$fullname', '$email', '$mobile', '$experience', '$current', '$exp')";
  $status = mysqli_query($conn,$sql);
  
  if($status=true)
  {
	  header("Location:viewdetail.php");
  }else
  {
	  header("Location:uploadresume.html");
  }
  
?>