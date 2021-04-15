
	   <div class="row">
	     <div class="col-sm-4"></div>
		 <form action="updatecontact.php" method="POST" enctype="multipart/form-data">
	     <div class="col-sm-4" style="background-color:cadetblue;">
		     <h3 align="center">Contact Page</h3>
		   <div class="row form-group">
		    <div class="col-sm-4"><label>title</label></div>
			<div class="col-sm-8">
			  <input type="text" name="title" class="form-control" value="<?php echo $contact->title;?>">
			</div>
		   </div>
		   
		   <div class="row form-group">
		    <div class="col-sm-4"><label>Description</label></div>
			<div class="col-sm-8">
			  <input type="text" name="description" class="form-control" value="<?php echo $contact->description;?>">
			</div>
		   </div>
		   
		    <div class="row form-group">
		    <div class="col-sm-4"><label>id</label></div>
			<div class="col-sm-8">
			  <input type="text" name="id" class="form-control" value="<?php echo $contact->id;?>">
			</div>
		   </div>
		   
		   
		   <div class="row form-group text-center">
		    <button type="submit" class="btn btn-success">update</button>
		    <button type="reset" class="btn btn-danger">Clear</button><br><br>
			
		   </div>
		   
		 </div>
		 </form>
	     <div class="col-sm-4"></div>
	   </div>
	