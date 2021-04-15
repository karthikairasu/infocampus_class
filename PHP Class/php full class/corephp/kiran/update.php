<?php
  $conn = mysqli_connect("localhost","root","","kiran");
  
   $name = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];
  
   $sql = " update  student set
   name = '$name',
   email='$email',
   address='$msg',
   state='$state',
   city = '$city',
   gender = '$gender',
   mobile = '$mobile'";
   mysqli_query($conn,$sql);
   header("location:studentlist.php");
?>