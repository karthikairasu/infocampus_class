<?php
  session_start();
  include("kk.php");
   $a = $_POST['fname'];
   $b = $_POST['lname'];
   $c = $_POST['mobile'];
   $d = $_POST['email'];
   $e = $_POST['pass'];
   $f = $_POST['cpass'];
   $g = $_POST['dob_day'].'-'.$_POST['dob_month'].'-'.$_POST['dob_year'];
   $h = $_POST['address'];
   $i = $_POST['pin'];
   $j = $_POST['state'];
   $k = $_POST['city'];
   
   

   
   $sql = "insert into chinnu(name,lname,mobile,email,password,cpassword,birth,address,pincode,state,city)
                  values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
	
	$status = mysqli_query($conn,$sql);
	
	
	
	if($status==true)
	{
		
		header("location:login.php");
	}else{
		
		header("location:register.php");
	}
	
	
	
?>