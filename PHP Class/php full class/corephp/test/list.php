<?php
   $conn = mysqli_connect("localhost","root","","test");

?>
 <html>
     <head>
	     
		 <link rel="stylesheet" href="assets/css/bootstrap.css">
	 </head>
	 <body>
	 <div class="container"><br>
	     <div class="row">
          <div class="col-sm-3"></div>		
          <div class="col-sm-6">
		  <table class="table table-bordered" align="center">
	   <tr class="bg-danger" class="active">
	      <th>Id</th>
	      <th>Name</th>
	      <th>Mobile</th>
	      <th>Course</th>
	      <th>Location</th>
	      <th>Message</th>
	   </tr>
		 
	   
   
   
   <?php
      $sql ="select * from enquiry"; 
	  $res = mysqli_query($conn,$sql);
	  while($row = mysqli_fetch_object($res))
	  {
		echo   "<tr>";
		echo "<th>$row->id</th>";
		echo "<th>$row->name</th>";
		echo "<th>$row->mobile</th>";
		echo "<th>$row->course</th>";
		echo "<th>$row->location</th>";
		echo "<th>$row->message</th>";
		echo   "</tr>";
		 
		 
	  }
   ?>
</table>
<a href="enquery.php">New Enquiry</a>
 </div>		
          <div class="col-sm-3"></div>		
		</div>
	 </div>
	 </body>
 </html>