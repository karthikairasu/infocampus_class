<?php
$json = file_get_contents("user.json");   
 $data = json_decode($json);
 $conn = mysqli_connect("localhost","root","","test");
 
 foreach($data as $row)
 {
	 $n=$row->name;
	 $m=$row->mobile;
	 $c=$row->city;
	 $sql = "insert into user(name,mobile,city) values('$n','$m','$c')";
     mysqli_query($conn,$sql);
 }
 echo "please check ur table";
?>