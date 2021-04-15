			<div class="col-sm-4"></div>
			  <div class="col-sm-4">
			  <form action="updateprofile.php" method="POST" enctype="multipart/form-data">
                <div class="row form-group">
				  <div class="col-sm-4"><label>Name</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="name" class="form-control" value="<?php echo $prof->name;?>">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Email</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="email" class="form-control" value="<?php echo $prof->email;?>">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Mobile</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="mobile" class="form-control" value="<?php echo $prof->mobile;?>">
				  </div>
				</div>
				
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>city</label></div>
				  <div class="col-sm-8">
				    <select name="city" class="form-control">
					  <option value="#" >Choose City</option>
					  <option value="chennai" <?php if($prof->city=='chennai') echo 'selected';?>>chennai</option>
					  <option value="bangalore" <?php if($prof->city=='bangalore') echo 'selected';?>>bangalore</option>
					  <option value="mysore" <?php if($prof->city=='mysore') echo 'selected';?>>mysore</option>
					</select>
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>State</label></div>
				  <div class="col-sm-8">
				    <select name="state" class="form-control">
					  <option value="#">Choose State</option>
					  <option value="tamilnadu" <?php if($prof->state=='tamilnadu') echo 'selected';?>>tamilnadu</option>
					  <option value="karnataka" <?php if($prof->state=='karnataka') echo 'selected';?>>karnataka</option>
					  <option value="kerala" <?php if($prof->state=='kerala') echo 'selected';?>>kerala</option>
					</select>
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Occupation</label></div>
				  <div class="col-sm-8">
				    <select name="occupation" class="form-control">
					  <option value="#">Choose occupation</option>
					  <option value="engineer" <?php if($prof->occupation=='engineer') echo 'selected';?>>engineer</option>
					  <option value="doctor" <?php if($prof->occupation=='doctor') echo 'selected';?>>doctor</option>
					  <option value="former" <?php if($prof->occupation=='former') echo 'selected';?>>former</option>
					</select>
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Company</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="company" class="form-control" value="<?php echo $prof->company;?>">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>Photo</label></div>
				  <div class="col-sm-8">
				    <input type="text"class="form-control" value="<?php echo $prof->image;?>" readonly/>
				    <input type="file" name="image" class="form-control">
				  </div>
				</div>
				
				<div class="row form-group">
				  <div class="col-sm-4"><label>id</label></div>
				  <div class="col-sm-8">
				    <input type="text" name="id" class="form-control" value="<?php echo $prof->id;?>" readonly/>
				  </div>
				</div>
				
				
				<div class="row text-center">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <button type="reset" class="btn btn-danger">Clear</button>
				  
				</div>
			  
			  </div>
			  </form>
			<div class="col-sm-4"></div>