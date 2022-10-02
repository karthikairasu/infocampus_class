<?php
   session_start();
   include('dbcon.php');
   $name=$_POST['name'];
   $mob=$_POST['mob'];
   $pass=$_POST['pass'];
   $imagename = $_FILES['imag']['name'];
   move_uploaded_file($_FILES['imag']['tmp_name'],"assets/profile/".$imagename);
    
   $sql="insert into user(name,mobile,password,images) values('$name','$mob','$pass','$imagename')";
   //echo $sql; die;
   $status=mysqli_query($conn,$sql);
   if($status){

      $_SESSION['msg'] = "Please Login";
   	  header("location:index.php");

   }else{

   	  $_SESSION['msg'] = "Duplicate email/mobile entry or some error ! try again ...";
	  header("location:index.php");
   }
   mysqli_close($conn);
?>