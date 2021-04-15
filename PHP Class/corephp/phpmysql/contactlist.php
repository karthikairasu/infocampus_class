<a href="contact.html">New Contact</a>

<table align="center" cellpadding="10">
     <caption> <h2> User List </h2>  </caption>
	 
	 <tr bgcolor="pink">
	    <th>ID</th>
	    <th>FULLNAME</th>
	    <th>MOBILE NO</th>
		<th>EMAIL</th>
	    <th>MESSAGE</th>
		<th>DELETE</th>
		<th>EDIT</th>
		
	</tr>	
	
	<?php
	   $conn = mysqli_connect("localhost", "root", "", "phpmysql");
	   $sql = "select * from contact";
	   $res = mysqli_query($conn,$sql);// to execute the query
	   // to convert from object to array where $res is an object(is convert to multi dimension object to convert single dimension array)
	   while($row = mysqli_fetch_object($res))// row wise to print 
	   {
	   echo"<tr>";
	   echo "<td> $row->id</td>";
	   echo "<td> $row->name</td>";
	   echo "<td> $row->mobile</td>";
	   echo "<td> $row->email</td>";
	   echo "<td> $row->message</td>";
	   echo "<td> <a href='delcontact.php?cid=$row->id'>DELETE</a></td>";
	   echo "<td> <a href='edicontact.php?cid=$row->id'>EDIT </a></td>";
	   
	   
	   echo"</tr>";
	   }   
	?>
</table>	
<p align="center">
  $row = mysqli_fetch_object($res);
  <br>
  mysqli_fetch_object() this function convert from multidimension array to 1 dimensional array.
  <br>
  it return the data in object array format. so we have to use as 
  $row->colname
  <br>
  $row->message
  
</p>