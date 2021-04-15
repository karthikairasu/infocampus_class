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
								<input type='text' id='fname' class='form-control' placeholder='Enter Name' value='$row->name'>
							</div>
						</div>";
						
		echo "<div class='row form-group'>
							<div class='col-sm-3'>
								<label>Email</label>
							</div>
							<div class='col-sm-9'>
								<input type='text' id='email' class='form-control' placeholder='Enter Email'value='$row->email'>
							</div>
						</div>";				
		echo "<div class='row form-group'>
							<div class='col-sm-3'>
								<label>Mobile</label>
							</div>
							<div class='col-sm-9'>
							<input type='text' id='mobile' class='form-control' placeholder='Enter Mobile' value='$row->mobile'>
							</div>
						</div>";		
        echo "<div class='row form-group'>
							<div class='col-sm-3'>
								<label>pre city</label>
							</div>
							<div class='col-sm-9'>
				<input type='text' id='precity' class='form-control' placeholder='Enter Mobile' value='$row->city'readonly/>
							</div>
						</div>";								
		echo "	<div class='row form-group'>
							<div class='col-sm-3'>
								<label>City</label>
							</div>
							<div class='col-sm-9'>
								<select class='form-control' id='city'>
									<option value=''>Choose City</option>
									<option value='Bangalore' if($row->city=='bangalore') selected>Bangalore</option> 
									<option value='chennai' if($row->city=='chennai') selected>Chennai</option>
									<option value='mumbai' if($row->city=='mumbai') selected>Mumbai</option>
								</select>
							</div>
						</div>";				
		echo "<div class='row form-group'>
							<div class='col-sm-3'>
								<label>Message</label>
							</div>
							<div class='col-sm-9'>
							<textarea type='text' id='msg' class='form-control' placeholder='Enter Message'>$row->mobile</textarea>
							</div>
						</div>";	

        echo "<div class='row form-group'>
							<div class='col-sm-3'>
								<label>id</label>
							</div>
							<div class='col-sm-9'>
							<input type='text' id='id' class='form-control' placeholder='Enter Mobile' value='$row->id'>
							</div>
						</div>";								
		echo "<div class='row form-group'>
							
							<div class='col-sm-12 text-center'>
								<button type='button' onclick='updatecontact()' class='btn btn-primary'>Update</button>
								
								
							</div>
						</div>";
					
?>