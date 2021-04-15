   <div class="col-sm-3"></div>
   <div class="col-sm-6">
     <form action="<?php echo BASEURL;?>index.php/welcome/saveregister" method="POST" enctype="multipart/form-data">
     <h3 class="text-center">Please Register</h3>
	  <div class="row text-center">
	  <div class="row form-group">
	  <div class="col-sm-4"><label>Name</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	   <input type="text" class="form-control" name="name">
	 </div>
	 </div>
	 </div>
	 
	  <div class="row form-group">
	 <div class="col-sm-4"><label>Age</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	   <input type="text" class="form-control" name="age">
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>city</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
	   <select class="form-control" name="city"> 
	     <option value="choose city">Choose city</option>
	     <option value="bangalore">bangalore</option>
	     <option value="mysore">mysore</option>
	     <option value="chennai">chennai</option>
	   </select>
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>pincode</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
	   <input type="text" class="form-control" name="pincode">
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>Date of Birth</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	   <input type="text" class="form-control" name="dob">
	 </div>
	 </div>
	 </div>
	 
	 <div class="row form-group">
	 <div class="col-sm-4"><label>Photo</label></div>
	  <div class="col-sm-8">
     <div class="input-group">
	   <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	   <input type="file" class="form-control" name="photo">
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
	 
	 <div class="row text-center">
	   <button type="submit" class="btn btn-success">register</button>
	   <button type="clear" class="btn btn-danger">clear</button>
	 </div>
	 
	 
	 
	 
	 </div>
	 </form>
   </div>
   <div class="col-sm-3"></div>