<?php
 $conn = mysqli_connect("localhost","root","","category");

?>
<html>
<head><link rel="stylesheet" href="assets/css/bootstrap.css">
<head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="panel panel-info">
 <div class="panel-heading"></div>
 <div class="panel-body">
  <table style="border-radius:20px;" align="center" cellpadding="8" class="table table-bordered"> 
     <tr>
	 <th>S.No</th>
	 <th>Category</th>
	 <th>Guide</th>
	 <th>Duration</th>
	 <th>Active</th>
	 </tr>
 </div>
 <div class="panel-footer"></div>
</div>
 
   
   <?php
       $sql = "select * from cat";
	   $res = mysqli_query($conn,$sql);
	   while($row=mysqli_fetch_object($res))
	   {
      echo "<tr>";
	  
	  echo "<th> $row->id </th>";
	  echo "<th>$row->category </th>";
	  echo "<th>$row->guide </th>";
	  echo "<th>$row->time </th>";
	  echo "<th>$row->active </th>";
      echo "</tr>";
	   }
	  ?>
</table>
</div>
<div class="col-sm-3"></div>
</div>
</body>
</html>