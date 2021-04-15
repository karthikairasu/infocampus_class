<div class="col-sm-8">
  <div class="row">
    <div class="col-sm-2">
	</div>
	<div class="col-sm-8">
	 <div class="row">
	    <div class="col-sm-1"></div>
	    <div class="col-sm-10">
	    
	<div class="table table-responsive">
	 <table class="table table-stripped">
	  <thead>
	    <tr>
		  <th>ID</th>
		  <th>ProductName</th>
		  <th>brand</th>
		  <th>category</th>
		  <th>price</th>
		  <th>description</th>
		  <th>Action</th>
		
		</tr>
	  </thead>
	  
	  <tbody>
	     <?php
		   foreach($prod as $row)
		   {
			   echo "<tr>";
			     echo"<td>$row->id</td>";
			     echo"<td>$row->name</td>";
			     echo"<td>$row->brand</td>";
			     echo"<td>$row->category</td>";
			     echo"<td>$row->price</td>";
			     echo"<td>$row->description</td>";
			     echo"<td><a href='deleteproduct?id=$row->id'>Delete</td>";
				 echo "</tr>";
		   }
		 ?>
	  </tbody>
	 </table>
	 </div>
	 </div>
	 <div class="col-sm-1"></div>
	</div>
	</div>
	<div class="col-sm-2">
	</div>
  </div>
 </div>