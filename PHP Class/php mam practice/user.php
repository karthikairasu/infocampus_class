<?php 
 include ('header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 well">
				<form method="post" action="saveuser.php">
					<div class="row form-group">
						<div class="col-sm-4">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" placeholder="Enter your name" name="fname"class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>Email</label>
						</div>
						<div class="col-sm-8">
							<input type="text" placeholder="Enter your email" name="email"class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>Mobile</label>
						</div>
						<div class="col-sm-8">
							<input type="text" placeholder="Enter your mobile" name="mobile"class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>Payment Option</label>
						</div>
						<div class="col-sm-8">
							<?php  
							include('dbconfig.php');
							$sql="select * from payment";
							$res1=mysqli_query($conn,$sql);
							while($row1=mysqli_fetch_object($res1)){
								echo "<input type='checkbox' name='payment' value='>$row1->pid'>$row1->pname &nbsp;";
							}
							?>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>City</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" name="city">
								<option value="0">Choose City</option>
								<?php
								include('dbconfig.php');
								$sql="select * from city";
								$res=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_object($res)){
									echo "<option value='$row->id'>$row->cityname</option>";
								}
								?>
							</select>
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