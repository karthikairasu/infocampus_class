<?php
  $xml = simplexml_load_file("user.xml");  // to read xml and convert to array 

 $conn = mysqli_connect("localhost","root","","test");
  
 foreach($xml as $row)
 {
	 $n=$row->name;
	 $m=$row->mobile;
	 $c=$row->city;
	 $sql = "insert into user(name,mobile,city) values('$n','$m','$c')";
     mysqli_query($conn,$sql);
 }
 echo "please check ur table";
?>