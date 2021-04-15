<?php
  include("dbconfig.php");
  $name=$_POST['n'];
  $email=$_POST['e'];
  $mobile=$_POST['mob'];
  $city=$_POST['c'];
  $message=$_POST['msg'];
  $cid=$_POST['cid'];
  
  $sql="update contact set name='$name',
                           email='$email',
						   mobile='$mobile',
						   city='$city',
						   message='$message'
						   where id='$cid'";
						   
	$status=mysqli_query($conn,$sql);
    if($status==true)
    {
		echo "data with id='$cid' is updated successfully";
	}		
    else
	{
		mysqli_error();
	}
?>