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
		  <th>brand name</th>
		  <th>Action</th>
		</tr>
	  </thead>
	  
	  <tbody>
	     <?php
		   foreach($brand as $row)
		   {
			   echo "<tr>";
			     echo"<td>$row->brandid</td>";
				 echo"<td>$row->brandname</td>";
				 echo"<td><a href='deletebrand?id=$row->brandid'>Delete</a></td>";
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