<?php
  include("dbconfig.php");
  $cid=$_POST['cid'];
  $sql="delete from contact where id='$cid'";
  $status=mysqli_query($coon,$sql);
  if($status==true)
  {
	  echo "Record with id=$cid is deleted successfully";
  }
  else{
	  mysqli_error();
  }
?>