<?php 
	include("dbconfig.php");
	$cid=$_POST['cid'];
	$sql="select * from contact where id='$cid'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($res);
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>Name</label>
						</div>
						<div class='col-sm-9'>
							<input type='text' id='efname' class='form-control' placeholder='Enter Name' value='$row->name'>
						</div>
					</div>";
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>Email</label>
						</div>
						<div class='col-sm-9'>
							<input type='text' id='eemail' class='form-control' placeholder='Enter Email' value='$row->email'>
						</div>
					</div>";
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>Mobile</label>
						</div>
						<div class='col-sm-9'>
							<input type='text' id='emobile' class='form-control' placeholder='Enter Mobile' value='$row->mobile'>
						</div>
					</div>";
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>Previous city</label>
						</div>
						<div class='col-sm-9'>
							<input type='text' id='precity' class='form-control'  value='$row->city' readonly>
						</div>
					</div>";
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>City</label>
						</div>
						<div class='col-sm-9'>
							<select class='form-control' id='ecity'>
								<option value=''>Choose City</option>
								<option value='Bangalore'>Bangalore</option>
								<option value='chennai'>Chennai</option>
								<option value='mumbai'>Mumbai</option>
							</select>
						</div>
					</div>";	
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>Message</label>
						</div>
						<div class='col-sm-9'>
							<textarea id='emsg' class='form-control' placeholder='Enter Message'>$row->message</textarea>
						</div>
					</div>";
	echo"<div class='row form-group'>
						<div class='col-sm-3'>
							<label>id</label>
						</div>
						<div class='col-sm-9'>
							<input type='text' id='cid' class='form-control'  value='$row->id' readonly>
						</div>
					</div>";
					
	echo"<div class='row form-group'>
						
						<div class='col-sm-12 text-center'>
							<button type='button' onclick='updatecontact()' data-dismiss='modal' class='btn btn-primary'>Update</button>
							
							
						</div>
					</div>";				
					
					
					

?>