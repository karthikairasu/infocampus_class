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
		  <th>state name</th>
		  <th>Action</th>
		</tr>
	  </thead>
	  
	  <tbody>
	     <?php
		   foreach($state as $row)
		   {
			   echo "<tr>";
			     echo"<td>$row->stateid</td>";
				 echo"<td>$row->statename</td>";
				 echo"<td><a href='deletestate?id=$row->stateid'>Delete</a></td>";
				
			     
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