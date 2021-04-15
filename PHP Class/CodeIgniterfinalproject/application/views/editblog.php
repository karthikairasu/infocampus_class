 
		<div class="row">
		  <div class="col-sm-3 ">
		   
		  </div>
		  <form action="updateblog.php" method="POST" enctype="multipart/form-data">
		  <div class="col-sm-6 well text-center" >
		    <h3>Add Blog</h3>
		    <div class="row form-group">
			 <div class="col-sm-4 "><label>Title</label></div>
			 <div class="col-sm-8">
			  <input type="text" name="title" class="form-control" value="<?php echo $blog->title;?>">
			 </div>
			</div>
			
			<div class="row form-group">
			 <div class="col-sm-4 "><label>Id</label></div>
			 <div class="col-sm-8">
			  <input type="text" name="id" class="form-control" value="<?php echo $blog->id;?>" readonly/>
			 </div>
			</div>
			
			<div class="row form-group">
			 <div class="col-sm-4 "><label>Description</label></div>
			 <div class="col-sm-8">
			  <input type="text" name="description" class="form-control" value="<?php echo $blog->title;?>">
			 </div>
			</div>
			
			<div class="row form-group">
			 <div class="col-sm-4 "><label>Image</label></div>
			 <div class="col-sm-8">
			  <input type="text" class="form-control" value="<?php echo $blog->image;?>" readonly/>
			  <input type="file" name="image" class="form-control">
			 </div>
			</div>
			
			<div class="row form-group">
			 <button type="submit" class="btn btn-success">send</button>
			</div>
			
			
		  </div>
		  <div class="col-sm-3 ">
		   
		  </div>
	   </div>