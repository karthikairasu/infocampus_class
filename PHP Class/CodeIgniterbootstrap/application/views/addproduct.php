
		  <div class="col-sm-8 well">
		  <form action="<?php echo BASEURL;?>index.php/bootstrap/saveproduct" method="POST">
		      <div class="row form-group">
			  <div class="col-sm-4">
			    <label>ProductName</label>
				</div>
				
				<div class="col-sm-8">
			      <input type="text" name="name" class="form-control">
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select Brand</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="brand" class="form-control">
				  <option value="choose brand">Choose Brand</option>
				  <option value="cadbury">Cadbury</option>
				  <option value="britannia">Britannia</option>
				  <option value="lays">Lays</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select Category</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="category" class="form-control">
				  <option value="choose category">Choose Category</option>
				  <option value="chocolate">Chocolate</option>
				  <option value="cookies">Cookies</option>
				  <option value="chips">Chips</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Select Price</label>
				</div>
				
				<div class="col-sm-8">
			      <select name="price" class="form-control">
				  <option value="choose price">Choose Price</option>
				  <option value="20">Rs20</option>
				  <option value="10">Rs10</option>
				  <option value="5">Rs5</option>
				  </select>
				</div>
				
			</div>
			
			<div class="row form-group">
			  <div class="col-sm-4">
			    <label>Description</label>
				</div>
				
				<div class="col-sm-8">
			      <textarea type="text" name="description" class="form-control"></textarea>
				</div>
				
			</div>
			
			
			
			
			<div class="col-sm-12 text-center" >
			       <button type="submit" class="btn btn-primary">save</button>
			       <button type="reset" class="btn btn-danger">clear</button>
				   
				</div>
			</form>
		  </div>
	