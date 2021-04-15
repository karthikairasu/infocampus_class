<?php
  $conn = mysqli_connect("localhost", "root", "", "brand");
  
  $id= $_REQUEST['cid'];
  
  $sql = "delete from brands where id='$id'";
  
  
  $status =mysqli_query($conn,$sql);
  if($status=true)
  {
	  header("Location:brandview.php");
  }else
  {
	 echo error; 
  }
?>