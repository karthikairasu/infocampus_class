<html>
     <head>
	 
	 </head>
     <body>


<?php
  session_start();
  if(!isset( $_SESSION['email']))
  {    
        $_SESSION['msg'] = "Sorry ! Inorder to access Please Login";
		header("location:login.php");
  }	
  echo " Welcome : ". $_SESSION['email']."";
    include("kk.php");
  ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	
<span style="float:right">	<a href="logout.php"> Logout </a></span>
	<table align="center" cellpadding="7"> 
	  <tr>
	      <th><a href="home.php">Home</a></th>
	      <th><a href="profile.php">My Profile</a></th>
	      <th><a href="newimage.php">Friends</a></th>
	      <th><a href="newimage.php">Photos</a></th>
	   
	  </tr>
	</table>
	<hr color="blue" size="1">