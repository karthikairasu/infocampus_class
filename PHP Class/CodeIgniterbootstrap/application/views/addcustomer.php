
		  <div class="col-sm-8 well">
		  <form action="<?php echo BASEURL;?>index.php/bootstrap/savecustomer" method="POST">
		      <div class="row form-group">
			  <div class="col-sm-4">
			    <label>Name</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="name" class="form-control">
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Email</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="email" class="form-control">
				</div>
				
			</div>
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Mobile</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="mobile" class="form-control">
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select City</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="city" class="form-control">
				  <option value="choose city">Choose city</option>
				  <option value="chennai">Chennai</option>
				  <option value="bangalore">Bangalore</option>
				  <option value="kochi">Kochi</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select State</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="state" class="form-control">
				  <option value="choose state">Choose State</option>
				  <option value="tamilnadu">Tamilnadu</option>
				  <option value="karnataka">Karnataka</option>
				  <option value="kerala">Kerala</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Address</label>
				</div>
				
				<div class="col-sm-8">
			      <textarea type="text" name="address" class="form-control"></textarea>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Gender</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="radio" name="gender" value="male">Male
			      <input type="radio" name="gender" value="female">FeMale
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Interest</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="checkbox" name="interest"  value="shopping">Shopping
			      <input type="checkbox" name="interest"  value="Singing">Singing
			      <input type="checkbox" name="interest"  value="dancing">Dancing
			      
				</div>
				
			</div>
			
			
			
			<div class="col-sm-12 text-center" >
			       <button type="submit" class="btn btn-primary">save</button>
			       <button type="reset" class="btn btn-danger">clear</button>
				   
				</div>
			</form>
		  </div>
	