<?php 
 include ('header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 well">
				<form method="post" action="savestate.php">
					
					<div class="row form-group">
						<div class="col-sm-4">
							<label>State</label>
						</div>
						<div class="col-sm-8">
							<input type="text" placeholder="Enter State to save" class="form-control"name="state">
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<button type="submit"class="btn btn-primary">Save user</button>
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