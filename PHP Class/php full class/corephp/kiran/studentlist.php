<?php
   $conn = mysqli_connect("localhost","root","","kiran");
   
?>
<a href="student.html">New Details<a>
<table align="center"  cellpadding="8">
  <caption>Student List</caption>
  <tr bgcolor="yellow">
     <th>Id</th>
     <th>Name</th>
     <th>E-mail</th>
     <th>Address</th>
     <th>State</th>
     <th>City</th>
     <th>Gender</th>
     <th>Mobile</th>
     <th>Edit</th>
     <th>Delete</th>
  </tr>
  
  <?php
     $sql = "select * from student";
	 $res = mysqli_query($conn,$sql);
	 while($row = mysqli_fetch_object($res))
	 {
	   echo "<tr>";
	   echo "<th>$row->id</th>";
	   echo "<th>$row->name</th>";
	   echo "<th>$row->email</th>";
	   echo "<th>$row->address</th>";
	   echo "<th>$row->state</th>";
	   echo "<th>$row->city</th>";
	   echo "<th>$row->gender</th>";
	   echo "<th>$row->mobile</th>";
	   
	   echo "<th><a href='edistudent.php?id=$row->id'>Edit</th>";
	   echo "<th><a href='delstudent.php?id=$row->id'>Delete</th>";
	   echo "</tr>";	 
	 }
  ?>
</table>