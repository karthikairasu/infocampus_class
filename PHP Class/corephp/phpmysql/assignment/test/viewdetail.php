<head>
<link href="assets/css/bootstrap.css" rel="stylesheet">
</head>
<div class="col-sm-2"></div>
<div class="col-sm-8">
<table  class="table table-bordered">
  <caption class="text-center" >candidate list</caption>
  
  <tr>
    <th>Id</th>
    <th>Role</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Experience</th>
    <th>Current ctc</th>
    <th>Exp ctc</th>
    <th>Edit</th>
    <th>Delete</th>
	
  </tr>
  <?php
	   $conn = mysqli_connect("localhost", "root", "", "test");
	   $sql = "select * from uploadresume";
	   $res = mysqli_query($conn,$sql);
	   while($row = mysqli_fetch_object($res))
	   {
	   echo"<tr bgcolor='violet'>";
	   
	   echo "<td> $row->id</td>";
	   echo "<td> $row->role</td>";
	   echo "<td> $row->fullname</td>";
	   echo "<td> $row->email</td>";
	   echo "<td> $row->mobile</td>";
	   echo "<td> $row->experience</td>";
	   echo "<td> $row->current</td>";
	   echo "<td> $row->exp</td>";
	   echo "<td> <a href='#'>Edit</a></td>";
	   echo "<td><a href='#'>Delete</a> </td>";
	   
	   echo"</tr>";
	   }
	?>
  

</table>
</div>
<div class="col-sm-2"></div>