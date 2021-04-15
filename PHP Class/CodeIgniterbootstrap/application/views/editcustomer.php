
		  <div class="col-sm-8 well" style="    background-color: darkgoldenrod;">
		  <form action="<?php echo BASEURL;?>index.php/bootstrap/updatecustomer" method="POST">
		      <div class="row form-group">
			  <div class="col-sm-4">
			    <label>Name</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="name" class="form-control" value="<?php echo $cust->name;?>">
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Email</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="email" class="form-control" value="<?php echo $cust->email;?>">
				</div>
				
			</div>
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Mobile</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="mobile" class="form-control" value="<?php echo $cust->mobile;?>">
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select City</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="city" class="form-control">
				  <option value="choose city">Choose city</option>
				  <option value="chennai" <?php if($cust->city=='chennai') echo 'selected';?> >Chennai</option>
				  <option value="bangalore" <?php if($cust->city=='bangalore') echo 'selected';?> >Bangalore</option>
				  <option value="kochi" <?php if($cust->city=='kochi') echo 'selected';?> >Kochi</option>
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
				  <option value="tamilnadu" <?php if($cust->state=='tamilnadu') echo 'selected';?> >Tamilnadu</option>
				  <option value="karnataka" <?php if($cust->state=='karnataka') echo 'selected';?> >Karnataka</option>
				  <option value="kerala" <?php if($cust->state=='kerala') echo 'selected';?> >Kerala</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Address</label>
				</div>
				
				<div class="col-sm-8">
			      <textarea type="text" name="address" class="form-control"><?php echo $cust->address;?></textarea>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>id</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="id" class="form-control"value="<?php echo $cust->id;?>"readonly/>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Gender</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="radio" name="gender" value="male" <?php if($cust->gender=='male') echo 'checked';?>>Male
			      <input type="radio" name="gender" value="female" <?php if($cust->gender=='female') echo 'checked';?>>FeMale
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Interest</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="checkbox" name="interest"  value="shopping" 
				  <?php if($cust->interest=='shopping') echo 'selected';?>>Shopping
			      <input type="checkbox" name="interest"  value="Singing"
				  <?php if($cust->interest=='singing') echo 'selected';?>>Singing
			      <input type="checkbox" name="interest"  value="dancing" 
				  <?php if($cust->interest=='dancing') echo 'selected';?>>Dancing
			      
				</div>
				
			</div>
			
			
			
			<div class="col-sm-12 text-center" >
			       <button type="submit" class="btn btn-primary">update</button>
			       <button type="reset" class="btn btn-danger">clear</button>
				   
				</div>
			</form>
		  </div>
	