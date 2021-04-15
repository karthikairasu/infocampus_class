<?php

 $name =$_POST['fname'];
 $item = $_POST['item'];
   $conn = mysqli_connect("localhost", "root", "","phpmysql");
   // to delete old selected item
   $sql = "delete from item where username='$name'";
   mysqli_query($conn,$sql);
   
   // to insert new selected item
   for($i=0; $i<count($item); $i++)
   {
	   $itemname = $item[$i];
	   $sql="insert into item(itemname, username)
	   values('$itemname', '$name')";
	   
	   mysqli_query($conn, $sql);
   }
   
   header("location:itemlist.php");
 ?>
 