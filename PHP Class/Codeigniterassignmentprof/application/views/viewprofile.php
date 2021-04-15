<div class="col-sm-12 well">
<table class="table table-hover">
<thead>

  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>City</th>
    <th>State</th>
    <th>Occupation</th>
    <th>Company</th>
    <th>Photo</th>
    <th colspan="2">Action</th>
    
  </tr>
  </thead>
  <tbody>
  
  <?php
   foreach($prof as $row)
   {
     echo" <tr>";
	 echo"<td>$row->id</td>";
	 echo"<td>$row->name</td>";
	 echo"<td>$row->email</td>";
	 echo"<td>$row->mobile</td>";
	 echo"<td>$row->city</td>";
	 echo"<td>$row->state</td>";
	 echo"<td>$row->occupation</td>";
	 echo"<td>$row->company</td>";
	 echo"<td><img src='".BASEURL."assets/images/$row->image' width='100px' height='100px' class='img-circle'></td>";
	 echo"<td><a href='deleteprofile.php?id=$row->id'><span class='glyphicon glyphicon-trash'></span></a></td>";
	 echo"<td><a href='editprofile.php?id=$row->id'><span class='glyphicon glyphicon-pencil'></span></a></td>";
     echo" </tr>";
   }
   
  ?>
  
</tbody>

</table>
</div>