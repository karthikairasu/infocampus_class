

<table align="center" cellpadding="10">
     <caption> <h2> User List </h2>  </caption>
	 
	 <tr bgcolor="pink">
	    <th>USER NAME</th>
	    <th>ITEMS</th>
	    <th>EDIT</th>
	    
		
	</tr>	
	
	<?php
	   $conn = mysqli_connect("localhost", "root", "", "phpmysql");
	   $sql = "select * from item group by username";
	   $res = mysqli_query($conn,$sql);
	   while($row = mysqli_fetch_object($res))
	   {
	   echo"<tr bgcolor='violet'>";
	   
	   echo "<td> $row->username</td>";
	   echo "<td>";
	    $sql1 = "select itemname from item where username='$row->username'";
		$res2 = mysqli_query($conn,$sql1);
		while($row2= mysqli_fetch_object($res2))
		{
			echo $row2->itemname;
			echo ",";
		}
			echo "<td> <a href='ediitem.php?name=$row->username'>EDIT</a> </td>";
	   
	   echo"</tr>";
	   }
	?>
	<a href="multicheck.html">check</a>
</table>	