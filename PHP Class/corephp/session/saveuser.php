<?php
  session_start();//to maintain the variable globally in project
  include("dbconfig.php");
  
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $imagename = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'],"userphoto/".$imagename);
  
  $sql="insert into user(name,mobile,email,password,userimage)values('$name','$mobile','$email','$pass','$imagename')";
	
	$status = mysqli_query($conn,$sql);
	if($status==true)
	{
		 $_SESSION['msg'] = "please login";
		 header("location:index.php");
	 }else
	 {

		 $_SESSION['msg'] = "Duplicate email/mobile entry or some error ! try again ...";
		 header("location:signup.php");
		 
	}
?>