<?php 
	include("header.php");
	include("dbconfig.php");
	$bid=$_REQUEST['bid'];
	$sql="select * from blogs where bid='$bid'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_object($res);
	
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 well">
				<form method="post" action="updateblog.php" enctype="multipart/form-data">
					<div class="row form-group">
						<div class="col-sm-4"><label>Title</label></div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="title"
							placeholder="Enter Title" value="<?php echo $row->title; ?>">
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-4"><label>Description</label></div>
						<div class="col-sm-8">
							<textarea class="form-control" name="description"><?php echo $row->description;?></textarea>
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-4"><label>Previous Uploaded image</label></div>
						<div class="col-sm-8">
							<img src="assets/uploadedimg/<?php echo$row->image;?>" height="100px" width="100px"/>
							<input type="text" value="<?php echo $row->image?>"  name="previousimg" readonly/>
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-4"><label></label></div>
						<div class="col-sm-8">
							
							<input type="text" value="<?php echo $row->bid?>"  name="id" readonly/>
						</div>
					
					</div>
					
					<div class="row form-group">
						<div class="col-sm-4"><label>Upload Image for update</label></div>
						<div class="col-sm-8">
							<input type="file" name="Photo" />
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary">Update</button>
							<button type="reset" class="btn btn-danger">Clear</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
<?php 

include("footer.php");
?>
