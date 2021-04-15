<?php
  session_start();// to maintain the variable globally in project
  include("dbconfig.php");
 
  $pass = $_POST['pass'];
  $email = $_POST['email'];

    if(($email=="") ||($pass==""))
	{
		$_SESSION['msg'] = "Email or password is empty !";
		header("location:index.php");
	}	else{
		$sql ="select * from user where email='$email' and password='$pass'";
		$res = mysqli_query($conn,$sql);
		$totaluser = mysqli_num_rows($res);
		if($totaluser==1)
		{
		$_SESSION['email'] = $email;// to indentify who is login
			
			header("location:home.php");
	}else{
		$_SESSION['msg'] = "invalid login details !";
		header("location:index.php");
	}
	}
	 
  ?>