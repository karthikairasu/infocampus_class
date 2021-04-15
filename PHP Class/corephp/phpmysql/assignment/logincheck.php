<?php
   session_start();
   include("dbconfig.php");
   
   $email = $_POST['email'];
   $password = $_POST['password'];

   if( ($email=="") || ($password==""))
   {
	   $_SESSION['msg'] = "Email and  Password is Empty !";
	   header("Location:login.php");
   }else
   {
	   $sql = "select * from candidate where email ='$email' and password = '$password'";
	   $res = mysqli_query($conn,$sql);
	   $totaluser = mysqli_num_rows($res);
	   if($totaluser==1)
	   {
		   $_SESSION['email'] = $email;
		   header("Location:home.php");
	   }
	   else
	   {
		   $_SESSION['msg'] = "Invalid login Details! ";
		   header("Location:login.php");
	   }
   }
?>