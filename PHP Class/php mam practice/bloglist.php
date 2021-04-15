<?php 
include("header.php");
?>


<div class="container">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Image</th>
				</tr>
				<?php
					include("dbconfig.php");
					$sql="select * from blogs";
					$res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_object($res))
					{
						echo"<tr>";
							echo"<td>$row->title</td>";
							echo"<td>$row->description</td>";
							echo"<td><img src='assets/uploadedimg/$row->image'
							height='100px' width='100px'></td>";
							echo"<td><a href='deleteblog.php?bid=$row->bid'>Delete</a></td>";
							echo"<td><a href='editblog.php?bid=$row->bid'>Edit</a></td>";
							
						echo"</tr>";
					}
	
	
	
				?>
			
			</table>
		
		
		
		
		</div>
		<div class="col-sm-3">
		</div>
	</div>
</div >
<?php 
include("footer.php");
?>

