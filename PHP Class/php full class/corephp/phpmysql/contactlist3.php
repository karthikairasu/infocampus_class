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
   </tr>
   
   <?php
      $sql="select name,id,message,mobile from contact";
	  $res = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_row($res))
      {
	  echo "<tr>";
	  echo "<td>". $row['1'] ."</td>";
	  echo "<td>". $row['0'] ."</td>";
	  echo "<td>". $row['3'] ."</td>";
	  echo "<td>". $row['2'] ."</td>";
	  echo "</tr>";
      }
   ?>
</table>
<p align="center">
    $row = mysqli_fetch_object($res);
	<br>
	mysqli_fetch_assoc() this function convert from multidimentional array to single 
	dimentional array.
	<br>
	it return the data in numeric array format. so we have to use asin
	$row['index position']
	<br>
	$row['2']
</p>