<?php
$conn = mysqli_connect("localhost","root","","phpmysql");
?>
<a href="multicheck.html">New Item</a>
<table align="center" cellpadding="8">
  <caption>Item List</caption>
  <tr>
     <th>Id</th>
     <th>Item Name</th>
     <th>User Name</th>
     <th>Edit</th>
  </tr>


<?php
   $sql = "select * from item group by username";
   
   $res = mysqli_query($conn,$sql);

   while($row = mysqli_fetch_object($res))
      {
	  echo "<tr>";
	  echo "<td> $row->id </td>";
	  echo "<td>";
       $sql1 = "select itemname from item where username='$row->username'";
	   $res2 = mysqli_query($conn,$sql1);
	   while($row2 = mysqli_fetch_object($res2))
	   {
			echo $row2->itemname;
			echo ",";
	   }
	   echo "</td>";
	  echo "<td> $row->username </td>";
	  echo "<td> <a href='ediitem.php?name=$row->username'>Edit </a></td>";

	  echo "</tr>";
      }
?>
</table>