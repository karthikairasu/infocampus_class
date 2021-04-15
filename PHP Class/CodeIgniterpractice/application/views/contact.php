		
		<div class="col-sm-12 well" style="background-color:red;"><?php echo $this->session->flashdata('msg');?></div>
		<div class="row">
		 <form action="savecontact.php" method="POST">
		<h3 class="text-center">Contact Page</h3>
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Name</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="name">
			</div>

		 </div >
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Email</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="email">
			</div>

		 </div >
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Mobile</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="mobile">
			</div>

		 </div >
		 <div class="row form-group">
		  <div class="col-sm-4"><label>Message</label></div>
			<div class="col-sm-8">
			 <input type="text" class="form-control" name="message">
			</div>

		 </div >
		 
		 <div class="row text-center">
		   <button  class="btn btn-primary" type="submit">SAVE</button>
		   <button  class="btn btn-primary" type="reset">Clear</button>

		 </div >
		  </div >
		  </form>