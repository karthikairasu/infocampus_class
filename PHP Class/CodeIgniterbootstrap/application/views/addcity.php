
		  <div class="col-sm-8 well">
		   <form action="<?php echo BASEURL;?>index.php/bootstrap/savecity" method="POST">
		      <div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select city</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="city" class="form-control">
				  <option value="choose city">Choose city</option>
				  <option value="bangalore">bangalore</option>
				  <option value="chennai">chennai</option>
				  <option value="mysore">mysore</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Name</label>
				</div>
				
				<div class="col-sm-8">
			       <input type="text" name="name" class="form-control">
				   
				</div>
				
			</div>
			
			<div class="col-sm-12 text-center" >
			       <button type="submit" class="btn btn-primary">save</button>
			       <button type="reset" class="btn btn-danger">clear</button>
				   
				</div>
			</form>
		  </div>
	