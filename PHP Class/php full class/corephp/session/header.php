<html>
     <head>
	 
	 </head>
     <body>


<?php
  session_start();
  if(!isset( $_SESSION['email']))
  {    
        $_SESSION['msg'] = "Sorry ! Inorder to access Please Login";
		header("location:index.php");
  }	
  echo " Welcome : ". $_SESSION['email']."";
    include("dbconfig.php");
  ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	
<span style="float:right">	<a href="logout.php"> Logout </a></span>
	<hr color="red" size="1">
	<table align="center" cellpadding="7"> 
	  <tr>
	      <th><a href="home.php">Home</a></th>
	      <th><a href="profile.php">My Profile</a></th>
	      <th><a href="newimage.php">Upload Photo</a></th>
	      <th><a href="imagelist.php">Image List</a></th>
	      <th><a href="download/xl/myxl.php">XL Upload</a></th>
		  
	      <th><a href="download/xl/xldownload.php" target="_blank">XL Download</a></th>
	      <th><a href="download/pdf/getpdf.php" target="_blank">PDF Download</a></th>
	      <th><a href="fileread.php">File Read</a></th>
	      <th><a href="filewrite.php">File Write</a></th>
	  </tr>
	</table>
	<hr color="blue" size="1">