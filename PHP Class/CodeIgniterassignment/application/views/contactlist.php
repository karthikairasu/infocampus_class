
		  
		   <div class="row">
		   <table class="table table-bordered">
		     <thead>
			   <tr style="background-color:orange;">
			      <th>Sl No</th>
			      <th>Title </th>
			      <th>Description</th>
			      <th>image</th>
			      <th colspan="2">Action</th>
			   </tr>
			   
			 
			 </thead>
			 
			 <tbody>
			     <?php
				   foreach($contact as $row)
				   {
				         echo "<tr>";
						 echo"<td>$row->id</td>";
						 echo"<td>$row->title</td>";
						 echo"<td>$row->description</td>";
						 echo"<td><img src='".BASEURL."assets/images/$row->image' width='100px' height='100px'></td>";
						 echo"<td><a href='deletecontact.php?id=$row->id'><span class='glyphicon glyphicon-trash'></span></a></td>";
						 echo"<td><a href='editcontact.php?id=$row->id'><span class='glyphicon glyphicon-pencil'></span></a></td>";
						 echo "</tr>";
				   }
				 ?>
			 </tbody>
		   </table>
		 </div>
		  
		 