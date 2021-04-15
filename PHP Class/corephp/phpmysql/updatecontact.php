<?php
  $conn = mysqli_connect("localhost", "root", "", "phpmysql");
  $id = $_POST['id'];
  $name = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  
  /* echo $id. $name. $mobile. $msg */
  
  $sql = "update contact set
                  name= '$name',
				  mobile= '$mobile',
				  email='$email',
				  message= '$msg' where id='$id'";

  $status=mysqli_query($conn,$sql);
	if($status) 
	{
		header ("Location:contactlist.php");
	}else{
		echo error;
	}
?>
  