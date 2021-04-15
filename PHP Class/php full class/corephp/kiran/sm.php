<?php
   $a = $_POST['fname'];
   $c = $_POST['mobile'];
   $d = $_POST['age'];
 
   $conn = mysqli_connect("localhost","root","","kiran");

    $sql = "insert into kam(name,mobile,age) values('$a','$c','$d')";

     $status = mysqli_query($conn, $sql);
    
		if($status==true)
		{
			echo "congrats";
		}else{
			echo "sorry";
		}
   ?>