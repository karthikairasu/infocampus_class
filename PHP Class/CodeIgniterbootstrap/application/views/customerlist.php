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
		  <th>Name</th>
		  <th>Email</th>
		  <th>Mobile</th>
		  <th>City</th>
		  <th>State</th>
		  <th>Gender</th>
		  <th>Address</th>
		  <th>Interest</th>
		  <th>Action</th>
		  <th>Edit</th>
		  
		</tr>
	  </thead>
	  
	  <tbody>
	     <?php
		   foreach($cust as $row)
		   {
			   echo "<tr>";
			     echo"<td>$row->name</td>";
			     echo"<td>$row->email</td>";
			     echo"<td>$row->mobile</td>";
			     echo"<td>$row->city</td>";
			     echo"<td>$row->state</td>";
			     echo"<td>$row->address</td>";
				 echo"<td>$row->gender</td>";
			     echo"<td>$row->interest</td>";
			     echo"<td><a href='deletecustomer?id=$row->id '>Delete</a></td>";
			     echo"<td><a href='editcustomer?id=$row->id '>Edit</a></td>";
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