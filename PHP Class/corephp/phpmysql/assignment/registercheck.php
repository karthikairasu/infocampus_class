<?php
   session_start();
   include("dbconfig.php");
   
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $dob     =  $_POST['dob_day'].'-'. $_POST['dob_month'].'-'. $_POST['dob_year'];
   $address = $_POST['address'];
   $pincode = $_POST['pincode'];
   $state = $_POST['state'];
   $district = $_POST['district'];
   $gender = $_POST['gender'];
   $married = $_POST['married'];
  
   
   
   $sql = "insert into candidate(firstname, lastname, mobile, email, password, cpassword, dob, address, pincode, state, district,gender,married)
   
   
   values('$fname', '$lname', '$mobile', '$email', '$password', '$cpassword', '$dob', '$address', '$pincode', '$state', '$district', '$gender', '$married')";
   
   $status = mysqli_query($conn,$sql);
   if($status==true)
   {
	   $_SESSION['msg'] = "Please Login";
	   header("Location:login.php");
   }else{
	   $_SESSION['msg'] = "Duplicate email or password some error ! Try again";
	   header("Location:register.php");
   }
   
?>