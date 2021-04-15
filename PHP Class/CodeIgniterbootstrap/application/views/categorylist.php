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
		  <th>name</th>
		  <th>Action</th>
		</tr>
	  </thead>
	  
	  <tbody>
	     <?php
		   foreach($cat as $row)
		   {
			   echo "<tr>";
			     echo"<td>$row->categoryid</td>";
				 echo"<td>$row->categoryname</td>";
				 echo"<td><a href='deletecategory?id=$row->categoryid'>Delete</a></td>";
			     
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