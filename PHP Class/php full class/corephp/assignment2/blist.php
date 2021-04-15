<?php
    $conn = mysqli_connect("localhost","root", "", "brand");
?>
<html>
<body>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<table class="table table-bordered" align="center" cellpadding="10">
   <caption><h2 class="text-center">Brand List</h2></caption>
    <thead>
   <tr bgcolor="pink">
     <th>ID</th>
     <th>Brand Name</th>
     
     <th>Delete</th>
     <th>Edit</th>
   </tr>
   </thead>
   <?php
      $sql="select * from details	";
	  $res = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_object($res))
      {
	  echo "<tbody>";
	  echo "<tr>";
	  echo "<td> $row->id </td>";
	  echo "<td> $row->name </td>";
	 
	  echo "<td> <a href='delname.php?id=$row->id'>Delete </a></td>";
	  echo "<td> <a href='ediname.php?id=$row->id'>Edit </a></td>";
	  echo "</tr>";
	  echo "</tbody>";
      }
   ?>

   </table>
   <div class="row">
   <div class="col-sm-4"></div>
   <div class="col-sm-4"><a href="brand.html"  class="btn btn-warning">New 	Brand </a>
</div>
   <div class="col-sm-4"></div>

</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>