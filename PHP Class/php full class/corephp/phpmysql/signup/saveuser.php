<?php
   $conn = mysqli_connect("localhost", "root", "","phpmysql");
   $name =$_POST['fname'];
   $mobile =$_POST['mobile'];
   $email =$_POST['email'];
   $pass =$_POST['password'];
   $city =$_POST['city'];
   $pincode =$_POST['pincode'];
   $address =$_POST['address'];

    $sql="insert into user(name, mobile, email, password, city, pin, address)
	values('$name', '$mobile', '$email', '$pass', '$city', '$pincode', '$address')";
	
	$status = mysqli_query($conn,$sql);
	
	if($status==true)
	{
		echo "sucess";
		
	}else{
	  echo "fail";
	}
	
	
   ?>