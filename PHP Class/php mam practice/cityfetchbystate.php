<?php 
 include ('header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 well">
				<form method="post" action="savecity.php">
					
					<div class="row form-group">
						<div class="col-sm-4">
							<label>State</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" name="state">
								<option value="0">Choose State</option>
								<?php
								include('dbconfig.php');
								$sql="select * from state";
								$res=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_object($res)){
									echo "<option value='$row->id'>$row->sname</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>City</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="city"  class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<button type="submit"class="btn btn-primary">Save City</button>
							<button type="reset"class="btn btn-danger">Reset</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
 <?php 
 include ('footer.php');
?>