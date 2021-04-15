<?php
	include("header.php");
?>
	<div class="container" id="maindiv">
		<div class="row well">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<form action="logincheckform.php" method="POST">
					<div class="row">
						<div class="col-sm-6">
							<div class="row form-group">
								<div class="col-sm-4"><label>Email<label></div>
								<div class="col-sm-8">
									<input type="text" name="email" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row form-group">
								<div class="col-sm-4"><label>Password<label></div>
								<div class="col-sm-8">
									<input type="password" name="password" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button><br>
							<h5>If not Registered yet Please<a href="myprofile.php">Register Here</a></h5>
						</div>
						
					</div>		 
				</form>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>

<?php
	include("footer.php");
?>