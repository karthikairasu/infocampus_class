<?php
   session_start();
   include('dbcon.php');
   $mob=$_POST['mob'];
   $pass=$_POST['pass'];

   if( ($mob=="") || ($pass=="") )
   {
    	$_SESSION['msg']= "Your Mob & Pass is Empty!!";
   	    header("location:index.php");
   }else{
        $sql="select * from user where mobile='$mob' and password='$pass'";
        $result=mysqli_query($conn,$sql);
        $totaluser=mysqli_num_rows($result);
        $row=mysqli_fetch_object($result);
        if($totaluser==1){
        	$_SESSION['mob']=$mob;
        	$_SESSION['name']=$row->name;
          $_SESSION['imag']=$row->images;
          $_SESSION['myid']=$row->id;
          //echo $_SESSION['myid'];
          header("location:home.php");
        }else{
        	$_SESSION['msg']="Invalid login details!";
        	header("location:index.php");
        }
   }
   mysqli_close($conn);
?>