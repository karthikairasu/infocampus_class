<?php
    $conn = mysqli_connect("localhost","root", "", "phpmysql");
?>
<a href="contact.html">New Contact </a>
<table align="center" cellpadding="10">
   <caption><h2>User List</h2></caption>
   <tr bgcolor="pink">
     <th>ID</th>
     <th>Full Name</th>
     <th>Mobile No</th>
     <th>Message</th>
     <th>Delete</th>
     <th>Edit</th>
   </tr>
   
   <?php
      $sql="select * from contact";
	  $res = mysqli_query($conn, $sql);// to execute the query
	  // to convert from object to array where $res is an object
	  while($row = mysqli_fetch_object($res))
      {
	  echo "<tr>";
	  echo "<td> $row->id </td>";
	  echo "<td> $row->name </td>";
	  echo "<td> $row->mobile </td>";
	  echo "<td> $row->message </td>";
	  echo "<td> <a href='delcontact.php?id=$row->id'>Delete </a></td>";
	  echo "<td> <a href='edicontact.php?id=$row->id'>Edit </a></td>";
	  echo "</tr>";
      }
   ?>
</table>
<p align="center">
    $row = mysqli_fetch_object($res);
	<br>
	mysqli_fetch_object() this function convert from multidimentional array to single 
	dimentional array.
	<br>
	it return the data in object array format. so we have to use asin
	$row->colname
	<br>
	$row->message
</p>