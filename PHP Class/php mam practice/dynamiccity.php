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
							<label>City Name</label>
						</div>
						<div class="col-sm-4">
							<input type="text" placeholder="Enter city name" name="city"class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<button type="submit"class="btn btn-primary">Save City</button>
							<button type="reset"class="btn btn-primary">Reset</button>
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