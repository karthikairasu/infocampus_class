<?php
  session_start();// to maintain the variable globally in project
  include("dbconfig.php");
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $pass = $_POST['pass'];
  $email = $_POST['email'];

    $sql = "insert into user(name, mobile, password, email)
                         values('$name','$mobile','$pass','$email')";
  
     $status = mysqli_query($conn, $sql);
	 if($status==true)
	 {
		 $_SESSION['msg'] = "please login";
		 header("location:index.php");
	 }else{
		 		 $_SESSION['msg'] = "Duplicate email/mobile entry or some error ! try again ...";

		 header("location:signup.php");
		 
	 }
  ?>