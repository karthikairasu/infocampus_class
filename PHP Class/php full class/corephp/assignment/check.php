<?php
  session_start();
  include("kk.php");
 
  $pass = $_POST['pass'];
  $email = $_POST['email'];
     
	 
	
    if(($email=="") || ($pass==""))
	{
		$_SESSION['msg'] = "Please enter your email n password";
		
		header("location:login.php");
	}	else{
$sql ="select * from chinnu where email='$email' and password='$pass'";
		$res = mysqli_query($conn,$sql);
		$user = mysqli_num_rows($res);
		if($user==1)
		{
		$_SESSION['email'] = $email;
			
			header("location:last.php");
	}else{
		$_SESSION['msg'] = "invlid login details !";
		header("location:login.php");
	}
	
	}
	 
  ?>