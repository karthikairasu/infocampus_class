<?php
   $conn = mysqli_connect("localhost","root","","test");
   
   $name = $_POST['fname'];
   $mobile = $_POST['mobile'];
   $c = $_POST['course'];
   $location = $_POST['location'];
   $msg = $_POST['msg'];
   
   $sql = "insert into enquiry (name,mobile,course,location,message) 
                         values('$name','$mobile','$c','$location','$msg')";
   $status = mysqli_query($conn,$sql);
   
   if($status==true)
   {
	   header("location:list.php");
	   
   }else{
	   header("location:enquery.php");
   }
?>