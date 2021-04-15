<head>
<link href="assets/css/bootstrap.css" rel="stylesheet">
</head>
<div class="col-sm-2"></div>
<div class="col-sm-8">
<table  class="table table-bordered">
  <caption class="text-center" >requirement details</caption>
  
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
	   $sql = "select * from requirement";
	   $res = mysqli_query($conn,$sql);
	   while($row = mysqli_fetch_object($res))
	   {
	   echo"<tr bgcolor='orange'>";
	   
	   echo "<td> $row->id</td>";
	   echo "<td> $row->cname</td>";
	   echo "<td> $row->email</td>";
	   echo "<td> $row->person</td>";
	   echo "<td> $row->mobile</td>";
	   echo "<td> $row->phone</td>";
	   echo "<td> $row->address</td>";
	   echo "<td> $row->full</td>";
	   echo "<td> <a href='#'>Edit</a></td>";
	   echo "<td><a href='#'>Delete</a> </td>";
	   
	   echo"</tr>";
	   }
	?>
  

</table>
</div>
<div class="col-sm-2"></div>