 <h4 class="text-center"></h4>
<table class="table table-bordered">

 <thead>
   <th>Id</th>
   <th>Name</th>
   <th>Age</th>
   <th>City</th>
   <th>Pincode</th>
   <th>Dob</th>
   <th>Photo</th>
   <th>Gender</th>
   <th colspan="2">Action</th>
 </thead>
 
 <tbody>
   <?php
   foreach($user as $row)
   {
    echo"<tr>";
	echo "<td>$row->id</td>";
	echo "<td>$row->name</td>";
	echo "<td>$row->age</td>";
	echo "<td>$row->city</td>";
	echo "<td>$row->pincode</td>";
	echo "<td>$row->dob </td>";
	echo "<td><img src='".BASEURL."assets/images/$row->imagename' height='50px' weight='50px' class='img-circle'></td>";
	echo "<td>$row->gender</td>";
	echo "<td><a href='edituser?id=$row->id'>Edit</a></td>";
	echo "<td><a href='deleteuser?id=$row->id'>Delete</a></td>";
    echo"</tr>";
   }
   ?>
 </tbody>

</table>