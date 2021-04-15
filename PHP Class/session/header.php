<html>
   <head>
   
   </head>
   <body>
 
<?php
   session_start();
   if(!isset($_SESSION['email']))
	   
	 {
		$_SESSION['msg'] = "Sorry ! Inorder to access Please Login";
		  header("Location:index.php");   
	 }
	 
	 echo " Welcome : ".$_SESSION['name']."";
	 
	 include("dbconfig.php");//no give dbconfig file separately only given header file.
	 
?>

&nbsp;&nbsp;&nbsp;&nbsp;
<span><?php echo"<img src='userphoto/".$_SESSION['photo']."' width='100px' height='100px' style='border-radius:10px;'>"?></span><?php echo $_SESSION['email'] ?>
<span style="float:right;"><a href="logout.php"> Logout</a></span>
<hr color="red" size="1">
   <table align="center" cellpadding="7">
    <tr>
	  <th> <a href="home.php"> Home</a></th>
	  <th> <a href="profile.php">My Profile</a></th>
	  <th> <a href="tableview.php">User list</a></th>
	  <th> <a href="personalinfo.php">Personal Information</a></th>
	  <th> <a href="newimage.php">upload photo</a></th>
	  <th> <a href="imagelist.php">image list</a></th>
	  <th> <a href="uploadxl.php">Xl upload</a></th>
	  <th> <a href="xldownload.php">XL download</a></th>
	  <th> <a href="pdfdownload.php">PDF download</a></th>
	  <th> <a href="fileread.php">file read</a></th>
	  <th> <a href="filewrite.php">file write</a></th>
    </tr>
	</table>
<hr color="blue" size="1">