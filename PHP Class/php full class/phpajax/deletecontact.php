<?php
 include("dbconfig.php");
$id = $_GET['cid'];

 $sql = "delete from contact where id='$id'";
                   
  $status = mysqli_query($conn,$sql);
  
  if($status==true)
  {
	  echo "delete successfull";
  }else{
	  echo "sorry";
  }
?>