 
		<div class="row">
		  <div class="col-sm-3 ">
		   
		  </div>
		  <div class="col-sm-6 well" style="">
		    <h4 class="text-center"><?php echo $this->session->flashdata("msg");?></h4>
		    <h3>bloglist</h3>
		     <table class="table table-bordered">
		       <thead>
		         <th>id</th>
		         <th>title</th>
		         <th>description</th>
		         <th>Image</th>
		         <th>action</th>
		         <th>delete</th>
			   </thead>
			   
			   
			   <tbody>
			      <?php
				   foreach($blog as $row)
				   {
					   echo "<tr>";
						 echo"<td>$row->id</td>";
						 echo"<td>$row->title</td>";
						 echo"<td>$row->description</td>";
						 echo"<td><img src='".BASEURL."assets/images/$row->image' width='100px' height='100px' class='img-circle'></td>";
						 echo"<td><a href='editblog.php?id=$row->id'>Edit</a></td>";
						 echo"<td><a href='deleteblog.php?id=$row->id'>Delete</a></td>";
						 echo "</tr>";
				   }
		        ?>
			   </tbody>
			 </table>
			
		  </div>
		  <div class="col-sm-3 ">
		   
		  </div>
	   </div>