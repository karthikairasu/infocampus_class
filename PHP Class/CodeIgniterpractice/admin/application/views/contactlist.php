<div class="row">
 <table class="table table-bordered">
  <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Message</th>
    <th colspan="2">Action</th>
  </thead>
 
  <tbody>
    <?php
	   foreach($cont as $row)
	   {
		   echo "<tr>";
		   echo "<td> $row->id</td>";
		   echo "<td> $row->name</td>";
		   echo "<td> $row->email</td>";
		   echo "<td> $row->mobile</td>";
		   echo "<td> $row->message</td>";
		   echo "<td><a href='editcontact.php?id=$row->id'><span class='glyphicon glyphicon-pencil'></span></a></td>";
		   echo "<td><a href='deletecontact.php?id=$row->id'><span class='glyphicon glyphicon-trash'></span></a></td>";
		   echo "</tr>";
	   }
	?>
  </tbody>
  </table>
</div>