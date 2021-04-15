<?php
 $a = $_POST['fname'];
 $b = $_POST['mobile'];
 $c = $_POST['email'];
 $d = $_POST['age'];

 
  
  $conn = mysqli_connect("localhost","root","","employee");
  
  $sql = "insert into emp(name, mobile, email, age) values('$a','$b','$c','$d')";
						 
  $status = mysqli_query($conn,$sql); 
  
  if($status==true)
  {
	  echo "Save is done";
  }else{
	  echo "Your data is not saved";
  }
 ?>