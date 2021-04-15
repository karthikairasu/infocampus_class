<?php
  $conn = mysqli_connect("localhost", "root", "", "phpmysql");
  $name = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  
  
  $sql = "insert into enquiry(name, mobile, email)
  
  values('$name', '$mobile', '$email')";
  
   $status = mysqli_query($conn, $sql); //to execute query

  if($status==true)
  {
	  
	  echo"success";
  }	  
  else{
	  echo "fail";
  }
?>