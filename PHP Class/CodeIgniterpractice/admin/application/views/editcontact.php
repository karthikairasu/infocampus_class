		
		<div class="col-sm-12 well" style="background-color:red;"></div>
		<div class="row">
		 <form action="updatecontact.php" method="POST">
		<h3 class="text-center">Contact Page</div>
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Name</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="name" value="<?php echo $cont->name;?>">
			</div>

		 </div >
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Email</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="email" value="<?php echo $cont->email;?>">
			</div>

		 </div >
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Mobile</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="mobile" value="<?php echo $cont->mobile;?>">
			</div>

		 </div >
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Message</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="message" value="<?php echo $cont->message;?>">
			</div>

		 </div >
		 
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Id</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="id" value="<?php echo $cont->id;?>" readonly/>
			</div>

		 </div >
		 
		 <div class="row text-center">
		   <button  class="btn btn-primary" type="submit">SAVE</button>
		   <button  class="btn btn-primary" type="reset">Clear</button>

		 </div >
		  </div >
		  </form>