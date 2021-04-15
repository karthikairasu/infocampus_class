<div class="col-sm-8">
  <div class="row">
    <div class="col-sm-2">
	</div>
	<div class="col-sm-8">
	 <div class="row">
	    <div class="col-sm-1"></div>
	    <div class="col-sm-10">
	   
	 <table class="table table-stripped">
	  <thead>
	    <tr>
		  <th>id</th>
		  <th>City</th>
		  <th>name</th>
		  <th>Delete</th>
		  <th>Edit</th>
		</tr>
	  </thead>
	  
	  <tbody>
	     <?php
		   foreach($city as $row)
		   {
			   echo "<tr>";
			     echo"<td>$row->id</td>";
				 echo"<td>$row->city</td>";
				 echo"<td>$row->name</td>";
				 echo"<td><a href='deletecity?id=$row->id'>Delete</a></td>";
				 echo"<td><a href='editcity?id=$row->id'>Edit</a></td>";
			     
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