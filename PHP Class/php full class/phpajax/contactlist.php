<div class="row">
   <div class="col-sm-2"></div>
   <div class="col-sm-8">
       <h3 class="text-center">Contact list</h3>
	   <table class="table table-bordered table-hover" >
	       <tr class="active">
		      <th>Id</th>
		      <th>Full Name</th>
		      <th>Mobile No</th>
		      <th>Message</th>
		      <th>Action</th>
		   </tr>
	      <?php
		     include("dbconfig.php");
			 // write query, fetch data from contact table and display in table
			  $sql="select * from contact	";
	  $res = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_object($res))
      {
			 echo "<tr>";
			 echo "<th>$row->id</th>";
			 echo "<th>$row->name</th>";
			 echo "<th>$row->mobile</th>";
			 echo "<th>$row->message</th>";
			 echo "<th><a href='#' onclick='deletecontact($row->id)'><span class='glyphicon glyphicon-trash'></span></a></th>";
			 echo "</tr>";
	  }		
		?>
	   </table>
   </div>
   <div class="col-sm-2"></div>
</div>