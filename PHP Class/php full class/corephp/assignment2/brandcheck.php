<?php
  
  $a = $_POST['bname'];
  
   $conn = mysqli_connect("localhost","root","","brand");
  
    $sql = "insert into details(name) values('$a')";
            
   
     $status = mysqli_query($conn, $sql);
   

		if($status==true)
		{
			header("location:blist.php");
		}else{
			echo "sorry";
		}
?>