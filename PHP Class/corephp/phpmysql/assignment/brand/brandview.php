<html>
 <body>
    <table align="center" cellpadding="10">
	  <tr>
	    <th>Id</th>
	    <th>brandname</th>
	    <th>Edit</th>
	    <th>Delete</th>
	  </tr>
	 <?php
	   $conn = mysqli_connect("localhost", "root", "", "brand");
	   $sql = "select * from brands";
	   $res = mysqli_query($conn,$sql);
	   while($row=mysqli_fetch_object($res))
	   {
		   echo"<tr>";
		   echo"<td> $row->id </td>";
		   echo"<td> $row->brandname </td>";
		   echo"<td> <a href='editbrand.php?cid=$row->id'>Edit</a></td>";
		   echo"<td> <a href='deletebrand.php?cid=$row->id'>Delete</a></td>";
		   echo"</tr>";
	   }
	 ?>
	  
    </table >
 </body>
 </html>