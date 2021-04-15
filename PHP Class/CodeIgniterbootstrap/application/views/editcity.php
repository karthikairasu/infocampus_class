
		  <div class="col-sm-8 well">
		   <form action="<?php echo BASEURL;?>index.php/bootstrap/updatecity" method="POST">
		      <div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select city</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="city" class="form-control">
				  <option value="choose city">Choose city</option>
				  <option value="bangalore" <?php if($cit->city=='bangalore')echo 'selected';?>>bangalore</option>
				  <option value="chennai" <?php if($cit->city=='chennai')echo 'selected';?> >chennai</option>
				  <option value="mysore" <?php if($cit->city=='mysore')echo 'selected';?> >mysore</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>id</label>
				</div>
				
				<div class="col-sm-8">
			       <input type="text" name="id" class="form-control" value="<?php echo $cit->id;?>" readonly/>
				   
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Name</label>
				</div>
				
				<div class="col-sm-8">
			       <input type="text" name="name" class="form-control" value="<?php echo $cit->name;?>">
				   
				</div>
				
			</div>
			
			<div class="col-sm-12 text-center" >
			       <button type="submit" class="btn btn-primary">save</button>
			       <button type="reset" class="btn btn-danger">clear</button>
				   
				</div>
			</form>
		  </div>
	