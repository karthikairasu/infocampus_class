<div class="row">
	<div class="col-sm-12">
	<h3 class="text-center">brand list</h3>
	<table class="table table-bordered table-hover">
	<tr class="active">
	<th>brand ID</th>
	<th>brand NAME</th>
	
	</tr>
	<?php 
	include("dbconfiguree.php");
	$sql = "select * from brand";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
	echo "<tr>";
	echo "<td>$row->id</td>";
	echo "<td>$row->name</td>";
	
	
	
	echo "</tr>";
	}
	?>
	</table>
	</div>
	
	</div>