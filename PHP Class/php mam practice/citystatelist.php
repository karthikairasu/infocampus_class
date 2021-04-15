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
						<th>City Name</th>
						<th>State Name</th>
						
					</tr>
					<?php 
					include("dbconfig.php");
					$sql="select * ,sname from city,state where city.stateid=state.id";
					$res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_object($res))
					{
						echo"<tr>";
							echo"<td>$row->cityname</td>";
							echo"<td>$row->sname</td>";
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

