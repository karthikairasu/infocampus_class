			<div class="col-sm-4"></div>
			  <div class="col-sm-4">
			  <form action="saveprofile.php" method="POST" enctype="multipart/form-data">
                <div class="row form-group">
				  <div class="col-sm-4"><label>Name</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="name" class="form-control">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Email</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="email" class="form-control">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Mobile</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="mobile" class="form-control">
				  </div>
				</div>
				
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>city</label></div>
				  <div class="col-sm-8">
				    <select name="city" class="form-control">
					  <option value="#">Choose City</option>
					  <option value="chennai">chennai</option>
					  <option value="bangalore">bangalore</option>
					  <option value="mysore">mysore</option>
					</select>
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>State</label></div>
				  <div class="col-sm-8">
				    <select name="state" class="form-control">
					  <option value="#">Choose State</option>
					  <option value="tamilnadu">tamilnadu</option>
					  <option value="karnataka">karnataka</option>
					  <option value="kerala">kerala</option>
					</select>
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Occupation</label></div>
				  <div class="col-sm-8">
				    <select name="occupation" class="form-control">
					  <option value="#">Choose occupation</option>
					  <option value="engineer">engineer</option>
					  <option value="doctor">doctor</option>
					  <option value="former">former</option>
					</select>
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Company</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="company" class="form-control">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Photo</label></div>
				  <div class="col-sm-8">
				    <input type="file" name="photo" class="form-control">
				  </div>
				</div>
				
				<div class="row text-center">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <button type="reset" class="btn btn-danger">Clear</button>
				  
				</div>
			  
			  </div>
			  </form>
			<div class="col-sm-4"></div>