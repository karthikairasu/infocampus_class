<?php
  include("dbconfig.php");
  // query string--->when we pass to data through url form one page to another page.
  
  $a = $_REQUEST['pid'];//REQUEST access url id from database
  
  $name = $_REQUEST['name']; 
  //echo $name;
  $sql = "delete from myphoto where id='$a'";
  
  $res= mysqli_query($conn, $sql);
  if($res == true)
  {
	  unlink("userphoto/$name");//unlink and unset---->unlink used to delete a file from folder
  }
  
  header("Location:imagelist.php");
?>