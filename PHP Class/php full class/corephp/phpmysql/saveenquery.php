<?php
   $conn = mysqli_connect("localhost", "root", "","phpmysql");
   $name =$_POST['fname'];
   $mobile =$_POST['mobile'];
   $email =$_POST['email'];
   

    $sql="insert into enquery(name, mobile, email)
	values('$name', '$mobile', '$email' )";
	
	$status = mysqli_query($conn,$sql);
	
	if($status==true)
	{
		echo "sucess";
		
	}else{
	  echo "fail";
	}
?>
