
<?php
    $conn = mysqli_connect("localhost","root", "", "product");
?>
<html>
<body>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<style>
    
	 img{height:100px; width:100px; margin:1%;}
  </style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<table class="table table-bordered" align="center" cellpadding="10">
   <caption><h2 class="text-center">product List</h2></caption>
    <thead>
   <tr bgcolor="pink">
     <th>ID</th>
     <th> Name</th>
     <th> Status</th>
     <th> Message</th>
     <th> Price</th>
     <th> Photo </th>
     
     <th>Delete</th>
     <th>Edit</th>
   </tr>
   </thead>
   <?php
      $sql="select * from pdetails	";
	  $res = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_object($res))
      {
	  echo "<tbody>";
	  echo "<tr class='text-center'>";
	  echo "<td> <br>$row->id </td>";
	  echo "<td> <br>$row->name </td>";
	  echo "<td> <br>$row->status </td>";
	  echo "<td> <br>$row->message </td>";
	  echo "<td><br> $row->price </td>";
	  echo "<td><img src='photos/$row->photoname'></td>";
	 
	  echo "<td> <br><a href='delproduct.php?id=$row->id'>Delete </a></td>";
	  echo "<td><br> <a href='edilist.php?id=$row->id'>Edit </a></td>";
	  echo "</tr>";
	  echo "</tbody>";
	  } 
   ?>

   </table>
   <div class="row">
   <div class="col-sm-4"></div>
   <div class="col-sm-4"><a href="product.html"  class="btn btn-warning">New product </a>
</div>
   <div class="col-sm-4"></div>

</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>