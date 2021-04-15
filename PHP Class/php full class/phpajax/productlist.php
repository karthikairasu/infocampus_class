<div class="row">
   <div class="col-sm-2"></div>
   <div class="col-sm-8">
       <h3 class="text-center">Product list</h3>
	   <table class="table table-bordered table-hover" >
	       <tr class="active">
		      <th>Product Id</th>
		      <th>Product Name</th>
		      <th>Product Price</th>
		      <th> Quantity</th>
		      <th>Total Price / Unit</th>
		      <th>Description</th>
		      <th>Actions</th>
		   </tr>
	   	      <?php
		     include("dbconfig.php");
			 // write query, fetch data from contact table and display in table
			  $sql="select * from product	";
	  $res = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_object($res))
      {
			 echo "<tr>";
			 echo "<th>$row->id</th>";
			 echo "<th>$row->pname</th>";
			 echo "<th>$row->price</th>";
			 echo "<th>$row->qty</th>";
			 
			 echo "<th>";
			        echo ($row->price) * ($row->qty);
			 echo "</th>";
			 echo "<th>$row->description</th>";
 echo "<th><a href='#' onclick='deleteproduct($row->id)'><span class='glyphicon glyphicon-trash'></span></a></th>";
			 echo "</tr>";
	  }		
		?>
	   </table>
   </div>
   <div class="col-sm-2"></div>
</div>