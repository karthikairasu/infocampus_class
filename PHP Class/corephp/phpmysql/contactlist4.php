<a href="contact.html">New Contact</a>

<table align="center" cellpadding="10">
     <caption> <h2> User List </h2>  </caption>
	 
	 <tr bgcolor="pink">
	    <th>ID</th>
	    <th>FULLNAME</th>
	    <th>MOBILE NO</th>
		<th>EMAIL</th>
	    <th>MESSAGE</th>
		
	</tr>	
	
	<?php
	   $conn = mysqli_connect("localhost", "root", "", "phpmysql");
	   $sql = "select name, id,  mobile, email, message from contact";
	   $res = mysqli_query($conn,$sql);// to execute the query
	   // to convert from object to array where $res is an object
	   while($row = mysqli_fetch_array($res))// array format
	   {
	   echo"<tr>";
	   echo "<td>". $row[1] ."</td>";  
	   echo "<td>". $row[0] ."</td>"; 
	   echo "<td>". $row['mobile'] ."</td>";
	   echo "<td>". $row[3] ."</td>";
	   echo "<td>". $row['message'] ."</td>";
	   
	   echo"</tr>";
	   }
	?>
</table>	
<p align="center">
  $row = mysqli_fetch_array($res);
  <br>
  mysqli_fetch_array() this function convert from multidimension array to 1 dimensional array.
  <br>
  it return the data in numeric+associative array format. so we have to use both as follow
  <br>  
  $row[index-position]
  $row[2]
  <br>
  $row['colname']
  $row['message']
  
</p>