<?php
  session_start();//to maintain the variable globally in project
  include("dbconfig.php");
  
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
/*   echo $email;
  
  echo $pass; */
  
  if( ($email=="") || ($pass=="") )
  {
	  $_SESSION['msg'] = "Email Or Password is empty !";
	  header("Location:index.php");
	  
  }else{
	  
	  $sql = "select * from user1 where email='$email' and pass='$pass'";
	  $res = mysqli_query($conn,$sql);
	  $totaluser = mysqli_num_rows($res);
	  $row=mysqli_fetch_object($res);
	  if($totaluser==1)
	  {
		  $_SESSION['email'] = $email;// to identify who is login
		  $_SESSION['photo'] = $row->imagename;
		  $_SESSION['name'] = $row->name;
		 header("Location:home.php")  ;
       }
		else{
		  $_SESSION['msg'] = "Invalid Login Details !";
		  header("Location:index.php");
	  }	  
  }
?>