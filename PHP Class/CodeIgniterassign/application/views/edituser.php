   <div class="col-sm-3"></div>
   <div class="col-sm-6">
     <form action="<?php echo BASEURL;?>index.php/Welcome/updateuser" method="POST">
     <h3 class="text-center">Please Register</h3>
	  <div class="row text-center">
	  <div class="row form-group">
	  <div class="col-sm-4"><label>Name</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	   <input type="text" class="form-control" name="name" value="<?php echo $user->name;?>" >
	 </div>
	 </div>
	 </div>
	
	 
	  <div class="row form-group">
	 <div class="col-sm-4"><label>Age</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	   <input type="text" class="form-control" name="age" value="<?php echo $user->age;?>">
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>city</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
	   <select class="form-control" name="city"> 
	     <option value="choose city " >Choose city</option>
	     <option value="bangalore" <?php if($user->city=='bangalore') echo 'selected';?>>bangalore</option>
	     <option value="mysore" <?php if($user->city=='mysore') echo 'selected';?>>mysore</option>
	     <option value="chennai" <?php if($user->city=='chennai') echo 'selected';?>>chennai</option>
	   </select>
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>pincode</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
	   <input type="text" class="form-control" name="pincode" value="<?php echo $user->pincode;?>">
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>Date of Birth</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	   <input type="text" class="form-control" name="dob" value="<?php echo $user->dob;?>">
	 </div>
	 </div>
	 </div>
	 
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>Gender</label></div>
	  <div class="col-sm-8">
	  <div class="input-group">
	   <input type="radio" value="male" name="gender">Male
	   <input type="radio" value="female" name="gender">FeMale
	 </div>
	 </div>
	 </div>
	 
	  
	 <div class="row form-group">
	  <div class="col-sm-4"><label>id</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
	   <input type="text" class="form-control" name="id" value="<?php echo $user->id;?>" readonly/>
	 </div>
	 </div>
	 </div>
	 
	 <div class="row text-center">
	   <button type="submit" class="btn btn-success">update</button>
	   <button type="clear" class="btn btn-danger">clear</button>
	 </div>
	 
	 
	 
	 
	 </div>
	 </form>
   </div>
   <div class="col-sm-3"></div>