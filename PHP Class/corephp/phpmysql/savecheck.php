<?php
  $name = $_POST['fname'];
  $item = $_POST['item'];
  $conn = mysqli_connect("localhost", "root", "", "phpmysql");
  
 /*  echo $name;
  
   echo"<pre>";
   print_r ($item); 
   echo"</pre>"; */
  
  for ($i=0; $i<count($item); $i++)
  {
	  $itemname = $item[$i];
	  $sql="insert into item(itemname, username)
	  values('$itemname', '$name')";
	  
	  mysqli_query($conn, $sql);
	  
  }
  header("location:itemlist.php");
  
?>