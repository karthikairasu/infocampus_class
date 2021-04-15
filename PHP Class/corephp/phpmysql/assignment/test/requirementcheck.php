<?php
  $conn = mysqli_connect("localhost", "root", "", "test");
  
  $cname   = $_POST['cname'];
  $email = $_POST['email'];
  $person   = $_POST['person'];
  $mobile  = $_POST['mobile'];
  $phone   = $_POST['phone'];
  $address   = $_POST['address'];
  $full  = $_POST['full'];
  
  $sql = "insert into requirement(cname, email, person, mobile, phone, address, full)
  
  values ('$cname', '$email', '$person', '$mobile', '$phone', '$address', '$full')";
  $status = mysqli_query($conn,$sql);
  
  if($status=true)
  {
	  header("Location:requirementview.php");
  }else
  {
	  header("Location:requirementdetails.html");
  }
  
?>