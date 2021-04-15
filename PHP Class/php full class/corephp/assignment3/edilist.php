<?php 
  $conn = mysqli_connect("localhost","root","","product");
   $id = $_REQUEST['id'];
   $sql = "select *  from pdetails where id=$id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_object($res);
?>

 <html>
	 <head>
	      <title>New Product</title>
		  <link rel="stylesheet" href="assets/css/bootstrap.css">
	 </head>
	 <body>
	      <div class="container"><br><br>
		      <div class="row">
			     <div class="col-sm-4"></div>
			     <div class="col-sm-4">
				      <form action="update.php" method="POST" enctype="multipart/form-data">
				      <div class="panel panel-danger">
					  <input type="hidden" name="productid" value="<?php echo $id; ?>">
					      <div class="panel-heading">
						      <div class="panel-title text-center">
							     <b>New Product</b>
							  </div>
						  </div>
						  <div class="panel-body"><br>
							  <div class="row form-group">
							     <div class="col-sm-3 text-center"><label>Name</label></div>
							     <div class="col-sm-9">
								     <input type="text" class="form-control" name="pname" value="<?php echo $row->name;?>">
								 </div>
							  </div>
							  <div class="row form-group">
							     <div class="col-sm-3 text-center"><label>Price</label></div>
							     <div class="col-sm-9">
								     <input type="text" class="form-control" name="price" value="<?php echo $row->price;?>">
								 </div>
							  </div>
							  <div class="row form-group">
							     <div class="col-sm-3 text-center"><br><label>Description</label></div>
							     <div class="col-sm-9">
								     <textarea class="form-control" name="message" value="<?php echo $row->message;?>"></textarea>
								 </div>
							  </div>
							  <div class="row form-group">
							     <div class="col-sm-3 text-center"><label>Photo</label></div>
							     <div class="col-sm-9">
								     <input type="file"  name="photo" value="<?php echo $row->photoname;?>">
								 </div>
							  </div>
 <div class="row form-group">
							     <div class="col-sm-3 text-center"><label>Status</label></div>
							     <div class="col-sm-9">
								     <input type="radio"  name="status" value="active" >&nbsp;&nbsp;Active
							  &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="status" value="inactive">&nbsp;&nbsp;Inactive
								 </div>
							  </div>
							  <br>	
						  </div>
						  <div class="panel-footer text-center">
						      <button type="submit">Save</button>
						  </div>
					  </div>
					   </form>
				 </div>
			     <div class="col-sm-4"></div>
			  </div>
		  </div>
	 </body>
	 
 </html>