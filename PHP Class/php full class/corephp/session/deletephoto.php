<?php
  include("dbconfig.php");
  $a = $_REQUEST['pid'];
  $name = $_REQUEST['name'];
 
 $sql = "delete from myphoto where id='$a'";
/*  mysqli_query($conn,$sql);
 header("location:imagelist.php"); */
 $res = mysqli_query($conn,$sql);
 
 if($res==true)
 {
	 unlink("userphoto/$name");
 }
 
 header("location:imagelist.php");
?>